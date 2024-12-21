<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="style.css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Title</title>
</head>
<body>
<div class="wrapper">
        <form action="create.php" method="post">
            <h1> CRUD </h1>
            <div class="input-box">
                <input type="text" name="name" id="pswd" placeholder="Name" required>
                <i class='bx bx-user'></i>
            </div>
            <div class="input-box">
                <input type="email" name="email" id="uname" placeholder="Email" required>
                <i class='bx bx-envelope'></i>
            </div>
            <!-- <div class="input-box">
                <input type="password" name="pass" id="pswd" placeholder="Password" required>
                <i class='bx bxs-lock-alt'></i>
            </div> -->

            <!-- <div class="remember-forgot">
                <label for="box"><input type="checkbox" name="checkbox" id="box"> Remember me. </label>
                <a href="#">Forgot Password? </a>
            </div> -->

            <button class="btn" type="submit" name="btn"> Submit</button>

            <!-- <div class="register-link">
                <p>Don't have an account? <a href="#"> Register </a></p>
            </div> -->
        </form>
    </div>
<?php
require("connection.php");
if (isset($_POST["btn"])){
    if(empty($_POST["name"]) || emptY($_POST['email'])){
        header('location: create.php');
        exit();

    }
    $name= $_POST["name"];
    $email = $_POST["email"];
    $query = "INSERT INTO `information`(`Name`, `Email`) VALUES ('$name','$email')";
    mysqli_query($connect,$query);
    header('location: read.php');
    exit();
}

?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>