<?php 
$ps=$_POST['ps'];
$email=$_POST['email'];
$password=$_POST['pwd'];
include"config.php";
$q="select * from `cops_register` where ps_name='$ps' and email = '$email' and password = '$password'";
$result=mysqli_query($v,$q);
if($arr = mysqli_fetch_array($result))
{
	
	header("location:home_cops.php");
}
else
{
	echo"result not matched";

}
?>
	