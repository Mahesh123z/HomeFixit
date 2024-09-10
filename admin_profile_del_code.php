<?php
include_once("connection.php");
$sql="delete from admin where email_id='".$_POST['adminemail']."';";
$result=mysqli_query($con, $sql);

echo "<script>
alert('Deactivated successfully');
window.location='view_admin.php'
	</script>";
?>