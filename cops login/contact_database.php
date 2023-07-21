<?php
$name=$_POST['fullname'];
$email=$_POST['email'];
$des=$_POST['des'];
$ps=$_POST['ps'];
$subject=$_POST['subject'];
$message=$_POST['message'];
include"config.php";
$q="insert into`officer_contact`(`name`,`email`,`designation`,`ps_name`,`subject`,`message`)
values('$name','$email','$des','$ps','$subject','$message')";
$result=mysqli_query($v,$q);
if($result>0)
{
   header("location:contact_cops.php?x=100");
}
else{
	echo"no data is inserted";
}
?>