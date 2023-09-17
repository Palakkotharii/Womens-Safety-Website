<?php
require_once "config.php";
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";
$contact1 = $contact2 = $contact3 = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    // Check if username is empty
    if (empty(trim($_POST["username"]))) {
        $username_err = "Username cannot be blank";
    } else {
        $sql = "SELECT id FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set the value of param username
            $param_username = trim($_POST['username']);

            // Try to execute this statement
            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    $username_err = "This username is already taken";
                } else {
                    $username = trim($_POST['username']);
                }
            } else {
                echo "Something went wrong";
            }
        }
    }

    mysqli_stmt_close($stmt);


    // Check for password
    if (empty(trim($_POST['password']))) {
        $password_err = "Password cannot be blank";
    } elseif (strlen(trim($_POST['password'])) < 5) {
        $password_err = "Password cannot be less than 5 characters";
    } else {
        $password = trim($_POST['password']);
    }

    // Check for confirm password field
    if (trim($_POST['password']) !=  trim($_POST['confirm_password'])) {
        $password_err = "Passwords should match";
    }


    // If there were no errors, go ahead and insert into the database
    if (empty($username_err) && empty($password_err) && empty($confirm_password_err)) {
        $contact1 = trim($_POST['contact1']);
        $contact2 = trim($_POST['contact2']);
        $contact3 = trim($_POST['contact3']);
        $sql = "INSERT INTO users (username, password, contact1, contact2, contact3) VALUES (?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "sssss", $param_username, $param_password, $param_contact1, $param_contact2, $param_contact3);

            // Set these parameters
            $param_username = $username;
            $param_contact1 = $contact1;
            $param_contact2 = $contact2;
            $param_contact3 = $contact3;
            $param_password = password_hash($password, PASSWORD_DEFAULT);

            // Try to execute the query
            if (mysqli_stmt_execute($stmt)) {
                header("location: login.php");
            } else {
                echo "Something went wrong... cannot redirect!";
            }
        }
        mysqli_stmt_close($stmt);
    }
    mysqli_close($conn);
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup</title>
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
        <h1>sign up form</h1>
        <form action="" method="POST">
            <input type="text" name="username" placeholder="Enter User Name" class="in" required>

            <input type="password" name="password" placeholder="create new password" class="in" required>

            <input type="password" name="confirm_password" placeholder="confirm password" class="in" required>

            <input type="number" name="contact1" placeholder="enter contact 1" class="in" required>

            <input type="number" name="contact2" placeholder="enter contact 2" class="in" required>

            <input type="number" name="contact3" placeholder="enter contact 3" class="in" required>
            <input type="submit" class="submitbtn">
        </form>
    </div>
</body>
<script src="js/main.js"></script>

</html>