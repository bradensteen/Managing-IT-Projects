<?php
include "includes/dbcon.php";

// Check user login or not
if(!isset($_SESSION['uname'])){
    header('Location: index.php');
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
    <h1>Add a Customer</h1>
        <div class="topnav">
        <a href="home.php">Home</a>
        <a href="addcustomer.php">Add customer</a>
        <a class="active" href="updatecustomer.php">Update customer</a>
        </div> 
        
  <form method="post" action="update.php">
                    <div>
                    <label for="fname">Customer First name:</label>
                    <input type="text" id="fname" name="fname">
                    </div>
                    <div>
                    <label for="lname">Customer Last name:</label>
                    <input type="text" id="lname" name="lname">
                    </div>
                    <div>
                    <label for="password">New Password:</label>
                    <input type="text" id="password" name="password">  
                    </div>
                    <div>
                    <label for="mobile">New Mobile:</label>
                    <input type="text" id="mobile" name="mobile"> 
                    </div>
                    <div>
                    <label for="email">New Email:</label>
                    <input type="text" id="email" name="email">
                    </div>
                    <div>
                    <input type="submit" name="update_customer" value="Update Customer"/>
                    </div>
 </form>

</div>
</div>
</body>
</html>
