
<?php
include_once("connection.php");
echo"<link href='bootstrap-5.3.3-dist/css/bootstrap.css' rel='stylesheet'
type='text/css' media='all'/>";
$sql="select * from book;";
$result=mysqli_query($con, $sql);
echo"<br>";
ECHO"<CENTER><H4> <FONT  COLOR='blue'> Booking</FONT> </H4></CENTER>";
ECHO"<BR>";
echo"<table class='table table-bordered'>";
echo"<tr>";
echo"<th> Booking_id </th>";
//echo"<th> Provider_id </th>";
echo"<th> Name</th>";
echo"<th>Email</th>";
echo"<th>Area</th>";
echo"<th> Service</th>";
echo"<th>Date</th>";
echo"<th>Contact</th>";
echo"<th> Request</th>";
echo"<th> Delete </th>";
echo"</tr>";
while($row=mysqli_fetch_array($result))
{
	echo"<tr>";
	echo"<td> $row[booking_id] </td>";
	//echo"<td> $row[provider_id] </td>";
	echo"<td> $row[name] </td>";
	echo"<td> $row[email] </td>";
	echo"<td> $row[area] </td>";
	echo"<td> $row[service] </td>";
	echo"<td> $row[date] </td>";
	echo"<td> $row[contact] </td>";
	echo"<td> $row[request] </td>";
	
	echo"<td> <a href='booking_del.php?tmail=$row[email]'><button type='button' class='btn btn-danger'>DELETE</button> </a></td>";
	
}
echo"</table>";
mysqli_close($con);
?>