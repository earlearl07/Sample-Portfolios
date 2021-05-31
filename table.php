<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="main.css">
    <title>Testing</title>
  </head>
  <body>

    <?php
        include 'dbconnect.php';
        
        $sql = "SELECT * FROM `tbl_employee`";
        $result = $conn->query($sql);

        include 'navbar.php'
    ?>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Enter Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="post.php" method="POST">
            <div class="modal-body">
                <label>First Name</label>
                <input class="form-control" type="text" name="firstName" placeholder="Enter First Name" />
                <br>
                <label>Last Name</label>
                <input class="form-control" type="text" name="lastName" placeholder="Enter Last Name" />
                <br>
                <label>Handle</label>
                <input class="form-control" type="text" name="handleName" placeholder="Enter Handle" />
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
        </form>
        </div>
    </div>
    </div>

    <div class="container">
    <div class="d-flex justify-content-end">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Add Data</button>
    </div>
    <hr/>
    <table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
            <th scope="col">Option</th>
        </tr>
    </thead>

    <tbody>
        <?php 
        if (mysqli_num_rows($result) > 0) {
            foreach ($result as $key) {
                ?>
                <tr>
                    <th scope="row">#<?php echo $key['id']; ?></th>
                    <td><?php echo $key['firstName']; ?></td>
                    <td><?php echo $key['lastName']; ?></td>
                    <td><?php echo $key['handle']; ?></td>
                    <td>
                        <a class="btn btn-primary" href="updateView.php?id=<?php echo $key['id']; ?>">Update</a>
                        <a class="btn btn-danger" href="delete.php?id=<?php echo $key['id']; ?>">Delete</a>
                    </td>
                </tr>
                <?php
            }
        } else {
            echo "0 results";
        }
        ?>
    </tbody>
    
    </table>


    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
  </body>
</html>