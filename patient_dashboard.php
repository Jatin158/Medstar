<?php require('connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/pportal.css">
    <title>MEDSTAR</title>
</head>
<body>
<?php if(isset($_SESSION['userid'])){ 
     require('navbar1.php'); ?>
<section id="prev_doc">
    <h1>Doctors you Consulted before : </h1>
    <div id="doc">
        <div id="doc_img"><img src="doctor/images/6213cf92a46c70.83474689.jpg" alt="image"></div>
        <div id="name_doc"><p class="center">Name of doctor</p></div>
        <div id="spc_doc"><p class="center">Speciality</p></div>
        <div id="view_pro"><p class="center"><a href="">View Query</a></p></div>

    </div>
</section>
<?php } 
else{
    header('location:patientlogin.php');
}?>
    <script src="javascript/navbar.js"></script>
</body>
</html>