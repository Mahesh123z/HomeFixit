<?php
include_once("connection.php");
$sql="update admin set name='".$_POST['adminname']."',email_id='".$_POST['adminemail']."',password='".$_POST['adminpassword']."' where admin_id='".$_POST['admin_id']."';";
$result=mysqli_query($con, $sql);
echo "<script>
alert('Updated successfully');
window.location='view_admin.php'
</script>";
?>  