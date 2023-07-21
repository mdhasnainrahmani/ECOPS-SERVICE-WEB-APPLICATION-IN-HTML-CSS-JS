<?php
$id=$_GET['id'];
include"config.php";
$q= "delete from `vehicle_missing` where id = $id";
$res=mysqli_query($v,$q);
if ($res > 0)
{
	header("location:vehicle_missing_submit.php");
}
?>