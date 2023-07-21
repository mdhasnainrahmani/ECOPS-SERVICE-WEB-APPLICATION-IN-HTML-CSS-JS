<?php
$id=$_GET['id'];
include "config.php";
$q= "delete from `criminal` where id = $id";
$res=mysqli_query($v,$q);
if ($res > 0)
{
	header("location:criminal_cops.php");
}
?>