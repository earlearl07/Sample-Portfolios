<?php
include 'dbconnect.php';
//variables
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$handleName = $_POST['handleName'];

$sql = "INSERT INTO tbl_employee (firstName, lastName, handle)
VALUES ('".$firstName."', '".$lastName."', '".$handleName."')";

if ($conn->query($sql) === TRUE) {
    // echo "New record created successfully";
    header("Location: table.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>