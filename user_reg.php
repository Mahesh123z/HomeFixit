<?php
include_once("connection.php");
$sql="insert into user_reg (name,email,contact,password,address)values('".$_POST['name']."','".$_POST['email']."','".$_POST['contact']."','".$_POST['password']."','".$_POST['address']."');";
mysqli_query($con, $sql);
if(mysqli_error($con))
	echo"<script> window.location='user_login.php';
		('Registration failed');
		</script>";
else
	echo"<script> window.location='user_login.php';
		alert('Registerd sucessfully');
		</script>";
mysqli_close($con);
?>
