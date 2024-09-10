<?php
//create connection
$con=mysqli_connect("localhost","root","","home_fix_it");
//check connection
if(mysqli_connect_error($con))
{
	echo"failed to connect to mysqli.".mysqli_connect_error();
}
?>