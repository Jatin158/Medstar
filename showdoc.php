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
    <link rel="stylesheet" href="css/showdoc.css">
    <title>MEDSTAR || DOCTORS</title>
</head>
<body>
    <?php if(isset($_SESSION['userid'])){
        require('navbar1.php'); ?> 
        <div id="showdoc">
            <?php if(isset($_GET['city'])) { 
                $city = $_GET['city'];
                $app = "1";
                $sql = "SELECT * FROM doctors WHERE city ='".$city."' AND approval = '".$app."'";
                $result = mysqli_query($con,$sql);
                while($row_doc = mysqli_fetch_assoc($result)){?>
            <div id="doc">
                <img src="doctor/images/<?php echo $row_doc['profile_pic'] ?>" alt="image">
                <h1 class="center">Name : <?php echo $row_doc['name'] ?></h1>
                <h1 class="center"><?php echo $row_doc['degree'] ?></h1>
                <h1 class="center">Speciality : <?php echo $row_doc['speciality'] ?></h1>
                <h1 class="center">Experience : <?php echo $row_doc['experience'] ?> Years</h1>
                <p class="center"><a href="writequery.php?id=<?php echo $row_doc['id']; ?>">Contact</a></p>
            </div>
           <?php }
            }
            else if(isset($_GET['speciality'])){ 
                $spc = $_GET['speciality'];
                $app = "1";
                $sql = "SELECT * FROM doctors WHERE speciality ='".$spc."' AND approval = '".$app."'";
                $result = mysqli_query($con,$sql);
                while($row_doc = mysqli_fetch_assoc($result)){?>
                <div id="doc">
                <img src="doctor/images/<?php echo $row_doc['profile_pic'] ?>" alt="image">
                <h1 class="center">Name : <?php echo $row_doc['name'] ?></h1>
                <h1 class="center"><?php echo $row_doc['degree'] ?></h1>
                <h1 class="center">City : <?php echo $row_doc['city'] ?></h1>
                <h1 class="center">Experience : <?php echo $row_doc['experience'] ?> Years</h1>
                <p class="center"><a href="writequery?id=<?php echo $row_doc['id'] ?>">Contact</a></p>
            </div>
<?php } }?>
        </div>
        <?php } 
        else{
            header('location:patientlogin.php');
        }?>

<script src="javascript/navbar.js"></script>
</body>
</html>