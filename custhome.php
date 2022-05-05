<?php
include "includes/dbcon.php";

// Check user login or not
if(!isset($_SESSION['uname'])){
    header('Location: customerlogin.php');
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: customerlogin.php');
}
?>
<!doctype html>
<html>
    <head>
    <title>Home Page</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    <div class="login_container">
        <div id="div_home">
            <h1>Home</h1>
            <div class="topnav">
                <a class="active" href="home.php">Home</a>
                <a href="customerinvestments.php">View Investments</a>
            </div> 
            <br>
            <form method='post' action="">
            <input type="submit" value="Logout" name="but_logout">
            </form>
        </div>
    </body>
</html>