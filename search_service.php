<?php
include_once("connection.php");
echo"<link href='bootstrap-5.3.3-dist/css/bootstrap.css' rel='stylesheet'
type='text/css' media='all'/>";
$sql="select * from service_prov_reg ;";
$results=mysqli_query($con,$sql);
echo"<br>";
echo"<center>";
echo"<font color='blue'><h5> Service Provider In Your Area </h5> </font>";
echo"</center>";
echo"<table border='5px' class= 'table table-bordered'>";
echo"<tr>";
echo"<th> </th>";
echo"<th> Name </th>";
echo"<th> Email </th>";
echo"<th> Contact </th>";
echo"<th> Service </th>";
echo"<th> Request </th>";
echo"<th>Area </th>";
echo"<th> Address </th>";
echo"</tr>";
while($row=mysqli_fetch_array($results))
{
	echo"<tr>";
	echo"<td> </td>";
	echo"<td> $row[name] </td>";
	echo"<td> $row[email] </td>";
	echo"<td> $row[contact] </td>";
	echo"<td> $row[service] </td>";
	echo"<td> $row[area] </td>";
	echo"<td> $row[address] </td>";
	echo"<td> <a href='book2.php?tmail=$row[email]'><button type='button' class='btn btn-primary'>Send Request</button> </a></td>";
	echo"</tr>";
}
echo"</table>";
mysqli_close($con);
?>
