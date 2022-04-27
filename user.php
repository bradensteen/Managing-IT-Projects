<?php
require('includes/dbcon.php');
if (mysqli_connect_errno()) {
echo "Failed to connect to MySQL:" . mysqli_error();
}

if(isset($_POST["add_user"]) && !empty($_POST["fname"]) && !empty($_POST["lname"]) && !empty($_POST["mobile"]) && !empty($_POST["email"])) {
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$password = $_POST["password"];
$mobile = $_POST["mobile"];
$email = $_POST["email"];


$brand=mysqli_real_escape_string($con, $_POST["fname"]);
$brand=mysqli_real_escape_string($con, $_POST["lname"]);
$brand=mysqli_real_escape_string($con, $_POST["password"]);
$brand=mysqli_real_escape_string($con, $_POST["mobile"]);
$brand=mysqli_real_escape_string($con, $_POST["email"]);

$i_users = "INSERT INTO customer (first_name,last_name,password,email,mobile) VALUES ('$fname','$lname', '$password','$email', '$mobile')";
mysqli_query($con,$i_users);
$id=mysqli_insert_id($con);


$sel_user = "SELECT first_name,last_name,password,email,mobile from customer ORDER by last_name ASC";
$u_result = mysqli_query($con, $sel_user);
echo "<body>";
echo "<div class=\"formresults\">";

if(! $u_result ) {
die('Could not get data: ' . mysql_error());
}

while($r = mysqli_fetch_array($u_result, MYSQLI_ASSOC)) {
$fname = $r["first_name"];
$lname = $r["last_name"];
$password = $r["password"];
$email = $r["email"];
$mobile = $r["mobile"];
echo "<div> First Name: " . $fname . "<br> Surname: " . $lname . "<br> Mobile: " . $mobile . "<br> Email: " . $email . "</div>";
}
echo "<div><a href=\"http://localhost/our\">&laquo; Back to form</a></div>";
echo "</div>";
echo "</body>";
echo "</html>";
}
else {
echo "<body>";
echo "<div class=\"formresults\">";
echo "<div>Something BAD happened!</div>";
echo "<div><a href=\"http://localhost/our\">&laquo; Back to form</a></div>";
echo "</div>";
echo "</body>";
echo "</html>";
}
