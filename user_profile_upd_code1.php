<?php
include_once("connection.php");
$sql="update user_reg set name='".$_POST['name']."',contact='".$_POST['contact']."',password='".$_POST['password']."',address='".$_POST['address']."' where email='".$_POST['email']."';";
$result=mysqli_query($con, $sql);
echo "<script>
alert('Updated successfully');
window.location='user_login.php'
</script>";
?>