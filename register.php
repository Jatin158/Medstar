<?php   
require('connection.php');
$email = strtolower($_POST['email']);


$sql = "SELECT * FROM users WHERE email = '".$email."'";
$result = mysqli_query($con,$sql);

$rows = mysqli_num_rows($result);

if($rows == 0){
	$cmd = "INSERT INTO users(email) VALUES (?)";
	$res = mysqli_prepare($con, $cmd);
	mysqli_stmt_bind_param($res,"s",$email);
	if(mysqli_stmt_execute($res)){
		$_SESSION['mail'] = $email;
		header('location:patientsignup.php?add_details');
	}
	else{
		header('location:patientsignup.php?err');
	}
}
else{
	header('location:patientsignup.php?mailexist');
}



?>