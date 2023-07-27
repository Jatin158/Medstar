<?php
require('connection.php');

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email=?";

$result = mysqli_prepare($con, $sql);
mysqli_stmt_bind_param($result, "s", $email);
mysqli_stmt_execute($result);
$res = mysqli_stmt_get_result($result);
$row_user = mysqli_fetch_assoc($res);


if($password == $row_user['password']){
    $_SESSION['userid'] = $row_user['id'];
    header('location:patient_dashboard.php');
}

else{
    header('location:patientlogin.php?err');
}
?>