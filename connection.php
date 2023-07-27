<?php
session_start();
$server = "localhost";
$username = "root";
$password = "";
$dbname = "medstar";

$con = mysqli_connect($server,$username,$password,$dbname);
if(! $con){
    die("refused to connect");
}
?>