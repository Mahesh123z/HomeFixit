<?php
include_once("connection.php");
//echo $_GET['tmail'];
?>
<html>
<head>
<link href="bootstrap-5.3.3-dist/css/bootstrap.css" rel="stylesheet"
type="text/css" media="all"/>
<style>
			 body{
			background-image:url('/Home-fix-it/img/image4.jpg');
			background-size:100% 100%;
		} 
			.container{
			border-radius:10px #bf925b;
			top:0;
			height:600px;
			width:500px;
			background-color:white;
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
echo "<form action='user_profile_upd_code1.php' method='post'>";
$sql="select * from user_reg where email='".$_GET['tmail']."';";
$result=mysqli_query($con, $sql);
$row=mysqli_fetch_array($result);
echo"<br>";
echo"<br>";
echo "<div class='container'>";
echo"<br>";
echo "<CENTER><H5> UPDATE - PROFILE </H5> ";
echo" </center>";
echo"<br>";
echo" <b> NAME </b> ";
echo"<br>";
echo "<input type='text' class='thin-line-input' value='$row[name]' name='name' required>";
echo"<br>";
echo"<br>";

echo "<b> EMAIL ID </b>";
echo"<br>";
echo "<input type='email' class='thin-line-input' value='$row[email]' name='email'  readonly required >";
echo"<br>";
echo"<br>";

echo "<b>CONTACT</b>";
echo "<br>";
echo "<input type='tel'  pattern='\d{10}' class='thin-line-input' value='$row[contact]' name='contact' required >";
echo"<br>";
echo"<br>";

echo "<b>PASSWORD</b>";
echo "<br>";
echo "<input type='password' class='thin-line-input' value='$row[password]' name='password' />";
echo"<br>";
echo"<br>";
echo "<b>ADDRESS</b>";
echo "<br>";
echo "<input type='text' class='thin-line-input' value='$row[address]'  name='address' />";
echo "<br>";
echo "<br>";
echo "<br>";
echo  "<CENTER>";
echo "<button type='submit' class='btn btn-success'>Update Confirm</button>";
echo "</center>";


echo "</form>";
echo "</body>";

?>
</html>