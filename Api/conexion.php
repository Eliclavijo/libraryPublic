<?php
ini_set('display_errors', 1);
$conn=mysqli_connect("localhost","root","admin","librarypublic_bd");
$conn->set_charset("utf8");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 
?>