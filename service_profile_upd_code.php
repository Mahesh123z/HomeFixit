<?php
include_once("connection.php");
$sql="update service_prov_reg set name='".$_POST['name']."',email='".$_POST['email']."',contact='".$_POST['contact']."',password='".$_POST['password']."',occupation='".$_POST['occupation']."', service='".$_POST['service']."',area='".$_POST['area']."',address='".$_POST['address']."' where email='".$_POST['email']."';";
$result=mysqli_query($con, $sql);
echo "<script>
alert('Updated successfully');
window.location='service_provider_login.php'
</script>";
?>