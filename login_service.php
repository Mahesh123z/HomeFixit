<?php
include_once("connection.php");
$sql="select * from service_prov_reg where email='".$_POST['email']."' and password='".$_POST['password']."'";
$results=mysqli_query($con, $sql);
if($row=mysqli_fetch_array($results))
{
	echo"<script> 
	window.location='service_providerdashboard.php';
	</script>";
}
else
	echo"<script>
		window.location='service_provider_login.php';
		alert('Invalid Email Id or Password');
		</script>";
mysqli_close($con);
?>
