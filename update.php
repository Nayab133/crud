<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Title</title>
</head>
<body>
    <?php
 require("connection.php");
 if(isset($_GET["ID"])){
    $id = $_GET["ID"];
    $select = "SELECT * FROM `information` WHERE `ID` = '$id' ";
    $result = mysqli_query($connect,$select);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
    }
 }
 ?>

 <div class="container">
    <div class="row">
        <div class="col">
        <div class="p-3 mt-5 bg-warning rounded text-white text-center"><h2>UPDATE</h2></div>
            <form action="update.php" method ="post">
                <input type="hidden" name="id" class="form-control" value="<?php echo $row["ID"];?>">
                <label for="">Name</label>
                <input type="name" name="name" class="form-control" value="<?php echo $row["Name"];?>">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control mb-3" value="<?php echo $row["Email"];?>">
                <input type="submit" name="btn" class="btn btn-warning">
            </form>
        </div>
    </div>
 </div>

<?php
if(isset($_POST["btn"])){

    $id = $_POST["id"];
    $name = $_POST["name"];
    $email = $_POST["email"];
    
    $query = "UPDATE `information` SET `Name`='$name',`Email`='$email' WHERE ID = $id";
    mysqli_query($connect,$query);
    header("location: read.php");
}


?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>