<?php
include_once("connection.php");
$sql="insert into service_prov_reg(name,email,contact,password,occupation,service,area,address) values('".$_POST['name']."','".$_POST['email']."','".$_POST['contact']."','".$_POST['password']."','".$_POST['occupation']."','".$_POST['services']."','".$_POST['area']."','".$_POST['address']."')";
mysqli_query($con, $sql);
if(mysqli_error($con))
	echo"<script>
		alert('Registration Failed..');
		</script>";
else
	echo"<script>
		window.location='service_provider_login.php';
		alert('Suceesful Registration..');
		</script>";
mysqli_close($con);
?>