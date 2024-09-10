<?php
include_once("connection.php");
$sql="insert into  review(name,email,message) values('".$_POST['name']."','".$_POST['email']."','".$_POST['message']."')";
mysqli_query($con, $sql);
if(mysqli_error($con))
	echo"<script>
		alert('Review Failed..');
		</script>";
else
	echo"<script>
		window.location='user_dashboard.php';
		alert('Thank you for your Feedback!!! .');
		</script>";
mysqli_close($con);
?>