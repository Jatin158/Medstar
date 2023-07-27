<?php
require('connection.php');

$mobile = $_POST['mobile'];

$sql = "SELECT * FROM doctors WHERE mobile = '".$mobile."'";
$result = mysqli_query($con,$sql);
$row = mysqli_num_rows($result);

if($row ==0){
    $cmd = "INSERT INTO doctors (mobile) VALUES(?)";
    $res = mysqli_prepare($con,$cmd);
    mysqli_stmt_bind_param($res,"s",$mobile);
    if(mysqli_stmt_execute($res)){
        $_SESSION['mobile'] = $mobile;
        header('location:doctorreg.php?addpdetails');
    }
    else{
        header('location:doctorreg.php?err');
    }
}
else{
    header('location:doctorreg.php?mobile_exist');
}
?>