<?php
include "includes/dbcon.php";

// Check user login or not
if(!isset($_SESSION['uname'])){
    header('Location: customerlogin.php');
}

?>


<!DOCTYPE html>
<html>
  <head>
    <title>Add a Customer</title>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    <div class="login_container">
    <div id="div_home">
    <h1>Investments</h1>
        <div class="topnav">
        <a class="active" href="custhome.php">Home</a>
        <a href="customerinvestments.php">View Investments</a>
        </div> 
    <p>Coming Soon</p>    
</div>
</div>
</body>
</html>

