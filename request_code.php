<?php
include_once("connection.php");
$sql="insert into  request(name,email,contact,occupation,service,area,address) values('".$_POST['name']."','".$_POST['email']."','".$_POST['contact']."','".$_POST['occupation']."','".$_POST['service']."','".$_POST['area']."','".$_POST['address']."')";
mysqli_query($con, $sql);
if(mysqli_error($con))
	echo"<script>
		alert('Request Failed..');
		</script>";
else
	echo"<script>
		window.location='user_dashboard.php';
		alert('Request Send .');
		</script>";
mysqli_close($con);
?>