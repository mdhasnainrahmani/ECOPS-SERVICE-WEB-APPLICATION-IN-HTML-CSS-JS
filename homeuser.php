<?php
$name=$_GET['firstname'];
$email=$_GET['email'];
$password=$_GET['pwd'];
include"config.php";
$q="insert into `ecops`(`name`,`email`,`password`)values('$name','$email','$password')";
$v2=mysqli_query($v,$q);
if($v2 > 0)
{
	header("location:home.php");
}
	else
	{
		echo"not inserted";
	}

?>