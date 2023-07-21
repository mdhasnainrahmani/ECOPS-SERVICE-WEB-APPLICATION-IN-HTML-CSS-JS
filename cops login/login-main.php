<?php
if(isset($_REQUEST['x'])==222)
{
	echo"<script>
	alert('Login First')
	</script>";
}
?>

 <div class="site-blocks-cover" style="background-image:url(images/1545925500_indian-police.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row row-custom align-items-center">
          <div class="col-md-10">
            <h2 class="mb-2 text-black w-75"><span class="font-weight-bold" style= "font-size: 60" >Police</span> <br>Creating Safer Cities</h2>
            <div class="job-search">
              <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active py-3" id="pills-job-tab" data-toggle="pill" href="#pills-job" role="tab" aria-controls="pills-job" aria-selected="true">User Login</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link py-3" id="pills-candidate-tab" data-toggle="pill" href="#pills-candidate" role="tab" aria-controls="pills-candidate" aria-selected="false">Cops Login</a>
                </li>
              </ul>
              <div class="tab-content bg-white p-4 rounded" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-job" role="tabpanel" aria-labelledby="pills-job-tab">
                  <form action="copslogin.php" method="get">
                    <div class="row">
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <input type="text" class="form-control" placeholder="Name" name="firstname">
                      </div>
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <div class="select-wrap">
						<input type="email" class="form-control" placeholder="email" name="email">
                         <!-- <span class="icon-keyboard_arrow_down arrow-down"></span>
                          <select name="" id="" class="form-control">
                            <option value="">Category</option>
                            <option value="fulltime">Full Time</option>
                            <option value="fulltime">Part Time</option>
                            <option value="freelance">Freelance</option>
                            <option value="internship">Internship</option>
                            <option value="internship">Termporary</option>
                          </select>-->
                        </div>
                      </div>
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <input type="password" class="form-control form-control-block search-input" id="autocomplete" placeholder="password" onFocus="geolocate()"name="pwd">
                      </div>
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <input type="submit" class="btn btn-primary btn-block" value="Login">
                      </div>
                    </div>
                  </form>
                </div>
				
                <div class="tab-pane fade" id="pills-candidate" role="tabpanel" aria-labelledby="pills-candidate-tab">
                  <form action="login_database.php" method="post">
                    <div class="row">
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
					  <input type="text" class="form-control" placeholder="PS Name" name="ps">
					  </div>
					   <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
					   <div class="select-wrap">
                        <input type="email" class="form-control" placeholder="Email"  name="email">
                      </div>
                      </div>
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <input type="password" class="form-control form-control-block search-input" id="autocomplete" placeholder="password" onFocus="geolocate()" name="pwd">
                      </div>
                      <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                        <input type="submit" class="btn btn-primary btn-block" value="Login">
                      </div>
                    </div>
                  </form>
                </div>
			</div>
		</div>
	</div>	
	</div>
	</div>
	</div>