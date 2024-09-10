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
			position:absolute;
			right:50px;
			border:1px #bf925b;
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
echo "<form action='admin_profile_del_code.php' method='post'>";
$sql="select * from admin where admin_id='".$_GET['tid']."';";
$result=mysqli_query($con, $sql);
$row=mysqli_fetch_array($result);
echo"<br>";
echo"<br>";
echo "<div class='container'>";
echo"<br>";
echo "<CENTER><H5> DEACTIVATE - PROFILE </H5> ";
echo" </center>";
echo"<br>";
echo "<b>ADMIN Id</b>";
echo "<br>";
echo "<input type='text' class='thin-line-input' value='$row[admin_id]' readonly name='admin_id' />";
echo"<br>";
echo"<br>";
echo" <b> NAME </b> ";
echo"<br>";
echo "<input type='text' class='thin-line-input' value='$row[name]' name='adminname' readonly required>";
echo"<br>";
echo"<br>";
echo "<b> EMAIL ID </b>";
echo"<br>";
echo "<input type='email' class='thin-line-input' value='$row[email_id]' name='adminemail' readonly   required >";
echo"<br>";
echo"<br>";
echo "<b>PASSWORD</b>";
echo "<br>";
echo "<input type='password' class='thin-line-input' value='$row[password]' readonly name='adminpassword' />";
echo"<br>";
echo"<br>";
echo  "<CENTER>";
echo "<button type='submit' class='btn btn-danger'>DELETE </button>";
echo "</center>";


echo "</form>";
echo "</body>";

?>
</html>