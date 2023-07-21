<?php 
$location=$_POST['location'];
$odate=$_POST['odate'];
$num=$_POST['num'];
$fn = $_FILES['imgg']['name'];
$fs= $_FILES['imgg']['size'];
$ft= $_FILES['imgg']['type'];
$ftmp= $_FILES['imgg']['tmp_name'];
$wheeler=$_POST['wheeler'];
$name=$_POST['name'];
$email=$_POST['email'];
include"config.php";
$q="insert into `vehicle_missing`(`location`,`odate`,`number`,`picture`,`wheeler`,
`name`,`email`)values('$location','$odate','$num','$fn','$wheeler','$name',
'$email')";
$v2=mysqli_query($v,$q);
if($v2>0)
{
	move_uploaded_file($ftmp,"upload/".$fn);
	header("location:vehicle_missing_submit.php");
	
}
else
{
	echo mysqli_error($v);
	
}
?>