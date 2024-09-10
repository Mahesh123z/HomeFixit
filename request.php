<?php
include_once("connection.php");
//echo $_GET['tmail'];
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
			
			border:1px #bf925b;
			top:0;
			height:700px;
			width:600px;
			background-color:WHITE;
			border-radius:10px;
}
  .thin-line-input{
			border:none;
			border-bottom:1px solid #ccc;
			padding:5px;
			width:500;
		}
</style>
</head>	

<body>
<form action="request_code.php" method="post"/>
<br>
<br>
<div class='container'>
<br>
<CENTER><H5> SEND - REQUEST</H5> 
 </center>
<br>
 <b> NAME </b>
<br>
<input type='text' class='thin-line-input'  name='name' required>
<br>
<br>
<b> EMAIL ID </b>
<br>
<input type='email' class='thin-line-input'  name='email'   required >
<br>
<br>
<b>CONTACT</b>
<br>
<input type="tel"  pattern="\d{10}" class='thin-line-input'  name='contact'  required >
<br>
<br>

<!-- <b>AREA</b>
<br>
<input type='text' class='thin-line-input'  name='area' />
<br>
<br> -->
<b>ADDRESS</b>
<br>
<textarea  class='thin-line-input'   name='address' rows="3" required/> </textarea>
<br>
<br>
<CENTER>
<button type='submit' class='btn btn-primary'>Send Request</button>
</center>
</form>
</body>
</html>