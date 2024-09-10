<?php
include_once("connection.php");
$sql="insert into book(name,email,area,service,date,contact,request,s_email) values('".$_POST['name']."','".$_POST['email']."','".$_POST['area']."','".$_POST['service']."','".$_POST['date']."','".$_POST['contact']."','".$_POST['request']."','".$_POST['s_email']."')";
//$sql="insert into book_service(name,email,area,service,date,contact,request,s_mail) values('".$_POST['name']."','".$_POST['email']."','".$_POST['area']."','".$_POST['service']."','".$_POST['date']."','".$_POST['contact']."','".$_POST['request']."','".$_POST['temail']."')";

mysqli_query($con,$sql);
if(mysqli_error($con))
echo"<script>
alert('	Invalid Details.');
</script>";
else
echo"<script>
alert('Thank You For Booking');
window.location='user_dashboard.php';
		</script>";
mysqli_close($con);

?>