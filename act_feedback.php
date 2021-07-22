<?php
include "header.php";
require "dbi.php";


$fid=$_POST["fid"];
$fname=$_POST["fname"];
$lname=$_POST["lname"];
$e_mail=$_POST["e_mail"];
$u_date=date("Y-m-d");
$content=$_POST["content"];

//$name=$fname+$lname;

$query="insert into feedback(fid,fname,lname,e_mail,u_date,content) values('$fid','$fname','$lname','$e_mail','$u_date','$content' )";

mysqli_query($con,$query) or die(mysqli_error($con));

if(mysqli_affected_rows($con) > 0)
{
	header("location:feedback_success.php");
}

?>