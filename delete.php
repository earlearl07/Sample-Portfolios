<?php 
include 'dbconnect.php';

$sql = "DELETE FROM tbl_employee WHERE id=".$_GET['id']."";

if ($conn->query($sql) === TRUE) {
  // echo "Record deleted successfully";
  header("Location: table.php");
} else {
  echo "Error deleting record: " . $conn->error;
}

?>
