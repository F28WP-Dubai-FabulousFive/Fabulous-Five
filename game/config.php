<?php 
$username="root";
$password="";
$host="localhost";
$database="game";

$db_link=mysqli_connect($host,$username,$password,$database)or die("ERROR".mysqli_error($db_link));
if (mysqli_connect_error()){
	echo "Could not connect to MySql. Please try again";
	exit();
}
?>
