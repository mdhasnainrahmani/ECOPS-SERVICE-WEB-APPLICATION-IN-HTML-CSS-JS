<?php include"header2.php";
?>
<?php
if(!isset($_SESSION['email']))
{
	header("location:../index.php?x=222");
}
?>

<div class="unit-5 overlay" style="background-image: url('images/hsp-police.jpg');">
      <div class="container text-center">
        <h2 class="mb-0">Services</h2>
       <!-- <p class="mb-0 unit-6"><a href="home.php">Home</a> <span class="sep"><b>></b></span> <span>Citizen Services</span></p>-->
      </div>
    </div>
	<div class="site-section border-top">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-6" data-aos="fade" >
           <!-- <h2 class="text-black">Why Job<strong>start</strong> </h2>-->
          </div>
        </div>
	<div class="row hosting">
	<div class="col-md-6 col-lg-4 mb-5 mb-lg-4" data-aos="fade" data-aos-delay="100">
	 <div class="unit-3 h-100 bg-white">
              
              <div class="d-flex align-items-center mb-3 unit-3-heading">
                <div class="unit-3-icon-wrap mr-4">
                  <svg class="unit-3-svg" xmlns="http://www.w3.org/2000/svg" width="59px" height="68px">
                    <path fill-rule="evenodd" stroke-width="2px" stroke-linecap="butt" stroke-linejoin="miter" fill="none" d="M29.000,66.000 L1.012,49.750 L1.012,17.250 L29.000,1.000 L56.988,17.250 L56.988,49.750 L29.000,66.000 Z"></path>
                  </svg><span class="unit-3-icon fl-bigmug-line-note35"></span>
                </div>
                <h2 class="h5"><a href ="viewfir_cops.php">View FIR</a></h2>
              </div>
              <div class="unit-3-body">
                <p>Officers can view the FIR which are uploaded by the users/victims and accordingly give response to that particular FIR.  </p>
              </div>
            </div>

          </div>
         <!-- <div class="col-md-6 col-lg-4 mb-5 mb-lg-4" data-aos="fade" data-aos-delay="200">
            
            <div class="unit-3 h-100 bg-white">
              
              <div class="d-flex align-items-center mb-3 unit-3-heading">
                <div class="unit-3-icon-wrap mr-4">
                  <svg class="unit-3-svg" xmlns="http://www.w3.org/2000/svg" width="59px" height="68px">
                    <path fill-rule="evenodd" stroke-width="2px" stroke-linecap="butt" stroke-linejoin="miter" fill="none" d="M29.000,66.000 L1.012,49.750 L1.012,17.250 L29.000,1.000 L56.988,17.250 L56.988,49.750 L29.000,66.000 Z"></path>
                  </svg><span class="unit-3-icon icon fl-bigmug-line-menu41"></span>
                </div>
                <h2 class="h5"><a href ="view-fir.php"> View FIR</a> </h2>
              </div>
              <div class="unit-3-body">
                <p>Here you can view  your filed FIR by unique FIR number. The unique FIR number is always provided at FIR filing process. </p>
              </div>
            </div>

          </div>-->
		  
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-4" data-aos="fade" data-aos-delay="300">
            
            <div class="unit-3 h-100 bg-white">
              
              <div class="d-flex align-items-center mb-3 unit-3-heading">
                <div class="unit-3-icon-wrap mr-4">
                  <svg class="unit-3-svg" xmlns="http://www.w3.org/2000/svg" width="59px" height="68px">
                    <path fill-rule="evenodd" stroke-width="2px" stroke-linecap="butt" stroke-linejoin="miter" fill="none" d="M29.000,66.000 L1.012,49.750 L1.012,17.250 L29.000,1.000 L56.988,17.250 L56.988,49.750 L29.000,66.000 Z"></path>
                  </svg><span class="unit-3-icon icon fl-bigmug-line-double99"></span>
                </div>
                <h2 class="h5"><a href ="vehicle.php">Vehicle Missing</a></h2>
              </div>
              <div class="unit-3-body">
                <p>Officers can view the FIR which are uploaded by the users/victims regarding to vehicles and accordingly give response to that particular FIR. </p>
              </div>
            </div>

          </div>

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-4" data-aos="fade" data-aos-delay="400">

            <div class="unit-3 h-100 bg-white">
              
              <div class="d-flex align-items-center mb-3 unit-3-heading">
                <div class="unit-3-icon-wrap mr-4">
                  <svg class="unit-3-svg" xmlns="http://www.w3.org/2000/svg" width="59px" height="68px">
                    <path fill-rule="evenodd" stroke-width="2px" stroke-linecap="butt" stroke-linejoin="miter" fill="none" d="M29.000,66.000 L1.012,49.750 L1.012,17.250 L29.000,1.000 L56.988,17.250 L56.988,49.750 L29.000,66.000 Z"></path>
                  </svg><span class="unit-3-icon icon fl-bigmug-line-user144"></span>
                </div>
                <h2 class="h5"><a href="child_cops.php">Child Missing</a></h2>
              </div>
              <div class="unit-3-body">
                <p>Officers can view the FIR which are uploaded by the users/victims regarding to missing child and accordingly give response to that particular FIR. </p>
              </div>
            </div>
			
			</div>
			<div class="col-md-6 col-lg-4 mb-5 mb-lg-4" data-aos="fade" data-aos-delay="500">
            
            <div class="unit-3 h-100 bg-white">
              
              <div class="d-flex align-items-center mb-3 unit-3-heading">
                <div class="unit-3-icon-wrap mr-4">
                  <svg class="unit-3-svg" xmlns="http://www.w3.org/2000/svg" width="59px" height="68px">
                    <path fill-rule="evenodd" stroke-width="2px" stroke-linecap="butt" stroke-linejoin="miter" fill="none" d="M29.000,66.000 L1.012,49.750 L1.012,17.250 L29.000,1.000 L56.988,17.250 L56.988,49.750 L29.000,66.000 Z"></path>
                  </svg><span class="unit-3-icon icon fl-bigmug-line-user143"></span>
                </div>
                <h2 class="h5"><a href ="criminal_cops.php">Add Criminals</a></h2>
              </div>
              <div class="unit-3-body">
                <p>Officers can add new criminals. So as to aware the citizen for future. </p>
                
              </div>
            </div>

          </div>
			</div>
			</div>
			</div>
<?php include"footer.php"
?>