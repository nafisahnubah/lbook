<?php
include('../config.php');

// sql to create table
$sql = "CREATE TABLE borrowbooks (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
studentid INT(6) UNSIGNED NOT NULL,
bookid INT(6) UNSIGNED NOT NULL,
borrowdate VARCHAR(20) NOT NULL,
duedate VARCHAR(20) NOT NULL,
status TINYINT(8) NOT NULL DEFAULT 0,
activity TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if (mysqli_query($conn, $sql)) {
  echo "Table BorrowBooks created successfully";
} else {
  echo "Error creating table: " . mysqli_error($conn);
}

mysqli_close($conn);
?>