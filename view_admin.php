<?php
include_once("connection.php");
echo"<link href='bootstrap-5.3.3-dist/css/bootstrap.css' rel='stylesheet'
type='text/css' media='all'/>";
$sql="select * from admin;";
$result=mysqli_query($con, $sql);
echo"<br>";
ECHO"<CENTER><H4> <FONT  COLOR='blue'>ADMIN</FONT> </H4></CENTER>";
ECHO"<BR>";
echo"<table class='table table-bordered'>";
echo"<tr>";
echo"<th> Admin_id </th>";
echo"<th> Name</th>";
echo"<th>Email</th>";
echo"<th>Password</th>";
echo"<th> Add Member </th>";
echo"<th> Edit </th>";
echo"<th> Delete </th>";

echo"</tr>";
while($row=mysqli_fetch_array($result))
{
	echo"<tr>";
	echo"<td> $row[admin_id] </td>";
	echo"<td> $row[name] </td>";
	echo"<td> $row[email_id] </td>";
	echo"<td> $row[password] </td>";
	echo"<td> <a href='add_admin.php'><button type='submit' class='btn btn-primary'>Add_Member</button></a></td>";
	echo"<td> <a href='admin_profile_upd.php?tid=$row[admin_id]'><button type='button' class='btn btn-success'>Update</button> </a></td>";
	echo"<td> <a href='admin_profile_del.php?tid=$row[admin_id]'><button type='button' class='btn btn-danger'>Delete</button> </a></td>";
	
}
echo"</table>";
mysqli_close($con);
?>