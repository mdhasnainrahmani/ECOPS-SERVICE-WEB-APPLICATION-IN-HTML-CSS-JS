<?php include"header2.php"
?>
<div class="unit-5 overlay" style="background-image: url('images/hsp-police.jpg');">
      <div class="container text-center">
        <h2 class="mb-0">Child Missing</h2>
       <!-- <p class="mb-0 unit-6"><a href="home.php">Home</a> <span class="sep"><b>></b></span> <span>Citizen Services</span></p>-->
      </div>
    </div>
		<?php 
$i=1;
include"config.php";
$q="select*from `child_missing` ";
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
				<th>Name</th>
				<th>Occurence Date</th>
				<th>Age</th>
				<th>Picture</th>
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
				<td><?php echo $arr['child_name'];?></td>
				<td><?php echo $arr['date'];?></td>
				<td><?php echo $arr['age'];?></td>
				<td><img alt="images"height="100" width="120"src="../upload/<?php echo $arr['picture'];?>"></td>
				
				<td><a class="btn btn-dark" href ="response_child_cops.php?id=<?php echo $arr['id'];?>">Response</a></td>
				  <?php }?>
				</tr>
			</table>
			</div>
		</div>
	</div>
	</div>
<?php include"footer.php"
?>