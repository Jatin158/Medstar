<?php
require('connection.php');

$name = $_POST['name'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$mail = $_SESSION['mail'];

$sql = "UPDATE users SET mobile=?, name=?, password=?  WHERE email=?";
$result = mysqli_prepare($con,$sql);
mysqli_stmt_bind_param($result,"ssss",$mobile,$name,$password,$mail);
if(mysqli_stmt_execute($result)){
    session_destroy();
    unset($_SESSION['mail']);
    header('location:patientlogin.php?succ');
}
else{
    $cmd = "DELETE FROM users WHERE email=?";
    $res = mysqli_prepare($con,$cmd);
    mysqli_stmt_bind_param($res,"s",$mail);
    mysqli_stmt_execute($res);
    session_destroy();
    unset($_SESSION['mail']);
    header('location:patientsignup.php?err');
}
?>