<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user Home</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/userhome.css">

</head>

<body>
<div class="nav">
        <div class="logo">
            <img src="media/logo.png" alt="">
            Women's safety
        </div>
        <div class="links">
            <a href="login.php" class="login">
    <?php echo "Welcome " . $_SESSION['username'] ?>
     </a>
            <a href="logout.php" class="login"> Log  out </a>
        </div>
    </div>
    <div class="main">
     <div class="contacts">
         <div class="contact">
    <?php echo "contact 1 is " . $_SESSION["contact1"] ?></div>
    <div class="contact">
    <?php echo "contact 2 is " . $_SESSION["contact2"] ?></div>
    <div class="contact">
    <?php echo "contact 3 is " . $_SESSION["contact3"] ?></div>

    </div>

    <div class="em">
     
    <button class="emergency">
        <h1><a href="emergency.php">emergency</a></h1>
    </button>
    </div>
    </div>
</body>
</html>