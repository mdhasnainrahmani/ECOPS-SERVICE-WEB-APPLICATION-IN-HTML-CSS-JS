<?php
$id=$_POST['fir_no'];
$comp_type=$_POST['comp_type'];
$date=$_POST['date'];
$status=$_POST['cstatus'];
$status2=$_POST['bstatus'];
$fn = $_FILES['img']['name'];
$fs= $_FILES['img']['size'];
$ft= $_FILES['img']['type'];
$ftmp= $_FILES['img']['tmp_name'];
$datec=$_POST['datec'];
$location=$_POST['location'];
include"config.php";
$q="update `vehicle_missing` set  criminal_status='$status', 
vehicle_status ='$status2' , pic='$fn',dateo ='$datec',area ='$location' 
where id='$id' ";
$v2 =mysqli_query($v,$q);
if($v2 > 0)
{
	move_uploaded_file($ftmp,"upload/".$fn);
	header("location: response_vehicle_cops.php?x=34");
	
}
else
{
	echo mysqli_error($v);
	
}
?>