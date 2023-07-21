<?php include"header2.php"
?>

<div class="unit-5 overlay" style="background-image: url('images/hsp-police.jpg');">
      <div class="container text-center">
        <h2 class="mb-0">Add Criminals</h2>
       <!-- <p class="mb-0 unit-6"><a href="home.php">Home</a> <span class="sep"><b>></b></span> <span>Citizen Services</span></p>-->
      </div>
    </div>
   
	
<?php 
include"config.php";
$q="select*from `criminal`";
$res =mysqli_query($v,$q);

?>
	
	<div class="row form-group">
		<div class="col-md-12">
		<table class="table table-striped ">
		<tr>
		
	    <th>Name</th>
		<th>Crime</th>
		<th>Criminal Image</th>
		<th>Operations</th>
		</tr>
		
		<?php while($arr=mysqli_fetch_array($res))
				  {
					  ?>
					  
			<tr>		  
		

				  
		<td>
		<?php echo $arr['name'];
            ?>
        </td>
        <td>
		<?php echo $arr['crime'];
          ?>
        </td>
		<td><img alt="images"height="120" width="120"src="images/<?php echo $arr['criminal_image']; ?>">
            </td>
		<td><a href="delete_criminal.php?id=<?php echo$arr['id']?>">Delete</a></td>
		</tr>
		<?php
		}
		?>		
		</table><br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="new_criminal_cops.php" class="btn btn-primary">Add New Criminal</a>
		</div>
		</div>
<?php include"footer.php"
?>

