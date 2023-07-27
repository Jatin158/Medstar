<?php
require('connection1.php');
$spc = "urology";
$cmd = "SELECT * FROM speciality WHERE name = ?";
            $res = mysqli_prepare($con,$cmd);
            mysqli_stmt_bind_param($res,"s",$spc);
            mysqli_stmt_execute($res);
            $res_c = mysqli_stmt_get_result($res);
            if(mysqli_num_rows($res_c)=="0"){
                $jatin = "INSERT INTO speciality(name) VALUES(?)";
                $resultj = mysqli_prepare($con, $jatin);
                mysqli_stmt_bind_param($resultj,"s",$spc);
                mysqli_stmt_execute($resultj);
            }
?>