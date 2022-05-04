<?php
session_start();
$host = "localhost"; /* Host name */
$user = "braden"; /* User */
$password = "admin123"; /* Password */
$dbname = "customer_management_system"; /* Database name */

$con = mysqli_connect($host, $user, $password,$dbname);
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}