<?php
//echo $_POST['tmail'];
include_once("connection.php");
echo"<link href='bootstrap-5.3.3-dist/css/bootstrap.css' rel='stylesheet'
type='text/css' media='all'/>";
echo"<br>";
echo"<br>";
//echo "tmail : ", $_GET['temail'];
$sql="select * from user_reg where email = '".$_GET['temail']."'";
$result=mysqli_query($con, $sql);
echo"<div class='container'>";
echo"<center>";
//"<h4><u><font color='blue'> $name </u></font></H4>";
echo"<br>";
//echo"<table class='table' border='1' >
  //<thead class='table-light' >";
echo"<table border='5px' class='table table-bordered'>";
//echo"<table  border='1' height='100' width='1100' bordercolor='#1E60AA' height='70' >";
echo"<tr>";
//echo"<th> USER_ID </th>";
echo"<th> FULL NAME </th>";
echo"<th> EMAIL ID </th>";
echo"<th> CONTACT </th>";
echo"<th> PASSWORD </th>";
echo"<th> ADDRESS </th>";
echo"<th> UPDATE </th>";
echo"</tr>";
echo"</thead>";
//while($row=mysqli_fetch_array($result))
//{
	$row=mysqli_fetch_array($result);
	echo"<tr>";
	//echo"<td> $row[user_id] </td>";
	echo"<td> $row[name] </td>";
	echo"<td> $row[email] </td>";
	echo"<td> $row[contact] </td>";
	echo"<td> $row[password] </td>";
	echo"<td> $row[address] </td>";
	echo"<td> <a href='user_profile_upd1.php?tmail=$row[email]'> <button type='button' class='btn btn-success'>UPDATE</button></a></td>";		
	echo"</tr>";
//}
echo"</table>";
echo"</div>";
mysqli_close($con);
?>