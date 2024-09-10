<?php
session_start();
include("connection.php");
$mail  = $_POST['email'];
$sql="select * from user_reg where email='".$_POST['email']."' and password='".$_POST['password']."'";
$results=mysqli_query($con, $sql);
if($row=mysqli_fetch_array($results))
{
	$_SESSION['mail_id'] = $mail;
	echo"<script> 

	window.location='user_dashboard.php?tmail=$_POST[email]';
	</script>";
}
else
	echo"<script>
		alert('Invalid Email Id or Password');
		window.location='user_login.php';
		</script>";

mysqli_close($con);
?>