<?php include"header_loginout.php"
?>
<div class="unit-5 overlay" style="background-image: url('images/hsp-police.jpg');">
      <div class="container text-center">
        <h2 class="mb-0">Register</h2>
       <!-- <p class="mb-0 unit-6"><a href="home.php">Home</a> <span class="sep"><b>></b></span> <span>Citizen Services</span></p>-->
      </div>
    </div>
	<?php
	 

include"config.php";
$q="select*from `police-station`";
$res =mysqli_query($v,$q);

?>
	
	
	<div class="site-section bg-light">
      <div class="container">
        <div class="row">
       
          <div class="offset-md-2 col-md-10 col-lg-8 ">
	
	            <form action="register_database.php" method="post" class="p-5 bg-white">

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Full Name</label>
                  <input type="text" required="" id="fullname" class="form-control" placeholder="Full Name"name="fullname">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Email</label>
                  <input type="email"required="" id="email" class="form-control" placeholder="Email Address" name="email">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Password</label>
                  <input type="password" required=""id="subject" class="form-control" placeholder="Enter Password"name="pwd">
                </div>
              </div>
			  <div class="row form-group">
                <div class="col-md-6">
                  <label class="font-weight-bold" for="email">Desigination</label>
                  <input type="text" required=""id="subject" class="form-control" placeholder="Enter Your Desigination"name="des">
                </div>
				<div class="col-md-6">
                  <label class="font-weight-bold" for="email">Police Station Name</label>
				  <select class="form-control" name="ps">
				  <option selected="selected" disabled="disabled" >Select Your Category</option>

				 <?php while($arr=mysqli_fetch_array($res))
				  {
					  ?>
			      <option>
				  <?php echo $arr['ps_name'];
				  ?>
				  </option>
				  <?php 
				  } 
				  ?>
				  </select>
                </div>
              </div>
			  <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Contact No.</label>
                  <input type="text" required=""id="subject" class="form-control" placeholder="Enter Phone/Mobile No."name="num">
                </div>
              </div>
			  <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">DOB</label>
                  <input type="date" required=""id="subject" class="form-control" placeholder="Enter"name="dob">
                </div>
              </div>
			  <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Address</label>
                  <input type="text" required=""id="subject" class="form-control" placeholder="Enter Address"name="address">
                </div>
              </div>
			   <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Register" class="btn btn-primary  py-2 px-4">
                </div>
              </div>

  
            </form>
		</div>
	</div>
</div>
</div>
<?php include"footer.php"
?>