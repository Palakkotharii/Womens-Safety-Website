<?php
//This script will handle login
session_start();

// check if the user is already logged in
if (isset($_SESSION['username'])) {
    header("location: userhome.php");
    exit;
}
require_once "config.php";

$username = $password = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    if (empty(trim($_POST['username'])) || empty(trim($_POST['password']))) {
        $err = "Please enter username + password";
    } else {
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }


    if (empty($err)) {
        $sql = "SELECT id, username, password, contact1, contact2, contact3 FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $param_username);
        $param_username = $username;


        // Try to execute this statement
        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_store_result($stmt);
            if (mysqli_stmt_num_rows($stmt) == 1) {
                mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password, $contact1, $contact2, $contact3);
                if (mysqli_stmt_fetch($stmt)) {
                    if (password_verify($password, $hashed_password)) {
                        // this means the password is corrct. Allow user to login
                        session_start();
                        $_SESSION["username"] = $username;
                        $_SESSION["id"] = $id;
                        $_SESSION["contact1"] = $contact1;
                        $_SESSION["contact2"] = $contact2;
                        $_SESSION["contact3"] = $contact3;
                        $_SESSION["loggedin"] = true;

                        //Redirect user to userhome page
                        header("location: userhome.php");
                    }
                }
            }
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <div class="nav">
        <div class="logo">
            <img src="media/logo.png" alt="">
            Women's safety
        </div>
        <span onclick="open_nav()" class="nav-toggle-open">&#9776;</span>
        <nav class="links" id="Sidenav">
            <span onclick="close_nav()" class="nav-toggle-close">&times;</span>
            <a href="index.php" class="link">Home</a>
            <a href="#aboutUs" class="link">About</a>
            <a href="#defence" class="link">safety videos</a>
            <a href="#contact" class="link">Contact us</a>
            <a href="login.php" class="login">login</a>
        </nav>
    </div>
    <div class="form">
        <h1>Login form</h1>
        <form action="" method="POST">
            <input type="text" name="username" placeholder="Enter User Name" required>

            <input type="password" name="password" placeholder="password" required>
            <input type="submit" class="submitbtn">
        </form>
        <em>If you don't have account? <a href="signup.php">Register</a> </em>
    </div>
</body>
<script src="js/main.js"></script>

</html>