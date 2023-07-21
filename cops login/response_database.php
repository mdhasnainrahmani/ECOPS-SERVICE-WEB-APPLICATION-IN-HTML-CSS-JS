<?php
$id=$_POST['fir_no'];
$comp_type=$_POST['comp_type'];
$date=$_POST['date'];
$status=$_POST['cstatus'];
$datec=$_POST['datec'];
$location=$_POST['location'];
include"config.php";
$q="update `fir_lodge` set  criminal_status='$status' ,date ='$datec',location='$location' 
where id='$id'";
$v2 =mysqli_query($v,$q);
if($v2 > 0)
{
	header("location:viewfir_cops.php?x=45");
}
else
{
	echo"no data is inserted";
	
}
?>