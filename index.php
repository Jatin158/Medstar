<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medstar</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="icon" width="500px" href="logo1.png">

    
</head>
<body>
    <?php require('navbar.php'); ?>
<section class="home" id="home">

    <div class="image">
        <img src="images/bg1.gif" alt="">
    </div>

    <div class="content">
        <h3>Stay safe , Stay healthy</h3>
        <p>Your Health, Our Priority. We are always here for your care</p>
        <a href="#" class="btn"> Book an appointment <span class="fas fa-chevron-right"></span> </a>
    </div>

</section>

<section class="Prescriptions" id="Prescriptions">

    <h1 class="heading"> our <span>Prescriptions</span> </h1>

    <div class="box-container">
<?php require('fetch_disease.php'); 
while($row_disease = mysqli_fetch_array($fetch_disease)){?>
        <div class="box">
            <img src="images/diseases/<?php echo $row_disease[2] ?>" alt="">
            <h3><?php echo $row_disease[1] ?></h3>
            <p><b>Causes</b></p>
            <ul class="font"> 
                <li><?php echo $row_disease[3] ?></li>
                <li><?php echo $row_disease[4] ?></li>
                <li><?php echo $row_disease[5] ?></li>
            </ul> 
            <a href="disease.php?<?php echo $row_disease[1] ?>" class="btn"> Learn more <span class="fas fa-chevron-right"></span> </a>
        </div>
<?php } ?>
    </div>

</section>
<section class="about" id="about">

    <h1 class="heading"> <span>about</span> us </h1>

    <div class="row">

        <div class="image">
            <img src="images/about-img.svg" alt="">
        </div>

        <div class="content">
            <h3>We are available 24/7</h3>
            <p>Here our site works for your healthy life. You can consult to the doctor online. If u want to learn more about us just click on the below icon</p>
            <a href="about.php" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>

<section class="about" id="about">

    <h1 class="heading"> <span>For</span> Doctors</h1>

    <div class="row">

        <div class="image">
            <img src="images/book-img.svg" alt="">
        </div>

        <div class="content">
            <h3>Become a trusted medstar online doctor</h3>
            <a href="Docotrreg.php" class="btn"> Join as doctor<span class="fas fa-chevron-right"></span> </a>
        </div>

    </div>

</section>
    <script src="javascript/navbar.js"></script>
</body>
</html>