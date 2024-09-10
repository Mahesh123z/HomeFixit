<?php
include_once("connection.php");
echo"<link href='bootstrap-5.3.3-dist/css/bootstrap.css' rel='stylesheet'
type='text/css' media='all'/>";
$sql="select * from review;";
$result=mysqli_query($con, $sql);
echo"<br>";
ECHO"<CENTER><H4> <FONT  COLOR='blue'> Review</FONT> </H4></CENTER>";
ECHO"<BR>";
echo"<table class='table table-bordered'>";
echo"<tr>";
echo"<th> Name </th>";
echo"<th> Email</th>";
echo"<th> message</th>";

echo"</tr>";
while($row=mysqli_fetch_array($result))
{
	echo"<tr>";
	echo"<td> $row[name] </td>";
	echo"<td> $row[email] </td>";
	echo"<td> $row[message] </td>";
	
	
}
echo"</table>";
mysqli_close($con);
?>