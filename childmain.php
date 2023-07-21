<div class="unit-5 overlay" style="background-image: url('images/hsp-police.jpg');">
      <div class="container text-center">
        <h2 class="mb-0">Child Missing</h2>
       <!-- <p class="mb-0 unit-6"><a href="home.php">Home</a> <span class="sep"><b>></b></span> <span>Citizen Services</span></p>-->
      </div>
    </div>
	
	<form action="child_missing_database.php" enctype="multipart/form-data" method="post" class="p-5 bg-white">
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
	 <h1> Details of Child / Information to Police</h1><br>
	 
			  <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Name</label>
                  <input type="text" id="subject" class="form-control" placeholder="Enter Name"name="child_name" required="">
                </div>
              </div>
			 <div class="row form-group">
                <div class="col-md-12">
                
                  <label class="font-weight-bold" for="fullname">Occurence Date</label>
                  <input type="date" id="fullname" class="form-control" placeholder=""name="odate">
               
              </div>
			</div>  
			
			  <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Age</label>
                  <input type="text" id="subject" class="form-control" required="" placeholder="Enter Age"name="age">
                </div>
              </div>
			  <div class="row form-group">
			  
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Picture</label>
                  <input type="file" name="img" required="">
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