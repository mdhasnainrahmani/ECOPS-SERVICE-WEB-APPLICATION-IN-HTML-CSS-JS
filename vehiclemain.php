
<div class="unit-5 overlay" style="background-image: url('images/hsp-police.jpg');">
      <div class="container text-center">
        <h2 class="mb-0">Vehicle Missing</h2>
       <!-- <p class="mb-0 unit-6"><a href="home.php">Home</a> <span class="sep"><b>></b></span> <span>Citizen Services</span></p>-->
      </div>
    </div>
	
	<form action="vehicle_database.php" enctype="multipart/form-data" method="post" class="p-5 bg-white">
	<h1>Personal Details</h1>
              <br>
              <div class="row form-group">
			  
			  
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname"> Name</label>
                  <input type="text" id="fullname" class="form-control" placeholder="Full Name"name="name" required="">
                </div>
              </div>
			  <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Email</label>
                  <input type="email" id="email" class="form-control" placeholder="Email Address" name="email" required="">
                </div>
              </div>
	 <h1> Details of Vehicle / Information to Police</h1><br>
	 <!--<div class="row form-group">-->
               <!-- <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Complaint Type</label>
				  <select class= "form-control" name="comp_type">
				  <option value="kidnapp">Kidnapping</option>
				  <option>Theft</option>
				  <option>Vehicle missing</option>
				  </select>-->
                 <!-- <input type="radio" id="email" class="form-control" placeholder="" name="email">-->
                <!--</div>-->
             <!-- </div>-->
			  <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Location</label>
                  <input type="text" id="subject" class="form-control" placeholder="Enter Location"name="location" required="">
                </div>
              </div>
			 <div class="row form-group">
                <div class="col-md-12">
                
                  <label class="font-weight-bold" for="fullname">Occurence Date</label>
                  <input type="date" id="fullname" class="form-control" placeholder=""name="odate">
               
              </div>
			</div>  
			 <!--<div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="message">Details</label> 
                  <textarea  id="message1" cols="30" rows="5" class="form-control" placeholder="Details" name="info"></textarea>
                </div>
              </div>-->
			  <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email"> Chassis Number:</label>
                  <input type="text" id="subject" class="form-control" placeholder="Enter Number"name="num" required="">
                </div>
              </div>
			  <div class="row form-group">
			  
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Picture</label>
                  <input type="file" name="imgg">
                </div>
              </div>
			  <!--<div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="message">Suspect Details</label> 
                  <textarea  id="message" cols="30" rows="5" class="form-control" placeholder=" Details" name="susinfo"></textarea>
                </div>
              </div>-->
			  <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Wheeler</label>
				  <select class="form-control" name="wheeler" required="">
				  <option selected="selected" disabled="">Select Your Category</option>
				  <option >Two-Wheeler</option>
				  <option >Three-Wheeler</option>
				  <option>Four-Wheeler</option>
				  </select>
                 <!-- <input type="radio" id="email" class="form-control" placeholder="" name="email">-->
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