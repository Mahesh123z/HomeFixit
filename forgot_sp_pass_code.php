<?php
include_once("connection.php");
$sql="update service_prov_reg set password='".$_POST['password']."' where email='".$_POST['email']."';";
$result=mysqli_query($con, $sql);
echo "<script>
alert('Password Updated successfully');
window.location='service_provider_login.php'
</script>";
?>