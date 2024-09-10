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
			height:800px;
			width:500px;
			background-color:WHITE;
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
<form action="service_provider_register_form.php" method="post">
<br>
<br>
<div style="float:left:10;
padding-left:150;">
&nbsp; &nbsp; <img src=\Home-fix-it\img\image6.jfif width="500" />
</div>
<div class="container">
<BR>
<CENTER><H5><FONT COLOR="BLUE">SERVICE-PROVIDER REGISTER </H5></FONT>
</center>
<BR>
<b> NAME </b>
<br>
<input type="text" class="thin-line-input" name="name"  required>
<br> 
<br>
<b> EMAIL ID </b>
<br>
<input type="email" class="thin-line-input" name="email" pattern="[a-z.0-9_%+\-]+@[a-z.0-9.\-]+\.[a-z]{z,}$"  required >
<br> 
<br>
<b>CONTACT</b>
<br>
<input type="tel"  pattern="\d{10}" class="thin-line-input"  name="contact" maxlength="10" minlength="10" required >
<br> 
<br>
<b>PASSWORD</b>
<br>
<input  type="password"   maxlength="8" minlength="4" 
class="thin-line-input" name="password" required maxlength="8" minlength="4"  />
<br> 
<br>
<b>OCCUPATION</b>
<br>
<!-- <input type="text" class="thin-line-input" name="occupation"  /> -->
 <select name="occupation"class="thin-line-input">
 <option value="Electrical">Electrical Service</option>
 <option value="Plumbing">Plumbing Service </option>
 <option value="Carpenter"> Carpenter Service </option>
 <option value="CCTV Installer"> CCTV Installation Service </option>
 <option value="Painter"> Painting Service </option>
 </select>
<br> 
<br>
<b>PROVIDING SERVICES</b>
<br>
<input type="text" class="thin-line-input" name="services" required />
<br> 
<br>
<b> SERVICE AREA</b>
<br>
<input type="text" class="thin-line-input" name="area" required  />
<br>
<br>
<b>ADDRESS</b>
<br>
<input type="text" class="thin-line-input" name="address" required />
<br>
<br>
<CENTER>
<button type="submit" class="btn btn-primary">Submit</button>
</center>
</body>
</form>
</html>