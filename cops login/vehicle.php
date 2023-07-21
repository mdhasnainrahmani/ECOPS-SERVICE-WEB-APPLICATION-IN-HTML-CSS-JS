<?php include"header2.php"
?>
<div class="unit-5 overlay" style="background-image: url('images/hsp-police.jpg');">
      <div class="container text-center">
        <h2 class="mb-0">Vehicle Missing</h2>
       <!-- <p class="mb-0 unit-6"><a href="home.php">Home</a> <span class="sep"><b>></b></span> <span>Citizen Services</span></p>-->
      </div>
    </div>
	<?php 
$i=1;
include"config.php";
$q="select*from `vehicle_missing` ";
$res =mysqli_query($v,$q);

?>
	<div class="conatiner">
<div class="row form-group mt-5">
		<div class="col-md-12">
		<div style="overflow-x:auto;">
		<table class="table table-striped table-bordered">
			<tr>
			<th>S.NO</th>
				<th>Name</th>
				<th>Email</th>
				<th>Location</th>
				<th>Occurence Date</th>
				<th>Number</th>
				<th>Picture</th>
				<th>Wheeler</th>
				<th>Response</th>
				</tr>
				<?php while($arr=mysqli_fetch_array($res))
				  {
					  ?>
				<tr>
				<td><?php echo $i;
		           $i++;
				  ?>
	        </td>
				<td><?php echo $arr['name'];?></td>
				<td><?php echo $arr['email'];?></td>
				<td><?php echo $arr['location'];?></td>
				
				<td><?php echo $arr['odate'];?></td>
				<td><?php echo $arr['number'];?></td>
				<td><img alt="images"height="100" width="120"src="../upload/<?php echo $arr['picture'];
             ?>"></td>
				<td><?php echo $arr['wheeler'];?></td>
				<td><a class="btn btn-dark" href ="response_vehicle_cops.php?id=<?php echo $arr['id'];?>">Response</a></td>
				  <?php }?>
				</tr>
			</table>
			</div>
		</div>
	</div>
</div>

<?php include"footer.php"
?>