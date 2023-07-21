<?php include"header2.php"
?>
<div class="unit-5 overlay" style="background-image: url('images/hsp-police.jpg');">
      <div class="container text-center">
        <h2 class="mb-0">Responses</h2>
       <!-- <p class="mb-0 unit-6"><a href="home.php">Home</a> <span class="sep"><b>></b></span> <span>Citizen Services</span></p>-->
      </div>
    </div>
	<?php

	if(isset($_REQUEST['x'])==34)
	{
		
		echo '<div style="height:40px;width:700px;background-color:rgb(0,100,164); margin-left:162px; margin-top:10px;"> <h5 style="font-size:26px;margin-left:162px;float:left;color:white;);"><strong>Success!</strong> Block  Updated  Sucessfully. </h5></div>';
	}
	else
	{
		//$msg='<strong>Alert!</strong> Block Not Updated, Try Again.';
		//echo '<div style="height:70px; text-align:center;background-color:lightgrey;"> <br><h6 style="font-size:36px;text-align:center; margin-left:100px;float:left;"><strong>Alert!</strong> Block Not Updated</h6></div>';
	}

	
?>
	<?php 
			include"config.php";
			$q="select * from `vehicle_missing`";
			$res=mysqli_query($v,$q);
			$arr=mysqli_fetch_array($res);
?>
	<form action="response_vehicle_cops_database.php" enctype="multipart/form-data" method="post" class="p-5 bg-white">
	
	<h1>FIR Details</h1>
              <br>
			  <div class="row form-group">
			  <div class="col-md-6">
                  <label class="font-weight-bold" for="email">FIR NO.</label>
				  <select class= "form-control" name="fir_no" readonly>
				  <option><?php echo $arr['id'];?></option>
				  
				  </select>
                 <!-- <input type="radio" id="email" class="form-control" placeholder="" name="email">-->
                </div>
				<div class="col-md-6">
                  <label class="font-weight-bold" for="email">Complaint Type</label>
				  <select class= "form-control" name="comp_type">
				  <option><?php echo $arr['wheeler'];?></option>
				  </select>
                 <!-- <input type="radio" id="email" class="form-control" placeholder="" name="email">-->
                </div>
				</div>
              
			   
			  <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Date Of Crime</label>
                  <input type="text" value="<?php echo $arr['odate'];?>" id="email" class="form-control" placeholder="" name="date">
                </div>
              </div>
			  <br>
	 <h1> Details of Criminal</h1><br>
	 
			  
			  <div class="row form-group">
			  <div class="col-md-6">
                  <label class="font-weight-bold" for="email">Criminal Status</label>
				  <select class= "form-control" name="cstatus">
				   <option selected="selected" disabled="disabled">Select Criminal Status</option>
				  <option>Arrested</option>
				  <option>Not Aressted</option>
				  
				  </select>
                 <!-- <input type="radio" id="email" class="form-control" placeholder="" name="email">-->
                </div>
				<div class="col-md-6">
                  <label class="font-weight-bold" for="email">Vehicle Status</label>
				  <select class= "form-control" name="bstatus">
				   <option selected="selected" disabled="disabled">Select Vehicle Status</option>
				  <option>Found</option>
				  <option>Not Found</option>
				  
				  </select>
                 <!-- <input type="radio" id="email" class="form-control" placeholder="" name="email">-->
                </div>
				</div>
				<br>
				
				
					
			 <div class="row form-group">
                <div class="col-md-12">
                
                  <label class="font-weight-bold" for="fullname"> Upload Picture If Found</label>
                  <input type="file" name="img" >
               
              </div>
			</div> 
				
				
			 <div class="row form-group">
                <div class="col-md-12">
                
                  <label class="font-weight-bold" for="fullname"> Date </label>
                  <input type="date" id="fullname" class="form-control" placeholder="" name="datec">
               
              </div>
			</div>  
			
			  <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Location</label>
                  <input type="text" id="subject" class="form-control" placeholder="Enter Location" name="location">
                </div>
              </div>
			 
             <div class="row form-group">
                <div class="col-md-2">
                  <input type="submit" value="Submit" class="btn btn-primary  py-2 px-4">
                </div>
				<div class="col-md-4">
                  <input type="reset" value="Reset" class="btn btn-primary  py-2 px-4" onclick="click1()">
                </div>
              </div>
				</form>
<?php include"footer.php"
?>