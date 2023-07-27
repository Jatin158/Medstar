<?php
require('connection.php');

session_destroy();
unset($_SESSION['userid']);
header('location:index.php');
?>