<?php 
$name=$_POST['name'];
$email=$_POST['email'];
$child_name=$_POST['child_name'];
$odate=$_POST['odate'];
$age=$_POST['age'];
$fn = $_FILES['img']['name'];

$fs= $_FILES['img']['size'];
$ft= $_FILES['img']['type'];
$ftmp= $_FILES['img']['tmp_name'];
include"config.php";
$q="insert into `child_missing`(`name`,`email`,`child_name`,`date`,`age`,`picture`)
values('$name','$email','$child_name','$odate','$age','$fn')";
$v2=mysqli_query($v,$q);
if ($v2>0)
{
	move_uploaded_file($ftmp,"upload/".$fn);
	header("location:child_missing_submit.php");
}
else
{
	echo"no data is inserted";
}
?>