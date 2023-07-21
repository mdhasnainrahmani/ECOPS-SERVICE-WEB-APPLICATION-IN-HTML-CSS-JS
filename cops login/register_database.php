<?php 
$name=$_POST['fullname'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$des=$_POST['des'];
$ps=$_POST['ps'];
$num=$_POST['num'];
$dob=$_POST['dob'];
$address=$_POST['address'];
include"config.php";
$q="insert into`cops_register`(`name`,`email`,`password`,`designation`,`ps_name`,`contact_no`,`dob`,`address`)
values('$name','$email','$pwd','$des','$ps','$num','$dob','$address')";
$res=mysqli_query($v,$q);
if($res>0)
{
header("location:../index.php");	
}
else
{
	echo mysqli_error($v) ;
}
?>