<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    
</head>
<body>

<?php 
include 'dbconnect.php';

$getID = $_GET['id'];

$sql = "SELECT * FROM `tbl_employee` where id = ".$getID."";
$result = $conn->query($sql);

foreach ($result as $key) {
    // echo $key['firstName'];
    // echo $key['lastName'];
    // echo $key['handle'];
}
?>

<div class="container" style="margin-top:40px;">
<form action="update.php?id=<?php echo $key['id']; ?>" method="POST">
    <label>First Name</label>
    <input class="form-control" type="text" value="<?php echo $key['firstName'] ?>" name="firstName" placeholder="Enter First Name" />
    <br>
    <label>Last Name</label>
    <input class="form-control" type="text" value="<?php echo $key['lastName'] ?>" name="lastName" placeholder="Enter Last Name" />
    <br>
    <label>Handle</label>
    <input class="form-control" type="text" value="<?php echo $key['handle'] ?>" name="handleName" placeholder="Enter Handle" />
    <button type="submit" class="btn btn-primary" style="margin-top:40px;">Update</button>
</form>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
  
</body>
</html>
