<?php

$hostname = "localhost";
$dbuser = "root";
$dbPassword = "";
$dbname = "personalweb";
$conn = mysqli_connect($hostname, $dbuser, $dbPassword, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
