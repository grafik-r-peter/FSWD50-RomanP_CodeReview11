<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "cr11_romanpeter_travelmatic";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);  

if (!$conn) {
   die("Connection failed: " . mysqli_connect_error() . "\n");
}

?>