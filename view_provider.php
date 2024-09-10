<?php
include_once("connection.php");
echo"<link href='bootstrap-5.3.3-dist/css/bootstrap.css' rel='stylesheet'
type='text/css' media='all'/>";
echo"<br>";
$sql="select * from  service_prov_reg;";
$result=mysqli_query($con, $sql);
echo"<div class='container'>";
echo"<center>";
echo"<h4> <u><font color='blue'> LIST OF SERVICE PROVIDER</font> </u></H4>";
echo"<br>";
//echo"<table class='table' border='1' width='1200'>
echo"<table class=' table table-bordered'>";
 // <thead class='table-light'>";
//echo"<table class='table table-striped table-hover' width='1200'>";
//echo"<table border='1' width='1200' bordercolor='#1E60AA' height='100' >";
echo"<tr>";
echo"<th> FULL NAME </th>";
echo"<th> EMAIL ID </th>";
echo"<th> CONTACT </th>";
echo"<th> PASSWORD </th>";
echo"<th> OCCUPATION </th>";
echo"<th> SERVICE </th>";
echo"<th> AREA </th>";
echo"<th>ADDRESS </th>";
echo"</tr>";
echo"</thead>";
while($row=mysqli_fetch_array($result))
{
	echo"<tr>";
	echo"<td> $row[name] </td>";
	echo"<td> $row[email] </td>";
	echo"<td> $row[contact] </td>";
	echo"<td> $row[password] </td>";
	echo"<td> $row[occupation] </td>";
	echo"<td> $row[service] </td>";
	echo"<td> $row[area] </td>";
	echo"<td> $row[address] </td>";
	
	
	echo"</tr>";
}
echo"</table>";
echo"</div>";
mysqli_close($con);
?>