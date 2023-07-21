<?php 
$name=$_POST['fullname'];
$email=$_POST['email'];
$password=$_POST['pwd'];
$phoneno=$_POST['phone_no'];
$dob=$_POST['dob'];
$address=$_POST['address'];
include"config.php";
$q="insert into `userregister`(`name`,`email`,`password`,`phone_no`,
`dob`,`address`)values('$name','$email','$password','$phoneno','$dob','$address') ";
$v2=mysqli_query($v,$q);
if($v2>0)
{
	header("location:index.php");
}
else{
	echo"no data is inserted";
}
?>
