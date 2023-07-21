<div class="unit-5 overlay" style="background-image: url('images/hsp-police.jpg');">
      <div class="container text-center">
        <h2 class="mb-0">Contact</h2>
        <!--<p class="mb-0 unit-6"><a href="home.php">Home</a> <span class="sep">></span> <span>Contact</span></p>-->
      </div>
    </div>

    

    <div class="site-section bg-light" style="padding:22px;">
	
    <?php

	if(isset($_REQUEST['x'])==65)
	{
		
		echo '<div style="height:40px;width:700px;background-color:rgb(0,100,164); margin-left:162px; margin-bottom:20px;"> <h5 style="font-size:26px;margin-left:162px;float:left;color:white;);"><strong>Success!</strong> Block  Updated  Sucessfully. </h5></div>';
	}
	else
	{
		//$msg='<strong>Alert!</strong> Block Not Updated, Try Again.';
		//echo '<div style="height:70px; text-align:center;background-color:lightgrey;"> <br><h6 style="font-size:36px;text-align:center; margin-left:100px;float:left;"><strong>Alert!</strong> Block Not Updated</h6></div>';
	}

	
?>
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-8 mb-5">
          
            
          
            <form action="contactformdatabase.php" method="post" class="p-5 bg-white">

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Full Name</label>
                  <input type="text" id="fullname" class="form-control" placeholder="Full Name"name="fullname">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Email</label>
                  <input type="email" id="email" class="form-control" placeholder="Email Address" name="email">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Subject</label>
                  <input type="text" id="subject" class="form-control" placeholder="Enter Subject"name="subject">
                </div>
              </div>
              

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="message">Message</label> 
                  <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Say hello to us" name="message"></textarea>
                </div>
              </div>
             <div class="row form-group">
                <div class="col-md-2">
                  <input type="submit" value="Submit" class="btn btn-primary  py-2 px-2">
                </div>
				<div class="col-md-4">
                  <input type="reset" value="Reset" class="btn btn-primary  py-2 px-2.5" onclick="click1()">
                </div>
              </div> 
              

  
            </form>
          </div>

          <div class="col-lg-4">
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">Contact Info</h3>
              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4">Near Clock Tower, Railway Road, Hoshiarpur, Punjab-146001</p>

              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4">01882-220515</p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0">ecops@hsp.com</p>

            </div>
            
            <div class="p-4 mb-3 bg-white">
              <h3 class="h5 text-black mb-3">Helpline Number</h3>
              <p>Emergency Services<br> Police-100<br>Fire-101<br>Ambulance-102<br>Anti Teasing Cell-1096</p>
              
            </div>
          </div>
        </div>
      </div>
    </div>

  