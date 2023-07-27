<?php
require('connection1.php');
$sql = "SELECT * FROM diseases";
$fetch_disease = mysqli_query($con,$sql);
?>