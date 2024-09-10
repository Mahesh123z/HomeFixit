<?php
include_once("connection.php");
$sql="update user_reg set password='".$_POST['password']."' where email='".$_POST['email']."';";
$result=mysqli_query($con, $sql);
echo "<script>
alert('Password Updated successfully');
window.location='user_login.php'
</script>";
?>