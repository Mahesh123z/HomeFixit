<?php
include_once("connection.php");
$sql="insert into contact(name,email,contact,message) values('".$_POST['name']."','".$_POST['email']."','".$_POST['contact']."','".$_POST['message']."')";
mysqli_query($con, $sql);
if(mysqli_error($con))
	echo"<script>
	alert('	Invalid Details.');
		</script>";
else
	echo"<script>
		window.location='contact.html';
		alert('Thank You For Contacting.WE Will Get Back To You');
		</script>";
mysqli_close($con);
?>
