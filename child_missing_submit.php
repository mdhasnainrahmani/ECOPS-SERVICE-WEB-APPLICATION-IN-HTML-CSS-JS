<?php include"header2.php";
?>
<div class="unit-5 overlay" style="background-image: url('images/hsp-police.jpg');">
      <div class="container text-center">
        <h2 class="mb-0" style="margin-left:20px;">Child Missing</h2>
       <!-- <p class="mb-0 unit-6"><a href="home.php">Home</a> <span class="sep"><b>></b></span> <span>Citizen Services</span></p>-->
      </div>
    </div>
	<?php 
 $i=1;
include"config.php";
$q="select*from `child_missing`";
$res =mysqli_query($v,$q);
?>
	<div class="row" >
		<div class="col-md-12">
		<div style="overflow-x:auto;">
		<table class="table table-striped " >
		<tr>
	    <th>S.No.</th>
	    <th>Name</th>
		<th>Email</th>
		<th>Victim Name</th>
		<th>Occurence Date</th>
		<th>Age</th>
		<th>Picture</th>
		<th>Criminal Status</th>
		<th>Child Status</th>
		<th>Uploaded Picture</th>
		<th>Date</th>
		<th>Location</th>
		<th>Operation</th>
		</tr>
		
		<?php while($arr=mysqli_fetch_array($res))
				  {
					  ?>
					  
			<tr>
	        <td><?php echo $i;
		           $i++;
				  ?>
	         </td>			
		<td> 
		<?php echo $arr['name'];
				  ?>
	    </td>

				  
		<td>
		<?php echo $arr['email'];
            ?>
        </td>
        <td>
		<?php echo $arr['child_name'];
          ?>
        </td>
		<td><?php echo $arr['date'];
              ?>
        </td>
		<td><?php echo $arr['age'];
             ?>
        </td>
		<td> 
		
		<img alt="images"height="100" width="120"src="upload/<?php echo $arr['picture'];
             ?>">
		
        </td>
		
			  <td><?php echo $arr['criminal_status'];?></td>
			  <td><?php echo $arr['child_status'];?></td>
			  <td><img alt="images" height="100" width="120" src="cops login/upload/<?php echo $arr['upload'];?>">
			  <td><?php echo $arr['dateo'];?></td>
			  <td><?php echo $arr['location'];?></td>
			  <td><a href="delete_child.php?id=<?php echo$arr['id']?>">Delete</a></td>
	    </tr>
		<?php } ?>
		
		</table>
		</div>
		</div>
		</div>
		
<?php include"footer.php"
?>