<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "db_test";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE IF NOT EXISTS tbl_employee (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
firstName VARCHAR(50),
lastName VARCHAR(50),
handle VARCHAR(50)
)";

$conn->query($sql)
?>
