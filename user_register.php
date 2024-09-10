<html>
<head>
<link href="bootstrap-5.3.3-dist/css/bootstrap.css" rel="stylesheet"
type="text/css" media="all"/>
<style>
			/* body{
			background-image:url('/Home-fix-it/img/image4.jpg');
			background-size:100% 100%;
		} */
			.container{
			position:absolute;
			right:150;
			border:1px #bf925b;
			top:0;
			height:600px;
			width:500px;
			background-color:white;
}
  .thin-line-input{
			border:none;
			border-bottom:1px solid #ccc;
			padding:5px;
			width:400;
		}
</style>
</head>
<body >
<form action="user_reg.php" method="post">
<br>
<br>
<div style="float:left:10;
padding-left:150;">
&nbsp; &nbsp; <img src=\Home-fix-it\img\image6.jfif width="500" />
</div>
<div class="container">
<BR>
<CENTER><H5> REGISTER </H5>
</center>
<BR>
<b> NAME </b>
<br>
<input type="text" class="thin-line-input" name="name" required>
<br> 
<br>
<b> EMAIL ID </b>
<br>
<input type="email" class="thin-line-input" name="email" pattern="[a-zA-Z0-9.%+]+@[a=zA-Z0-9..-]+9?:\.[a-zA_Z0-9.-]+)*$]" required >
<br> 
<br>
<b>CONTACT</b>
<br>
<input type="tel"  pattern="\d{10}" maxlength="10" class="thin-line-input"  name="contact"  required >
<br> 
<br>
<b>PASSWORD</b>
<br>
<input type="password" minlength="4"  maxlength="8" minlength="4" 
class="thin-line-input" name="password" required  />
<br> 
<br>
<b>ADDRESS</b>
<br>
<input type="text" class="thin-line-input" name="address" required/>
<br>
<br>
<CENTER>
<button type="submit" class="btn btn-primary">Submit</button>
</center>
</body>
</form>
</html>