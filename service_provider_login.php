<html>
<head>
<link href="bootstrap-5.3.3-dist/css/bootstrap.css" rel="stylesheet"
type="text/css" media="all"/>
<style>
			body{
				background: #d19b79;
			}
			
		.container{
		height:500px;
		width:400px;
		background-color:#EDF1FC;
		font-size:20px;
		box-shadow: 10px 10px 10px black;
	}
</style>
</head>
<body>
<br>
<br>
<div class="container">
<form action="service_provider_login_validate.php" method="post">
<center>
<br>
<h5>  SERVICE PROVIDER - LOG IN </h5>
</center>
<br>
&nbsp; &nbsp;<label> <B><h6> EMAIL ID </h6></B>
 <input type="email" class="form-control" style="width:350px;" name="email" placeholder="Email Id" aria-label="Email Id" required >
 </label>
 <br>
 <br>
 &nbsp; &nbsp;<label><B><H6> PASSWORD </H6> </B>
 <input type="password"   maxlength="8" minlength="4" 
 class="form-control" style="width:350px;" name="password" placeholder="Password" aria-label="Password" maxlength="8" minlength="4" required >
 </label><br>
 &nbsp; &nbsp; &nbsp;<a href="forgot_sp_pass.php" style="font-size : 15px;">Forgot Password?</a>
 <BR>
 <BR>
<CENTER>
<button type="submit" class="btn btn-primary" style="width:300px;">Log In</button> </CENTER>
<br>
<center>
<b> New User ? ? &nbsp; </b> <a href="service_provider_reg.php">  Sign Up </a>
</center>
  </DIV>
</form>
</body>
</html>
</div>
</form>
</body>
</html>