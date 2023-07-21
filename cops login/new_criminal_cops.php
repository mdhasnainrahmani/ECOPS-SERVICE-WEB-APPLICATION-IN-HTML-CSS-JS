<!--<script>
function func()
{
	alert("Submit Completed");
}
</script>-->

<?php include"header2.php"
?>
<div class="unit-5 overlay" style="background-image: url('images/hsp-police.jpg');">
      <div class="container text-center">
        <h2 class="mb-0">Add Criminals</h2>
       <!-- <p class="mb-0 unit-6"><a href="home.php">Home</a> <span class="sep"><b>></b></span> <span>Citizen Services</span></p>-->
      </div>
    </div>

	<div class="site-section bg-light"style="padding:22px;">
		<?php

	if(isset($_REQUEST['x'])==98)
	{
		
		echo '<div style="height:40px;width:610px;background-color:rgb(0,100,164); margin-left:178px; margin-bottom:30px;"> <h5 style="font-size:26px;margin-left:110px;float:left;color:white;);"><strong>Success!</strong> Block  Updated  Sucessfully. </h5></div>';
	}
	else
	{
		//$msg='<strong>Alert!</strong> Block Not Updated, Try Again.';
		//echo '<div style="height:70px; text-align:center;background-color:lightgrey;"> <br><h6 style="font-size:36px;text-align:center; margin-left:100px;float:left;"><strong>Alert!</strong> Block Not Updated</h6></div>';
	}

	
?>
      <div class="container">
        <div class="row">
       
          <div class="offset-md-2 col-md-10 col-lg-8 ">
          
            
          
            <form action="new_criminal_database.php" onsubmit="return func()" enctype="multipart/form-data" method="post" class="p-5 bg-white" >

              
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Name</label>
                  <input type="text"required="" id="email" class="form-control" placeholder="Criminal Name" name="name">
                </div>
              </div>
               <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="email">Crime Type</label>
                  <input type="text"required="" id="email" class="form-control" placeholder="Crime Type" name="crime">
                </div>
              </div>
              
			  <div class="row form-group">
			  
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="font-weight-bold" for="fullname">Criminal Picture</label>
                  <input type="file" name="pic"required="" >
                </div>
				</div>
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="font-weight-bold" for="message">Details</label> 
                  <textarea  id="message" cols="30" rows="5" class="form-control" placeholder="Maximum characters in details feild should be 50.  " name="detail"></textarea>
				  <!--<span id="validation" style="display:none;">Maximum Characters should be  50.</span>-->
				  <p></p>
                </div>
              </div>
              
			   <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Submit" class="btn btn-primary  py-2 px-4" >
                </div>
				
              </div>

  
            </form>
			</div>
			</div>
			</div>
			</div>
	
<?php include"footer.php"
?>