<?php
include_once("connection.php");
$sql="insert into admin(admin_id,name,email_id,password) values('".$_POST['adminid']."','".$_POST['adminname']."','".$_POST['adminemail']."','".$_POST['adminpassword']."');";
mysqli_query($con, $sql);
if(mysqli_error($con))
	echo"<script>
		alert('Failed To Register..');
		window.location='add_admin.php';
		</script>";
else
	echo"<script>
		alert('Sucessfully Registerd..');
		window.location='view_admin.php';
		</script>";
mysqli_close($con);
?>