<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <link rel="stylesheet" href="css/patientsignup.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="icon" width="500px" href="logo1.png">
    <title>Medstar || Patient Signup</title>
</head>
<body>
<?php require('navbar.php'); ?>
<div id="container">
    <div id="form_box">
        <div id="form_signup">
            <?php if(isset($_GET['add_details'])){ ?>
                <h3 class="center">Add Details</h3>
            <form action="adddetails.php" method="post">
                <p><input type="text" name="name" placeholder="Name" required class="input"></p>
                <p><input type="text" name="mobile" placeholder="Mobile Number" required class="input"></p>
                <p><input type="password" name="password" placeholder="Password" required class="input"></p>
                <p><input type="submit" value="Add Deatils" class="btn_submit"></p>
                <?php } 
                else {?>
            <h3 class="center">Sign up</h3>
            <form action="register.php" method="post">
                <!-- <p><input type="text" name="name" placeholder="Name" required class="input"></p> -->
                <p><input type="text" name="email" placeholder="E mail" required class="input"></p>
                <!-- <p><input type="password" name="password" placeholder="Password" required class="input"></p> -->
                <p><input type="submit" value="Verify mail" class="btn_submit"></p>
            </form>
            <?php if(isset($_GET['mailexist'])){ ?>
                    <p class="mailexist">The mail is already registered with us. <a href="patientlogin.php">please login here</a></p>
                    <?php } 
                    }?>
            <?php if(isset($_GET['err'])){ ?>
                    <p class="err">There was some error, please try again</p>
                    <?php } ?>        
        </div>
        <div id="form_image">
            <img src="images/OIP.jpg" alt="">
        </div>
    </div>
</div>

    <script src="javascript/navbar.js"></script>
</body>
</html>