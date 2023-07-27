<?php require('connection.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/searchdoc.css">
    <title>MEDSTAR || SEARCH DOCTOR</title>
</head>
<body>
<?php if(isset($_SESSION['userid'])){ 
 require('navbar1.php'); ?>
<section id="search">
    <div id="search_city">
        <h1 class="center">Search by city : </h1>
        <div id="cities">
            <ul>
                <?php $sql = "SELECT * FROM cities"; 
                $result = mysqli_query($con,$sql);
                while($row=mysqli_fetch_assoc($result)){?>
                <li><a href="showdoc.php?city=<?php echo $row['name']; ?>"><?php echo $row['name']; ?></a></li>
                <?php }?>

            </ul>
        </div>
    </div>
    <div id="search_spc">
        <h1 class="center">Search by Speciality : </h1>
        <div id="spc">
            <ul>
            <?php $sqla = "SELECT * FROM speciality"; 
                $resulta = mysqli_query($con,$sqla);
                while($rowa=mysqli_fetch_assoc($resulta)){?>
                <li><a href="showdoc.php?speciality=<?php echo $rowa['name']; ?>"><?php echo $rowa['name']; ?></a></li>
                <?php }?>

            </ul>
        </div>
    </div>
</section>
 <?php } 
 else {
     header('location:patientlogin.php');
 }?>
    <script src="javascript/navbar.js"></script>
</body>
</html>