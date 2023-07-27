<?php
require('connection.php');

$doc_id =  $_GET['id'];

$pt_id =  $_SESSION['userid'];

$desc = $_POST['desc'];

$sql = "INSERT INTO quries (pt_id,doc_id,description) VALUES (?,?,?)";
$result = mysqli_prepare($con,$sql);
mysqli_stmt_bind_param($result,"sss",$pt_id,$doc_id,$desc);
if(mysqli_stmt_execute($result)){
    header('location:patient_dashboard.php');
}
else{
    header('location:writequery.php');
}
?>