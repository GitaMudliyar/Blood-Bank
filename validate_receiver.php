<?php
	
if(!isset($_SESSION["uname"]))
{
	header("location:login.php");
	exit;
}
else if($_SESSION["role"] !="receiver")
{
	header("location:login.php");
	exit;
}

?>