<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <link rel="stylesheet" href="css/plogin.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="icon" width="500px" href="logo1.png">

    <title>Medstar || patient login</title>
</head>
<body>
    <?php require('navbar.php'); ?>
    <div id="login_container">
        <div id="form_box">
            <div id="form_login">
                <h3 class="center">Login</h3>
                <hr>
                <form action="signin.php" method="post">
                    <p><input type="text" name="email" placeholder="E mail" required class="input"></p>
                    <p><input type="password" name="password" placeholder="Password" required class="input"></p>
                    <p><input type="submit" value="Sign in" class="btn_submit"></p>
                </form>
                <p class="para">Don't have account? <a href="patientsignup.php">Sign up</a></p>
                <?php if(isset($_GET['succ'])){ ?>
                    <p class="succ">Account created sucsessfully.</p>
               <?php } ?>
               <?php if(isset($_GET['err'])){ ?>
                    <p class="err">Invalid Credentials, Please try again</p>
               <?php } ?>
            </div>
            <div id="image_login">
                <img src="images/p.jpg" alt="">
            </div>
        </div>
    </div>
<script src="javascript/navbar.js"></script>
</body>
</html>