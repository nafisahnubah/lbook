<?php
include('../config.php');

// sql to create table
$sql = "CREATE TABLE user (
id INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
email TEXT NOT NULL,
password VARCHAR(200) NOT NULL,
email VARCHAR(50),
satus TINYINT(8) NOT NULL DEFAULT 0,
activity TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
  echo "Table User created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>