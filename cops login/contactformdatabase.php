<?php
$name=$_POST['fullname'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
include"config.php";
$q="insert into`contact`(`name`,`email`,`subject`,`message`)values
('$name','$email','$subject','$message')";
$result=mysqli_query($v,$q);
if($result>0)
{
   header("location:contact.php?x=65");
}
else{
	echo"no data is inserted";
}
?>