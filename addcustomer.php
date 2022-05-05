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
        <a class="active" href="addcustomer.php">Add customer</a>
        <a href="updatecustomer.php">Update customer</a>
        </div> 
        
  <form method="post" action="user.php">
                    <div>
                    <label for="fname">First name:</label>
                    <input type="text" id="fname" name="fname">
                    </div>
                    <div>
                    <label for="lname">Last name:</label>
                    <input type="text" id="lname" name="lname">
                    </div>
                    <div>
                    <label for="password">Password:</label>
                    <input type="text" id="password" name="password">  
                    </div>
                    <div>
                    <label for="mobile">Mobile:</label>
                    <input type="text" id="mobile" name="mobile"> 
                    </div>
                    <div>
                    <label for="email">Email:</label>
                    <input type="text" id="email" name="email">
                    </div>
                    <div>
                    <input type="submit" name="add_user" value="Add User"/>
                    </div>
 </form>

</div>
</div>
</body>
</html>

