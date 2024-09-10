<?php
include_once("connection.php");
$sql="delete from book where email='".$_POST['email']."';";
$result=mysqli_query($con, $sql);

echo "<script>
alert('Deactivated successfully');
window.location='view_booking1.php'
	</script>";
?>