<?php
$comp_type=$_POST['comp_type'];
$odate=$_POST['odate'];
$details=$_POST['info'];
$suscname=$_POST['suscname'];
$suscdetail=$_POST['susinfo'];
$ps_name=$_POST['ps_name'];
$vicname=$_POST['vicname'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$address=$_POST['homead'];
$phone_no=$_POST['phone_no'];
$email=$_POST['email'];
include"config.php";
$q="insert into `fir_lodge`(`comp_type`,`odate`,`Details`,`suscname`,`suspect_details`,
`ps_name`,`vicname`,`gender`,`age`,`adress`,`contact_no`,`email`) values('$comp_type','$odate','$details','$suscname',
'$suscdetail','$ps_name','$vicname','$gender','$age','$address','$phone_no','$email')";
$res=mysqli_query($v,$q);
if($res>0)
{
	header("location:fir-lodge.php?x=12");
}
else{
	echo mysqli_error($v);
}
?>