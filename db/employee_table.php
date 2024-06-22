<?php
include('../config.php');

// sql to create table
$sql = "CREATE TABLE employees (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(60) NOT NULL,
email VARCHAR(30) NOT NULL,
userid VARCHAR(50) NOT NULL,
days TINYINT(8) NOT NULL DEFAULT 0,
shifts TINYINT(8) NOT NULL DEFAULT 0,
activity TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
  echo "Table Employees created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>