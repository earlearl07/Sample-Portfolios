<?php 

include 'dbconnect.php';

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$handleName = $_POST['handleName'];

$getID = $_GET['id'];

$sql = "UPDATE `tbl_employee` SET firstName='".$firstName."', lastName='".$lastName."', handle='".$handleName."' WHERE id =".$getID."";

if (mysqli_query($conn, $sql)) {
    header("Location: table.php");
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }

?>
