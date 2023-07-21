<?php include"header2.php"
?>
<div class="unit-5 overlay" style="background-image: url('images/hsp-police.jpg');">
      <div class="container text-center">
        <h2 class="mb-0">Responses</h2>
       <!-- <p class="mb-0 unit-6"><a href="home.php">Home</a> <span class="sep"><b>></b></span> <span>Citizen Services</span></p>-->
      </div>
    </div>
	<?php


	
?>
	<?php 
			include"config.php";
			$id=$_REQUEST['id'];
			$q="select * from `fir_lodge` where id = '$id'";
			$res=mysqli_query($v,$q);
			$arr=mysqli_fetch_array($res);
?>
	
	<form action="response_database.php" enctype="multipart/form-data" method="post" class="p-5 bg-white">
	
	<h1>FIR Details</h1>
              <br>
			  <div class="row form-group">
			  <div class="col-md-6">
                  <label class="font-weight-bold" for="email">FIR NO.</label>
				  <select readonly class= "form-control" name="fir_no" required="">
				  <!--option selected="selected" disabled="disabled">Select FIR No</option-->
				  <option>
				  <?php echo $arr['id'];
				  ?>
				  </option>
				  
				  </select>
                 <!-- <input type="radio" id="email" class="form-control" placeholder="" name="email">-->
                </div>
				
			  <div class="col-md-6">
                  <label class="font-weight-bold" for="email">Complaint Type</label>
				  <select class= "form-control" name="comp_type" readonly required="">
				  <option> <?php echo $arr['comp_type'];?></option>
				  </select>
                 <!-- <input type="radio" id="email" class="form-control" placeholder="" name="email">-->
                </div>
				
				</div>
			
              
			   
			  <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Date Of Crime</label>
                  <input type="text" readonly="" value=" <?php echo $arr['odate'];?>" id="email" class="form-control" placeholder="" name="date">
                </div>
              </div>
			  <br>
	 <h1> Details of Criminal</h1><br>
	 
			  
			  <div class="row form-group">
			  <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Criminal Status</label>
				  <select class= "form-control" name="cstatus" required="">
				   <option selected="selected" disabled="disabled">Select Criminal Status</option>
				  <option>Arrested</option>
				  <option>Not Aressted</option>
				  
				  </select>
                 <!-- <input type="radio" id="email" class="form-control" placeholder="" name="email">-->
                </div>
				</div>
			 <div class="row form-group">
                <div class="col-md-12">
                
                  <label class="font-weight-bold" for="fullname"> Date</label>
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
                <div class="col-md-1">
                  <input type="submit" value="Submit" class="btn btn-primary  py-2 px-2">
                </div>
				<div class="col-md-4">
                  <input type="reset" value="Reset" class="btn btn-primary  py-2 px-2.5" onclick="click1()">
                </div>
              </div>
				</form>
<?php include"footer.php"
?>