<?php
include_once("connection.php");
$sql="delete from user_reg where email='".$_POST['email']."';";
$result=mysqli_query($con, $sql);

echo "<script>
alert('Deactivated successfully');
window.location='admin_dashboard.php'
	</script>";
?>