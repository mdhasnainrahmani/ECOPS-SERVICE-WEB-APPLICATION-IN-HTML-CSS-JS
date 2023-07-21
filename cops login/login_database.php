<?php 
session_start();
$ps=$_POST['ps'];
$email=$_POST['email'];
$password=$_POST['pwd'];
include"config.php";
$q="select * from `cops_register` where ps_name='$ps' and email = '$email' and password = '$password'";
$result=mysqli_query($v,$q);
if($arr = mysqli_fetch_array($result))
{
	$_SESSION['email']=$email;
	$_SESSION['name']=$arr['name'];
	$_SESSION['psname']=$arr['ps_name'];
	header("location:home_cops.php");
}
else
{
	echo"result not matched";

}
?>
	