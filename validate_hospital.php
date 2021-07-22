<?php
	
if(!isset($_SESSION["uname"]))
{
	header("location:login.php");
	exit;
}
else if($_SESSION["role"] !="hospital")
{
	header("location:login.php");
	exit;
}

?>