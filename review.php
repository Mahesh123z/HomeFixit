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
			background: rgba(250, 100, 10, 0.6);
			background-size:100% 100%;
		} 
			.container{
			
			border:1px #bf925b;
			top:0;
			height:440px;
			width:600px;
			background-color:WHITE;
			border-radius:10px;
			box-shadow: 10px 10px 10px black;
}
  .thin-line-input{
			border:none;
			border-bottom:1px solid #ccc;
			padding:5px;
			width:500;
		}

		h5{
			font-family: Helvetica, sans-serif;
			font-weight: bolder;
			text-decoration: underline;
		}
</style>
</head>	

<body>
	<form action="review_code.php" method="post"/>
<br>
<br>
<div class='container'>
<br>
<CENTER><H5> SEND - REVIEW</H5> 
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
<b>MESSAGE</b>
<br>
<textarea  class='thin-line-input'   name='message' rows="3" required="required"></textarea>
<br>
<br>
<CENTER>
<button type='submit' class='btn btn-primary'>Send Review</button>
</center>
</form>
</body>
</html>