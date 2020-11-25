
<html>
<head>

<title>Login</title>




</head>
<style>
.cntr
{
	position: absolute;
    top: 50%;
    left: 50%;
    margin-right: -50%;
    transform: translate(-50%, -50%);
	text-align:center;
}
</style>

<?php
session_start();
if(isset($_POST['username'])){
	header('localhost:index.php');
	}

?>

<body >



<div  class="cntr">
<div style="height:25px;background-color: blue;padding-top:10px;">
<span style="color:white;"><b>Login Form</b></span>
</div>

<div style="border: 1px solid blue;">

<div style="padding-top:20px;padding-left:20px;padding-right:20px;padding-bottom:20px;">

<form action="login_process.php" method="POST">
<table border="0" align="center">

<tr>
<td>Username:</td>
<td align="center"><input type="text" id="txtbox" name="username" placeholder="username" required><br></td>
</tr>

<tr>
<td>Password:</td>
<td align="center"><input type="password" id="txtbox" name="password" placeholder="password" required><br></td>
</tr>



<tr>
	<td> &nbsp; </td>
	<td  align="left"><input type="SUBMIT" id="btnnav" value="Login"><br/><a href="registration.php">Create User</a></td>
	
</tr>


</table>
</form>
</div>
</div>
</div>





</body>
</html>
