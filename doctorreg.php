<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medstar || Doctor Registration</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <link rel="stylesheet" href="css/dreg.css">
    <link rel="stylesheet" href="css/navbar.css">
</head>
<body>
    <?php require('navbar.php'); ?>
    <div id="container">
        <div id="formbox">
        <?php if(isset($_GET['addprdetails'])){ ?>
                <h3>Add Proffesional details</h3>
                <form action="addprdetails_doc.php" method="post" enctype="multipart/form-data">
                <p><input type="text" name="degree" placeholder="Highest Degree" required class="input"></p>
                <p><input type="text" name="exp" placeholder="Years of Experience" required class="input"></p>
                <p><input type="text" name="spc" placeholder="Speciality" required class="input"></p>
                <p><span>Degree:&nbsp;</span> <input type="file" name="img" required class="input_file"></p>
                <p><input type="Submit" Value="Submit" class="btn_submit"></p>
            </form>
            <?php } 
            else if(isset($_GET['addpdetails'])){ ?>
                <h3>Add Personal details</h3>
                <form action="addpdetails_doc.php" method="post" enctype="multipart/form-data">
                <p><input type="text" name="name" placeholder="Name" required class="input"></p>
                <p><input type="password" name="password" placeholder="password" required class="input"></p>
                <p><input type="text" name="email" placeholder="E mail" required class="input"></p>
                <p><span>Date of Birth:&nbsp;</span><input type="date" name="dob" placeholder="date of birth" required class="input_dob"></p>
                <p><input type="text" name="city" placeholder="City of Practise" required class="input"></p>
                <p><span>Id Proof:&nbsp;</span> <input type="file" name="img" required class="input_file"></p>
                <p><input type="Submit" Value="Proceed" class="btn_submit"></p>
            </form>
                <?php } 
                else{?>
                <h3>Enter Mobile number</h3>
            <form action="adddoc.php" method="post">
                <p><input type="text" name="mobile" placeholder="Mobile Number" required class="input"></p>
                <p><input type="Submit" Value="Proceed" class="btn_submit"></p>
            </form>
            <?php if(isset($_GET['mobile_exist'])){ ?>
                <p class="already">The mobile number is already registered with us. <a href="">Please login</a></p>
                <?php } ?>
            <?php if(isset($_GET['err'])){ ?>
                <p class="err">There was an error, please try again.</p>
                <?php } 
                }?>    
        </div>
    </div>

    <script src="javascript/navbar.js"></script>
</body>
</html>