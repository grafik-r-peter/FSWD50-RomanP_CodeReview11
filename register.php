<?php
ob_start();
session_start(); // start a new session or continues the previous

require_once 'inc/db.php';
$nameError = "";
$name = "";
$email = "";
$emailError = "";
$passError = "";
$userRole = "1";

$error = false;
if ( isset($_POST['btn-signup']) ) {
 
 // sanitize user input to prevent sql injection
$name = trim($_POST['name']);

  //trim - strips whitespace (or other characters) from the beginning and end of a string
$name = strip_tags($name);

  // strip_tags — strips HTML and PHP tags from a string

$name = htmlspecialchars($name);
 // htmlspecialchars converts special characters to HTML entities
 $email = trim($_POST['email']);
 $email = strip_tags($email);
 $email = htmlspecialchars($email);

 $pass = trim($_POST['pass']);
 $pass = strip_tags($pass);
 $pass = htmlspecialchars($pass);

 // basic name validation
 if (empty($name)) {
  $error = true;
  $nameError = "Please enter your full name.";
 } else if (strlen($name) < 3) {
  $error = true;
  $nameError = "Name must have at least 3 characters.";
 } else if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
  $error = true;
  $nameError = "Name must contain alphabets and space.";
 }

 //basic email validation
 if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
  $error = true;
  $emailError = "Please enter valid email address.";
 } else {
  // checks whether the email exists or not
  $query = "SELECT userEmail FROM users WHERE userEmail='$email'";
  $result = mysqli_query($conn, $query);
  $count = mysqli_num_rows($result);
  if($count!=0){
   $error = true;
   $emailError = "Provided Email is already in use.";
  }
 }
 // password validation
 if (empty($pass)){
  $error = true;
  $passError = "Please enter password.";
 } else if(strlen($pass) < 6) {
  $error = true;
  $passError = "Password must have atleast 6 characters.";
 }

 // password hashing for security
$password = hash('sha256', $pass);


 // if there's no error, continue to signup
 if( !$error ) {
  
  $query = "INSERT INTO users(userName,userEmail,userPass, userRole) VALUES('$name','$email','$password', $userRole)";
  $res = mysqli_query($conn, $query);
  
  if ($res) {
   $errTyp = "success";
   $errMSG = "Successfully registered, you may login now";
   unset($name);
   unset($email);
   unset($pass);
   unset($userRole);
  } else {
   $errTyp = "danger";
   $errMSG = "Something went wrong, try again later...";
  }
  
 }


}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A bunch of restaurants, concerts and cultural places visited by me.">
    <meta name="author" content="Roman PETER">
    <title>Travel-o-matic - Blog</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- CUSTOM STYLING -->
    <link href="css/style.css" rel="stylesheet">
  </head>

  <body>
    <div class="container">

      <?php 
      // Start NAV
        include ('inc/nav.php'); 
      // Start CAROUSEL HEADER
        include ('inc/carousel.php'); 
      ?>

      <!-- START CONTENT -->
    <div class="row justify-content-md-center mt-5">
      <div class="col-md-4">
      <form class="form-horizontal" method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
  
      
            <h2>Sign Up.</h2>
            <hr />
          
           <?php
             if ( isset($errMSG) ) {
            
             ?>
            <div class="alert alert-<?php echo $errTyp ?>">
                          <?php echo $errMSG; ?>
            </div>
          <?php
            }
            ?>
            <div class="form-group">
              <input type="text" name="name" class="form-control" placeholder="Enter Name" maxlength="50" value="<?php echo $name ?>" />
              <span class="text-danger"><?php echo $nameError; ?></span>
            </div>
          
            <div class="form-group">
              <input type="email" name="email" class="form-control" placeholder="Enter Your Email" maxlength="40" value="<?php echo $email ?>" />
              <span class="text-danger"><?php echo $emailError; ?></span>
            </div>

            <div class="form-group">
              <input type="password" name="pass" class="form-control" placeholder="Enter Password" maxlength="15" />         
              <span class="text-danger"><?php echo $passError; ?></span>
            </div>


          
            <button type="submit" class="btn btn-block btn-primary" name="btn-signup">Sign Up</button>
            <hr />
          
            <a href="login.php">Sign in Here...</a>
    
  
   </form>
    </div>
 </div>
      <?php
        include ('inc/footer.php'); 
      ?>
</body>
</html>
<?php ob_end_flush(); ?>