<?php
require('connection.php');
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$dob = $_POST['dob'];
$city = $_POST['city'];
$mobile = $_SESSION['mobile'];
$filename = $_FILES['img']['name'];
$filetmpname = $_FILES['img']['tmp_name'];
$fileerror = $_FILES['img']['error'];
$filesize = $_FILES['img']['size'];
$filetype = $_FILES['img']['type'];

$fileExt = explode('.', $filename);
$fileActExt = strtolower(end($fileExt));

$allowed = array('jpg' , 'jpeg' , 'png' , 'webp');

if(in_array($fileActExt, $allowed)){
    $filenewname = uniqid('', true).".".$fileActExt;
		$filedestination = 'doctor/images/'.$filenewname;
        $sql = "UPDATE doctors SET name=?,email=?,password=?,dob=?,city=?,id_proof=? WHERE mobile=?";
        $result = mysqli_prepare($con,$sql);
        mysqli_stmt_bind_param($result, "sssssss",$name,$email,$password,$dob,$city,$filenewname,$mobile);
        if(mysqli_stmt_execute($result)){
            $cmd = "SELECT * FROM cities WHERE name = ?";
            $res = mysqli_prepare($con,$cmd);
            mysqli_stmt_bind_param($res,"s",$city);
            mysqli_stmt_execute($res);
            $res_c = mysqli_stmt_get_result($res);
            if(mysqli_num_rows($res_c)=="0"){
                $jatin = "INSERT INTO cities(name) VALUES(?)";
                $resultj = mysqli_prepare($con, $jatin);
                mysqli_stmt_bind_param($resultj,"s",$city);
                mysqli_stmt_execute($resultj);
            }
            move_uploaded_file($filetmpname, $filedestination);
            header('location:doctorreg.php?addprdetails');
        }
        else{
            header('location:doctorreg.php?addpdetails&&err');
                }
}
else{
    header('location:doctorreg.php?addpdetails&&err5');
}
?>