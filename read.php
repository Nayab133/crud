<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Title</title>
</head>
<body>
<?php
require('connection.php');
$select = "SELECT * FROM `information`";
$data = mysqli_query($connect,$select);
if(mysqli_num_rows($data)>0){               
?>
<div class="container-fluid mt-3">
    <table class="table table-primary">
        <thead>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php while($row = mysqli_fetch_assoc($data)){?>
            <tr>
                <td><?php echo $row["ID"];?></td>
                <td><?php echo $row["Name"];?></td>
                <td><?php echo $row["Email"];?></td>
                <td>
                    <a href="update.php?id=<?php echo $row ["ID"];?>" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a href="delete.php?id=<?php echo $row ["ID"];?>" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
<?php } ?>   
</div> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>