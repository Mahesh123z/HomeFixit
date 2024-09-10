<?php
include_once("connection.php");
$sql="delete from cancel_booking";
$res=mysqli_query($con, $sql);
if($res)
{
	echo"<script> window.location='book.html';
	   alert('Booking canceled Successfully' );
	
	</script>";
}
else
	echo"<script>
	alert('Not Canceled ');
	</script>";
?>	

