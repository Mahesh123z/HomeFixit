<html>
<link href="bootstrap-5.3.3-dist/css/bootstrap.css" rel="stylesheet"
type="text/css" media="all"/>
<style>
		body{
			background-color:#1E60AA;
		}
		.container{
			height:580px;
			width:900px;
			background-color:#EDF1FC;
			padding:20px;
			font-size:18px;
			color: navy;
			border-radius:10px;
		}
</style>
</head>
<body>
 <form action="book_service.php" method="post">  
<br>
<br>
<div class="container">
<center>
<font color="#17224D"><h4> BOOK FOR A SERVICE </h4></font>
</center>
<br>
<div class="row g-3">
<div class="col-12 col-sm-6"> 
<input type="text" class="form-control border-2" placeholder="Your Name"  name="name"style="height: 55px;"required >
 </div>
<div class="col-12 col-sm-6">
<input type="email" class="form-control border-2" name="email" placeholder="Your Email" style="height: 55px;" required >
 </div>
 <br>
 <br>
 <br>
 <div class="col-12 col-sm-6">
    <select class="form-select border-2"  name="service" style="height: 55px;" required>
    <option value="Electrical">Electrical Service</option>
     <option value="Plumbing">Plumbing Service </option>
     <option value="Carpenter"> Carpenter Service </option>
     <option value="CCTV Installer"> CCTV Installation Service </option>
     <option value="Painter"> Painting Service </option>
    </select>
</div>
<div class="col-12 col-sm-6">
<select class="form-select border-2"  name="area" style="height: 55px;" required>
<option value="Tilakawadi">Choose Area</option>
<option value="Tilakawadi">Tilakawadi</option>
 <option value="Angol">Angol </option>
 <option value="Khanapur"> Hindwadi </option>
 <option value="Ganeshpur"> Ganeshpur </option>
 <option value="Ganeshpur"> Channamma </option>
</select>
</div>
<div class="col-12 col-sm-6">

  <div class="date" name="date" data-target-input="nearest" required>
 <input type="date"class="form-control border-2 datetimepicker-input" id="service_date" name=" date"placeholder="Service Date" data-target="#date1" data-toggle="datetimepicker" style="height: 55px;"required >
 <span id="dateError" style="color:red; display:none; font-size:small">You can not select the past date </span>
  </div></div>
  <br><br>
  <br>
 <div class="col-12 col-sm-6">
  <div class="date" name="contact" data-target-input="nearest" required>
 <input type="number"class="form-control border-2 datetimepicker-input" name="contact"placeholder="Contact" data-target="#date1" data-toggle="datetimepicker" style="height: 55px;"required >
</div>
</div>
  <br><br>
  <textarea type="text"  name="request" class="form-control border-2" placeholder="Purpose"  rows="3"></textarea>
  <br>
 <div class="col-12">
<input type="text" class="form-control border-2" placeholder="Service Provider" value = <?php echo "$_GET[tmail]"; ?> name="s_email" readonly></input>
 </div>
<br>

<br><br>
<div class="col-12">
    <?php
         //$temail = $_GET['tmail'];
    echo "<a href='book_service.php?temail=".$_GET['tmail']."'><button  class='btn btn-primary w-100 py-3' type='submit'>Book Now</button></a>";
    ?>
 </div>
</div>
 </form>
 </div>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
<script>
    document.getElementById('service_date').addEventListener('change', function()
    {
        const selectedDate=new Date(this.value);
        const today=new Date();
        today.setHours(0,0,0,0);
        if(selectedDate < today)
        {
        document.getElementById('dateError').style.display='inline';
        this.value='';
        
        }
        else
        {
        document.getElementById('dateError').style.display='none';
        }
    });
    </script>
</body>
</html>