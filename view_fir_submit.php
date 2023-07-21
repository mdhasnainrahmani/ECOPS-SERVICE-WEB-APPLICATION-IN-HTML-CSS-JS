<?php include"header2.php"; ?>
<div class="unit-5 overlay" style="background-image: url('images/hsp-police.jpg');">
      <div class="container text-center">
        <h2 class="mb-0">View FIR</h2>
       <!-- <p class="mb-0 unit-6"><a href="home.php">Home</a> <span class="sep"><b>></b></span> <span>Citizen Services</span></p>-->
      </div>
    </div>
<?php 
$id=$_GET['id'];
include"config.php";
$q="select*from `fir_lodge` where id = '$id'";
$res =mysqli_query($v,$q);
$arr=mysqli_fetch_array($res);
?><br>
<div class="conatiner">

	<div class="row form-group mt-5">
		<div class="col-md-12">
		<table class="table table-striped table-bordered">
			<tr>
				<th>Fir NO</th>
				<td><?php echo $arr['id'];
?></td>
				</tr>
				<tr>
				<th>Complaint Type</th>
				<td><?php echo $arr['comp_type'];?></td>
				</tr>
				
				<tr>
				<th>Date</th>
				<td><?php echo $arr['odate'];?></td>
				</tr>
				<tr>
				<th>Details</th>
				<td><?php echo $arr['Details'];?></td>
				</tr>
				<tr>
				<th>Suspect Name</th>
				<td><?php echo $arr['suscname'];?></td>
				</tr>
				<tr>
				<th>Suspect Details</th>
				<td><?php echo $arr['suspect_details'];?></td>
				</tr>
				<tr>
				<th>Police Station Name</th>
				<td><?php echo $arr['ps_name'];?></td>
				</tr>
				<tr>
				<th>Victim Name</th>
				<td><?php echo $arr['vicname'];?></td>
				</tr>
				<tr>
				<th>Gender</th>
				<td><?php echo $arr['gender'];?></td>
				</tr>
				<tr>
				<th>Age</th>
				<td><?php echo $arr['age'];?></td>
				</tr>
				<tr>
				<th>Address</th>
				<td><?php echo $arr['adress'];?></td>
				</tr>
				<tr>
				<th>Contact No.</th>
				<td><?php echo $arr['contact_no'];?></td>
				</tr>
				<tr>
				<th>Email</th>
				<td><?php echo $arr['email'];?></td>
				</tr>
				<tr>
				<th>Criminal Status</th>
				<td><?php echo $arr['criminal_status'];?></td>
				</tr>
				<tr>
				<th>Date </th>
				<td><?php echo $arr['date'];?></td>
				</tr>
				<tr>
				<th>Location</th>
				<td><?php echo $arr['location'];?></td>
				</tr>
			
		</table>
		</div>
		
	</div>
</div>
<?php include"footer.php"; ?>
