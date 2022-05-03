<?php
session_start();
error_reporting(0);
include('includes/dbcon.php');

?>
<html>
<head>
	<title>Client Management System||Login Page</title>
	<h1>LOGIN</h1>
	<form method="POST" enctype="multipart/form-data" action="dashboard.php">
    <label for="uname">Username:</label><br>
    <input type="text" id="uname" name="uname"><br>
    <label for="pword">Password:</label><br>
	<input type="text" id="pword" name="pword"><br>
	<input type="submit" name="login" value="Login" />
	</form>