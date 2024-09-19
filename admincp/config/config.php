<?php
$servername = "localhost";
$username = "root";
$password = "";
$my_db = "2k_store";

// Create connection
$mysqli = mysqli_connect($servername, $username, $password,$my_db);

// Check connection
if (!$mysqli) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>