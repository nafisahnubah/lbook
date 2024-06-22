<?php

$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "Library_1_0";

//Create connection
$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully.";

?>