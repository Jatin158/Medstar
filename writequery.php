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
    <title>MEDSTAR || SUBMIT QUERY</title>
</head>
<body>
    <?php if(isset($_SESSION['userid'])){
        require('navbar1.php'); ?>
    <section id="enter">
        <div id="write">
            <h1>Describe your problem : </h1>
            <form action="submitquery.php?id=<?php echo $_GET['id']; ?>" method="post">
               <p><textarea name="desc" class="description" required></textarea></p>
               <p><input type="submit" class="btn" value="Submit"></p>
            </form>
        </div>
    </section>
<?php }
else{
    header('location:patientlogin.php');
} ?>
<script src="javascript/navbar.js"></script>
</body>
</html>