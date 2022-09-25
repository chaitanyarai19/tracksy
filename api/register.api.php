<?php
include "../config/db.php";

session_start();
$data = json_decode(file_get_contents("php://input"), true);

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = sha1($_POST['password']);
    // $subject = 'Register Success';
    // $body = registrationTemplate($name,$_SESSION['mail'],$data['password']);
    // $altBody = 'Thank you for creating account at Tour Guider';
    $sql = "INSERT INTO user (name,phone,email,password) VALUES ('$name','$phone','$email','$password')"; 
    if(mysqli_query($conn,$sql)){
        echo " <div class='alert alert-success'>Register Success</div>";
    }else{
        echo " <div class='alert alert-danger'>Register Failed</div>";
    }

include '../config/db_close.php';
?>