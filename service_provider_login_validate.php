<?php
include_once("connection.php");
session_start();
$mail  = $_POST['email'];
$sql="select * from service_prov_reg where email='".$_POST['email']."' and password='".$_POST['password']."'";
$results=mysqli_query($con,$sql);
if($row=mysqli_fetch_array($results))
{
	$_SESSION['mail_id'] = $mail;
	echo"<script> 
	window.location='service_providerdashboard.php?tmail=$_POST[email]';
	</script>";
}
else
	echo"<script>
		window.location='service_provider_login.php';
		alert('Invalid Email Id or Password');
		</script>";

mysqli_close($con);
?>