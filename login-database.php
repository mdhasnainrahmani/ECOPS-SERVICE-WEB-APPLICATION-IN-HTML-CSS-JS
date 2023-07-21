<?php 
session_start();
$name=$_GET['firstname'];
$email=$_GET['email'];
$password=$_GET['pwd'];
include"config.php";
$q="select * from `userregister` where email = '$email' and password = '$password'";
$result=mysqli_query($v,$q);
if($arr = mysqli_fetch_array($result))
{
	$_SESSION['email']=$email;
	$_SESSION['name']=$name;
	header("location:home.php");
}
else
{
	echo"result not matched";

}
?>
	