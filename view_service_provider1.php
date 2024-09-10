<?php
include_once("connection.php");
echo"<link href='bootstrap-5.3.3-dist/css/bootstrap.css' rel='stylesheet'
type='text/css' media='all'/>";
echo"<br>";
echo"<br>";
$sql="select * from service_prov_reg where email= '".$_GET['tmail']."'";
$result=mysqli_query($con, $sql);
echo"<div class='container'>";
echo"<center>";
echo"<h4><u><font color='blue'> LIST OF SERVICE_PROVIDER </u></font></H4>";
echo"<br>";
//echo"<table class='table' border='1' >
  //<thead class='table-light' >";
echo"<table border='5px' class='table table-bordered'>";
//echo"<table  border='1' height='100' width='1100' bordercolor='#1E60AA' height='70' >";
echo"<tr style='color: red'>";
//echo"<th> ID </th>";
echo"<th> FULL NAME </th>";
echo"<th> EMAIL ID </th>";
echo"<th> CONTACT </th>";
echo"<th> PASSWORD </th>";
echo"<th> OCCUPATION </th>";
echo"<th> SERVICE </th>";
echo"<th> AREA </th>";
echo"<th> ADDRESS </th>";
echo"<th> UPDATE </th>";
echo"</tr>";
echo"</thead>";
//while($row=mysqli_fetch_array($result))
//{
    $row=mysqli_fetch_array($result);
	echo"<tr>";
	//echo"<td> 1 </td>";
	echo"<td> $row[name] </td>";
	echo"<td> $row[email] </td>";
	echo"<td> $row[contact] </td>";
	echo"<td> $row[password] </td>";
	echo"<td> $row[occupation] </td>";
	echo"<td> $row[service] </td>";
	echo"<td> $row[area] </td>";
	echo"<td> $row[address] </td>";
	echo"<td> <a href='update_service_upd.php?tmail=$row[email]'> <button type='button' class='btn btn-success'>UPDATE</button></a></td>";	
	
	echo"</tr>";
//}
echo"</table>";
echo"</div>";
mysqli_close($con);
?>