<?php
session_start();
$email=$_GET['email'];
$pwd=$_GET['pwd'];
include"config.php";
$q="select * from `userregister` where email='$email' and password='$pwd'";
$res=mysqli_query($v,$q);
if($arr=mysqli_fetch_array($res))
{
	$_SESSION['email']=$email;
	header("location:index_datab.php");
}
else
{
	echo"unauthorized access";
}
?>