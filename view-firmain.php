<div class="unit-5 overlay" style="background-image: url('images/hsp-police.jpg');">
      <div class="container text-center">
        <h2 class="mb-0">View FIR</h2>
       <!-- <p class="mb-0 unit-6"><a href="home.php">Home</a> <span class="sep"><b>></b></span> <span>Citizen Services</span></p>-->
      </div>
    </div>
	<br><br>
	<div class="container">
	<div class="row form-group">
                <div class="col-md-12">
				<form action = "view_fir_submit.php" method= "get">
                  <label class="font-weight-bold" for="email">FIR NO.</label>
				  <?php 
			include"config.php";
			$q="select * from `fir_lodge`";
			$res=mysqli_query($v,$q);
?>

				  <select class= "form-control" name="id">
				  <?php while($arr=mysqli_fetch_array($res))
				  {
					  ?>
				  <option>
			<?php echo $arr['id'];
				?>				  
				  </option>
				  <?php 
				  }
					  ?>
				  
				  </select>
                 <!-- <input type="radio" id="email" class="form-control" placeholder="" name="email">-->
                </div>
 </div>

	<div class="row form-group">
                <div class="col-md-9">
                  <input type="submit" value="Submit" class="btn btn-primary  py-2 px-4">
                </div>
				</div>
				</div>
				<br><br><br><br><br>