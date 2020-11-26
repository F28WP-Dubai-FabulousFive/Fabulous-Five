<?php
session_start();
require('config.php');

$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];


	$register="INSERT INTO users(username,email,password) VALUES('$username','$email','$password')" or die("error".mysqli_errno($db_link));
	$result=mysqli_query($db_link,$register);
	$_SESSION['username']=$username;
		header('location:index.php');

mysqli_close($db_link);
?>
