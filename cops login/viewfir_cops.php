<?php include"header2.php"
?>
<div class="unit-5 overlay" style="background-image: url('images/hsp-police.jpg');">
      <div class="container">
        <h2 class="mb-0"style="margin-left:400px;">View FIR</h2>
       <!-- <p class="mb-0 unit-6"><a href="home.php">Home</a> <span class="sep"><b>></b></span> <span>Citizen Services</span></p>-->
      </div>
    </div>

	<?php 
$i=1;
include"config.php";
$psname=$_SESSION['psname'];
$q="select*from `fir_lodge` where ps_name ='$psname'";
$res =mysqli_query($v,$q);
if(isset($_REQUEST['x'])==45)
	{
		
		echo '<div style="height:40px;width:700px;background-color:rgb(0,100,164); margin-left:162px; margin-top:10px;"> <h5 style="font-size:26px;margin-left:162px;float:left;color:white;);"><strong>Success!</strong> Block  Updated  Sucessfully. </h5></div>';
	}
?>

<div class="conatiner">
<div class="row">
		<div class="col-md-12 mt-5">
		<div style="overflow-x:auto;">
		<table class="table table-striped table-bordered">
		<thead class="thead-dark">
			<tr>
				<th scope="col">S.NO</th>
				<th scope="col">Complaint Type</th>
				<th scope="col">Date</th>
				<th scope="col">Details</th>
				<th scope="col">Suspect Name</th>
				<th scope="col">Suspect Details</th>
				<th scope="col">Police Station Name</th>
				<th scope="col">Victim Name</th>
				<th scope="col">Gender</th>
				<th scope="col">Age</th>
				<th scope="col">Address</th>
				<th scope="col">Contact No.</th>
				<th scope="col">Email</th>
				<th scope="col">Response</th>
				</tr>
				</thead>
				<?php while($arr=mysqli_fetch_array($res))
				  {
					  ?>
				<tbody>
				<tr>
				<td><?php echo $i;
		           $i++;
				  ?>
	         </td>
				<td><?php echo $arr['comp_type'];?></td>
				<td><?php echo $arr['odate'];?></td>
				<td><?php echo $arr['Details'];?></td>
				<td><?php echo $arr['suscname'];?></td>
				<td><?php echo $arr['suspect_details'];?></td>
				<td><?php echo $arr['ps_name'];?></td>
				<td><?php echo $arr['vicname'];?></td>
				<td><?php echo $arr['gender'];?></td>
				<td><?php echo $arr['age'];?></td>
				<td><?php echo $arr['adress'];?></td>
				<td><?php echo $arr['contact_no'];?></td>
				<td><?php echo $arr['email'];?></td>
				<td>
					<?php
						if($arr['criminal_status']=='Arrested')
							echo "Completed";
						else{
					  ?><a class="btn btn-dark" href ="response_cops.php?id=<?php echo $arr['id'];?>">Response</a>
					    <?php }?>
				</td>
				  <?php }?>
				</tr>
				
			</table>
			</div>
		</div>
	</div>
</div>
<?php include"footer.php"
?>