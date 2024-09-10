<?php
include_once("connection.php");
?>
<html>
<head>
<link href="bootstrap-5.3.3-dist/css/bootstrap.css" rel="stylesheet"
type="text/css" media="all"/>
<style>
			/* body{
			background-image:url('/Home-fix-it/img/image4.jpg');
			background-size:100% 100%;
		} */
			.container{
			height:600px;
			width:500px;
			background-color:white;
			border-radius:10px;
}
  .thin-line-input{
			border:none;
			border-bottom:1px solid #ccc;
			padding:5px;
			width:400;
		}
</style>
</head>	

<?php
echo "<body>";
echo "<form action='booking_del_code.php' method='post'>";
$sql="select * from book where email='".$_GET['tmail']."';";
$result=mysqli_query($con, $sql);
$row=mysqli_fetch_array($result);
echo"<br>";
echo"<br>";
echo "<div class='container'>";
echo"<br>";
echo "<CENTER><H5> Booking - PROFILE </H5> ";
echo" </center>";
echo"<br>";
echo "<b>BOOKING Id</b>";
echo "<br>";
echo "<input type='text' class='thin-line-input' value='$row[booking_id]' readonly name='admin_id' />";
echo"<br>";
echo"<br>";
echo" <b> NAME </b> ";
echo"<br>";
echo "<input type='text' class='thin-line-input' value='$row[name]' name='name' required>";
echo"<br>";
echo"<br>";
echo "<b> EMAIL ID </b>";
echo"<br>";
echo "<input type='email' class='thin-line-input' value='$row[email]' name='email'   required >";
echo"<br>";
echo"<br>";
echo "<b>PASSWORD</b>";
echo "<br>";
echo "<input type='text' class='thin-line-input' value='$row[service]' name='service' required/>";
echo"<br>";
echo"<br>";
echo"<B> DATE</B>";
echo "<input type='text' class='thin-line-input' value='$row[date]' name='date' required />";
echo"<br>";
echo"<br>";
echo"<B> CONTACT </B>";
echo "<input type='tel'  pattern='\d{10}' class='thin-line-input' value='$row[contact]' name='contact' required/>";
echo"<br>";
echo"<br>";
ECHO"<B> REQUEST </B>";
echo"<br>";
echo "<input type='text' class='thin-line-input' value='$row[request]' name='request' />";
echo"<br>";
echo"<br>";
echo  "<CENTER>";
echo "<button type='submit' class='btn btn-danger'>Delete Confirm</button>";
echo "</center>";


echo "</form>";
echo "</body>";

?>
</html>