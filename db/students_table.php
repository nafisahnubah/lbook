<?php
include('../config.php');

// sql to create table
$sql = "CREATE TABLE students (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(60) NOT NULL,
phonenumber VARCHAR(30) NOT NULL,
email VARCHAR(50),
status TINYINT(8) NOT NULL DEFAULT 0,
activity TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
  echo "Table Students created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>