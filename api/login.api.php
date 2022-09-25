<?php 
include "../config/db.php";
session_start();
$data = json_decode(file_get_contents("php://input"), true);

$email = $_POST['email'];
$password = sha1($_POST['password']);
$sql = "select * from user where email = '$email' and password = '$password'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    $row = mysqli_fetch_assoc($result);
    $_SESSION['id'] = $row['id'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['name'] = $row['name'];
    $_SESSION['phone'] = $row['phone'];
    echo json_encode(array("status"=>true,"message"=>"login successfully"));
}else{
        echo json_encode(array("status"=>false,"message"=>"login failed"));
}

include '../config/db_close.php';
?>