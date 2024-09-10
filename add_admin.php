<html>
<head>
<link href='bootstrap-5.3.3-dist/css/bootstrap.css' rel='stylesheet'
type='text/css' media='all'/>
<style>
		body{
			background-color:#87CEEB;
		}
		.container{
			height:500px;
			width:500px;
			background-color:white;
			padding:20px;
			font-size:18px;
			color:navy;
			border:1px;
		}
</style>
</head>
<body>
<form action="add_member.php" method="post" >
<br> <br> <br>
<div class="container">
ADD MEMBER
<br>
<label> <b> Admin Id </b>  </label>
<input type="text" class="form-control" style="width:400px;"name="adminid" placeholder="Id" required/>
<br>
<label><b>  Admin Name </b> </label>
<input type="text" class="form-control" style="width:400px;"name="adminname" placeholder="Name" required/>
<br>
<label><b>  Admin Email </b> </label>
<input type="email" class="form-control" style="width:400px;"name="adminemail"placeholder="Email" required/>
<br>
<label><b> Admin Password </b> </label>
<input type="password" class="form-control" style="width:400px;"  maxlength="8" minlength="4" 
name="adminpassword"placeholder="Password" required/>
<br>
<br>
<button type='submit' class='btn btn-primary'> Submit </button>
</div>
</form>
</body>
</html>