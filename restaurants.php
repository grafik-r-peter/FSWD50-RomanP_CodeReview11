<?php include ('inc/db.php');
ob_start();
session_start();
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
    // START RESTAURANTS ACTION
      ?>
      	<div class="row mt-5">
	      <?php
	              include ('inc/a_restaurants.php');
	      ?>
  		</div>


        



      <?php
        include ('inc/footer.php'); 
      ?>
    </div>

    <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>




