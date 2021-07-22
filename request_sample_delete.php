<?php
include "header.php";
$rid= $_POST["rid"];
//$name=$_POST["name"];

require "dbi.php";

$query="delete from request_sample where rid=$rid";

mysqli_query($con,$query) or die(mysqli_error($con));

if(mysqli_affected_rows($con) > 0)
{
	header("location:hospital.php");
}

?>