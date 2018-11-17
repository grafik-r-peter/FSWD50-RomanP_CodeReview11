<?php
// select logged-in users details

// CANT FIGURE THIS SHIT OUT; FUCKING FUCK //
//$res = mysqli_query($conn, "SELECT * FROM users WHERE userId=".$_SESSION['user']);
//$userRow = mysqli_fetch_array($res, MYSQLI_ASSOC);

?>


    <nav class="navbar navbar-expand-md navbar-light bg-travel fixed-top">
      <a class="navbar-brand" href="index.php">Travel-o-matic</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="events.php">Events</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="restaurants.php">Restaurants</a>
          </li>          
        </ul>

  <?php 

        if( isset($_SESSION['user'])!="" ){
            echo "<a href='inc/logout.php?logout'>Sign Out</a>
                ";
        }
        else {
            echo "<form action='login.php' class='form-inline mt-2 mt-md-0'>
                    <button class='btn btn-outline-success my-2 my-sm-0'>Login, mate</button>
                  </form>";           
        }
  ?>


      </div>
    </nav>