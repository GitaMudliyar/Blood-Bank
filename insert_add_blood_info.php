<?php
include "header.php";
require "dbi.php";


//$fid=$_POST["fid"];
$h_uname=$_POST["uname"];
$hospital_name=$_POST["hospital_name"];

$blood_group=$_POST["blood_group"];
$quantity=$_POST["quantity"];
$u_date=date("Y-m-d");
//$content=$_POST["content"];
//echo $hospital_name;
//$name=$fname+$lname;

$query="insert into h_blood_info(h_uname,hospital_name,blood_group,quantity,udt) values('$h_uname','$hospital_name','$blood_group','$quantity','$udt' )";

mysqli_query($con,$query) or die(mysqli_error($con));

if(mysqli_affected_rows($con) > 0)
{
	header("location:info_added_successfully.php");
}

?>