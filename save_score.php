<?php
session_start();
require('config.php');
$scr = $_GET['score'];
$save = "UPDATE users set score = ".$scr." where id = ".$_SESSION['id'];
	
	if($db_link->query($save)== TRUE){

			echo "Sucessfully update data";
			header('location:home.php');			
	}

mysqli_close($db_link);
?>
