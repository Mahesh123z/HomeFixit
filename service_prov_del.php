<?php
include_once("connection.php");
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
			
			border-radius:10px;
			top:0;
			height:800px;
			width:600px;
			background-color:WHITE;
}
  .thin-line-input{
			border:none;
			border-bottom:1px solid #ccc;
			padding:5px;
			width:500;
		}
</style>
</head>
<?php
echo "<body >";
echo"<form action='service_provider_profile_del.php' method='post'>";
$sql="select * from service_prov_reg where email='".$_GET['tmail']."';";
$result=mysqli_query($con, $sql);
$row=mysqli_fetch_array($result);

echo"<br>";
echo"<br>";
//<div style="float:left:10;
//padding-left:150;">
//&nbsp; &nbsp; <img src=\Home-fix-it\img\image6.jfif width="500" />
//</div>
echo"<div class='container'>";
echo"<BR>";
echo"<CENTER><H5><FONT COLOR='BLUE'>DELETE ACCOUNT</H5></FONT>
</center>";
ECHO"<BR>";
echo"<b> NAME </b>";
echo"<br>";
echo"<input type='text' class='thin-line-input' value='$row[name]' name='name' readonly required>";
echo"<br>";
echo"<br>";
echo"<b> EMAIL ID </b>";
echo"<br>";
echo"<input type='email' class='thin-line-input'value='$row[email]' name='email' readonly required >";
echo"<br>"; 
echo"<br>";
echo"<b>CONTACT</b>";
echo"<br>";
echo"<input type='tel'  pattern='\d{10}' class='thin-line-input' value='$row[contact]' name='contact' readonly required >";
echo"<br>";
echo"<br>";
echo"<b>PASSWORD</b>";
echo"<br>";
echo"<input type='password' class='thin-line-input' name='password' value='$row[password]'readonly required  />";
echo"<br>";
echo"<br>";
echo"<b>OCCUPATION</b>";
echo"<br>";
echo"<input type='text' class='thin-line-input' name='occupation' value='$row[occupation]' readonly />";
echo"<br>";
echo"<br>";
echo"<b>PROVIDING SERVICES</b>";
echo"<br>";
echo"<input type='text' class='thin-line-input' value='$row[service]' readonly name='services'  />";
echo"<br>";
echo"<br>";
echo"<b> SERVICE AREA</b>";
echo"<br>";
echo"<input type='text' class='thin-line-input' name='area' value='$row[area]' required readonly  />";
echo"<br>";
echo"<br>";
echo"<b>ADDRESS</b>";
echo"<br>";
echo"<input type='text' class='thin-line-input' name='address'value='$row[address]' required readonly/>";
echo"<br>";
echo"<br>";
echo"<CENTER>";
echo"<button type='submit' class='btn btn-danger'>DELETE</button>";
echo"</center>";

echo"</body>";
echo"</form>";
?>
</html>