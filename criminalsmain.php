<div class="unit-5 overlay" style="background-image: url('images/hsp-police.jpg');">
      <div class="container text-center">
        <h2 class="mb-0"> View Criminals</h2>
       <!-- <p class="mb-0 unit-6"><a href="home.php">Home</a> <span class="sep"><b>></b></span> <span>Citizen Services</span></p>-->
      </div>
    </div>
	<div class="container-fluid">
	<div class="row">
	
	<?php 

include"config.php";
$q="select*from `criminal`";
$res =mysqli_query($v,$q);
while ($arr=mysqli_fetch_array($res)){
?>
	<div class ="card" style="width:150px;margin-left:30px;margin-top:30px;">
	<img height="150" width="150" src ="cops login/upload/<?php echo$arr['criminal_image']?>" class="card-img-top" alt="image">
<div class="card-body"> <h5 class="card-title"><?php echo $arr['name']?></h5>
<p class="card-text"><?php echo $arr['crime']?></p>
<p class="card-text"><?php echo $arr['details']?></p>
<!--<a href="" class="btn btn-primary">Details</a>-->
</div>	
	</div>
<?php }?>
	</div></div><br>
	