<?php
$name=$_POST['name'];
$crime=$_POST['crime'];
$fn =$_FILES['pic']['name'];
$fs=$_FILES['pic']['size'];
$ft=$_FILES['pic']['type'];
$ftmp=$_FILES['pic']['tmp_name'];
$detail=$_POST['detail'];
include"config.php";
$q="insert into `criminal`(`name`,`crime`,`criminal_image`,`details`)
values('$name','$crime','$fn','$detail')";
$v2=mysqli_query($v,$q);
if($v2>0)
{
	move_uploaded_file($ftmp,"upload/".$fn);
	header("location:new_criminal_cops.php?x=98");
	
}
else
{
	echo mysqli_error($v);
	
}
?>