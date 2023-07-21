
<!--<script>
			function click1(){
				//document.write("hello");
				
				alert("");
			}
			</script>--><!--reset button-->
			<?php 
			include"config.php";
			$q="select * from `police-station`";
			$res=mysqli_query($v,$q);
            ?>
			<div class="unit-5 overlay" style="background-image: url('images/hsp-police.jpg');">
      <div class="container text-center">
        <h2 class="mb-0">FIR Lodge</h2>
      
      </div>
    </div><br>
	<?php

	if(isset($_REQUEST['x'])==12)
	{
		
		echo '<div style="height:40px;width:700px;background-color:rgb(0,100,164); margin-left:162px; margin-top:10px;"> <h5 style="font-size:26px;margin-left:162px;float:left;color:white;);"><strong>Success!</strong> Block  Updated  Sucessfully. </h5></div>';
	}
	else
	{
		//$msg='<strong>Alert!</strong> Block Not Updated, Try Again.';
		//echo '<div style="height:70px; text-align:center;background-color:lightgrey;"> <br><h6 style="font-size:36px;text-align:center; margin-left:100px;float:left;"><strong>Alert!</strong> Block Not Updated</h6></div>';
	}

	
?>
	 <form action="fir_lodge_database.php" method="post" class="p-5 bg-white">
	

	

	
	
	 <h1> Details of Complaint / Information to Police</h1><br>
	 
	 <div class="row form-group">
                <div class="col-md-12" >
                  <label class="font-weight-bold" for="email">Complaint Type</label>
				  <select class= "form-control" name="comp_type">
				  <option selected="selected" disabled="disabeled">Select Your Category</option>
				  <option>Kidnapping</option>
				  <option>Theft</option>
				  <option>Vehicle missing</option>
				  </select>
                 </div>
              </div>
			 <div class="row form-group">
                <div class="col-md-12" >
                
                  <label class="font-weight-bold" for="fullname">Occurence Date</label>
                  <input type="date" id="fullname" class="form-control" placeholder=""name="odate" required="">
               
              </div>
			</div>  
			 <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="message">Details</label> 
                  <textarea  id="message1" cols="30" rows="5" class="form-control" placeholder="Details" name="info" required=""></textarea>
                </div>
              </div>
			  <div class="row form-group">
			  
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Suspect Name</label>
                  <input type="text" id="fullname" class="form-control" placeholder="Full Name"name="suscname" required="">
                </div>
              </div>
			  <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="message">Suspect Details</label> 
                  <textarea  id="message" cols="30" rows="5" class="form-control" placeholder=" Details" name="susinfo"></textarea>
                </div>
              </div>
			  <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Police Station Name</label>
				 
				  <select class="form-control" name="ps_name">
				  <option selected ="selected" disabled="disabled">select your category</option>
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
			  <br>
			  
			  <h1>Personal Details</h1>
              <br>
              <div class="row form-group">
			  
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Victim Name</label>
                  <input type="text" id="fullname" class="form-control" placeholder="Full Name"name="vicname" required="">
                </div>
				</div>
              
			   <div class="row form-group">
                <div class="col-md-6">
                  <label class="font-weight-bold" for="email">Contact No.</label>
                  <input type="text" required=""id="subject" class="form-control" placeholder="Enter Contact No."name="phone_no" required="">
                </div>
				<div class="col-md-6">
                  <label class="font-weight-bold" for="email">Email</label>
                  <input type="email" id="email" class="form-control" placeholder="Email Address" name="email" required="">
                </div>
              </div>
			  
			   <div class="row form-group">
			  <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Age</label>
                  <input type="text" id="subject" class="form-control" placeholder="Enter Age"name="age">
                </div>
				</div>
			  <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Gender</label>
				  <select class="form-control" name="gender">
				  <option selected="selected"disabled="disabled">Select Your Category</option> 
				  <option>Male</option>
				  <option>Female</option>
				  </select>
				  </div>
                 
                </div>
			  <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="message">Permanent Address</label> 
                  <textarea  id="message" cols="30" rows="5" class="form-control" placeholder="Enter Address" name="homead"></textarea>
                </div>
              </div>
			  
			     
             <div class="row form-group">
                <div class="col-md-1">
                  <input type="submit" value="Submit" class="btn btn-primary  py-2 px-2">
                </div>
				<div class="col-md-4">
                  <input type="reset" value="Reset" class="btn btn-primary  py-2 px-2.5" onclick="click1()">
                </div>
              </div>     
            </form>
			
			
			
			
			