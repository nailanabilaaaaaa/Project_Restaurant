<?php

//main connection file for both admin & front end
$servername = "10.0.0.244"; //server
$username = "admin"; //username
$password = "Nelsay_12345"; //password
$dbname = "resto_db";  //database

// Create connection
$db = mysqli_connect($servername, $username, $password, $dbname); // connecting 
// Check connection
if (!$db) {       //checking connection to DB	
    die("Connection failed: " . mysqli_connect_error());
}

?>