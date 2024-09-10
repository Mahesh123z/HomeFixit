<html>
<head>
<link href="bootstrap-5.3.3-dist/css/bootstrap.css" rel="stylesheet"
type="text/css" media="all"/>
<style>
				body{
					background: #d19b79;
					background-size:100% 100%;
					background-position: center;
				}
				
				
			.container{
			height:450px;
			width:400px;
			background-color:white;
			padding:20px;
			font-size:18px;
			color:navy;
			border-radius:10px;
			box-shadow: 10px 10px 10px black;
		}

		b{
			margin-left: 110px;
		}
		
		.new_user{
			margin-left: 130px;
		}

</style>		
</head>
<body>
<form action="user_login_validate.php" method="post">
<br>
<br>
<br>
<br>
<div class="container">
<center>
<h6> USER LOG IN </h6>
<img src=\Home-fix-it\img\image2.jfif height="70" width="80" />
</center>
&nbsp; &nbsp;<label> <B><h6> EMAIL ID </h6></B>
 <input type="text" class="form-control" style="width:300px;" name="email" placeholder="Email Id" aria-label="Email Id" required >
 </label>
 <br><br>
 &nbsp; &nbsp;<label><B><H6> PASSWORD </H6> </B>
 <input type="password" maxlength="8" minlength="4" 
 class="form-control" style="width:300px;" name="password" placeholder="Password" aria-label="Password" required maxlength="8" minlength="4" >
 </label>
 <BR>
 <BR>
<CENTER>
<button type="submit" class="btn btn-primary" style="width:250px;">Log In</button> </CENTER>
<br>
<b> New User ? ? &nbsp; </b>  <a class="new_user " href="user_register.php">  Sign Up </a>
  </DIV>
</form>
</body>
</html>
