<?php
include("db.php");
session_start();
 if (isset($_SESSION['username'])) {

$check=$_SESSION['username'];
$tablename=$_SESSION['category'];
$yu=mysqli_query($cn,"select * from $tablename where email= '$check'");
$row=mysqli_fetch_array($yu);
$aa=$row['email'];
if(!isset($aa))
{
	header('location:index.php?fail');
}
}
?>
