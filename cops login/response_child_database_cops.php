<?php 

$id=$_POST['fir_no'];
$comp_type=$_POST['comp_type'];
$date=$_POST['date'];
$status=$_POST['status1'];
$status2=$_POST['status2'];

$fn = $_FILES['img']['name'];
$fs= $_FILES['img']['size'];
$ft= $_FILES['img']['type'];
$ftmp= $_FILES['img']['tmp_name'];
$datec=$_POST['datec'];
$location=$_POST['location'];
include"config.php";
$q="update `child_missing` set  criminal_status='$status', 
vehicle_status ='$status2' , upload ='$fn',dateo ='$datec',location='$location' 
where id='$id'";
$v2 =mysqli_query($v,$q);
if($v2 > 0)
{
	move_uploaded_file($ftmp,"upload/".$fn);
	header("location:response_child_cops.php?x=23");
	
}
else
{
	echo"no data is inserted";
	
}
?>