<?php
session_start();
echo $_SESSION['email'];
if(!isset($_SESSION['email']))
	{
		header("location:login-main.php?x=2");
	}
	echo "<a href='logout.php'>logout</a>";
?>