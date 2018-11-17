<?php

require_once 'inc/db.php';

$emailError = "";
$email = "";
$passError = "";

$error = false;

if( isset($_POST['btn-login']) ) {

 // prevent sql injections/ clear user invalid inputs
 $email = trim($_POST['email']);
 $email = strip_tags($email);
 $email = htmlspecialchars($email);

 $pass = trim($_POST['pass']);
 $pass = strip_tags($pass);
 $pass = htmlspecialchars($pass);
 // prevent sql injections / clear user invalid inputs

 if(empty($email)){
  $error = true;
  $emailError = "Please enter your email address.";
 } else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
  $error = true;
  $emailError = "Please enter valid email address.";
 }

 if(empty($pass)){
  $error = true;
  $passError = "Please enter your password.";
 }

 // if there's no error, continue to login
 if (!$error) {
  
  $password = hash('sha256', $pass); // password hashing

  $res=mysqli_query($conn, "SELECT userId, userName, userPass, userRole FROM users WHERE userEmail='$email'");
  $row=mysqli_fetch_array($res, MYSQLI_ASSOC);
  $count = mysqli_num_rows($res); // if uname/pass is correct it returns must be 1 row

  if( $count == 1 && $row['userPass']==$password ) {
   $_SESSION['user'] = $row['userId'];
   $_SESSION['userRole'] = $row['userRole'];
 
      if( $_SESSION['userRole'] == "2" ) { // ADMIN VERFICATION
        header("Location: admin.php");
      } else {
        header("Location: index.php");
      }

   } 
   else {
      $errMSG = "Incorrect Credentials, Try again...";
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


      <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
          
                  <h2>Sign In.</h2>
                  <hr />

                 <?php
        if ( isset($errMSG) ) {
          echo $errMSG; ?>
                    
                     <?php
        }
        ?>
              <div class="form-group">
                  <input type="email" name="email" class="form-control" placeholder="Your Email" value="<?php echo $email; ?>" maxlength="40" />
                  <span class="text-danger"><?php echo $emailError; ?></span>
              </div>
              <div class="form-group">
                  <input type="password" name="pass" class="form-control" placeholder="Your Password" maxlength="15" />
                  <span class="text-danger"><?php echo $passError; ?></span>
              </div>
                  <button type="submit" class="btn btn-block btn-primary" name="btn-login">Sign In</button>
                
                      <p> <strong>Test Accounts:</strong> <br>
                      admin@travel.at (admin)<br>
                      pw: 123456 <br>
                      <br>
                      k@k.at (User)<br>
                      pw: 123456
                  </p>
                  <hr />
        
                  <a href="register.php">Sign Up Here...</a>
         </form>
       </div>
     </div>
     
      <?php
        include ('inc/footer.php'); 
      ?>

<?php ob_end_flush(); ?>