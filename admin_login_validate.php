<?php
include_once("connection.php");
error_reporting(0);
session_start();
$mail  = $_POST['email'];
$sql="select * from admin where email_id= '".$_POST['email']."' and password='".$_POST['password']."'";
$results=mysqli_query($con, $sql);
if($row=mysqli_fetch_array($results))
{
	$_SESSION['mail_id'] = $mail;
	echo"<script> window.location='admin_dashboard.php'; </script>";
}
else
{
	echo"<script> 
	window.location='admin_login.php';
	 alert('Incorrect Email_Id or Password !');
	</script>";
}
mysqli_close($con);
?>