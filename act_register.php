<?php
include "header.php";   // session started in header file - session_start();

$uname=$_POST["uname"];
$npwd=$_POST["npwd"];
$cpwd=$_POST["cpwd"];
$blood_group=$_POST["blood_group"];
$role=$_POST["role"];

if(empty($uname) || empty($npwd))
{
	echo "<div class='well text-center'><h2 style='color:red'>Error: UserName/ Password Required !</h2>";
	echo "<p><a href='register.php'>Try Again</a></p></div>";
	include "footer.php";
	return;
}

if($npwd!=$cpwd)
{
	echo "<div class='well text-center'><h2 style='color:red'>Error: Passwords Mismatch!</h2>";
	echo "<p><a href='register.php'>Try Again</a></p></div>";
	include "footer.php";
	return;
}


require "dbi.php";

$query="select * from login where uname='$uname'";

$result = mysqli_query($con,$query) or die(mysqli_error($con));

if(mysqli_num_rows($result) > 0)
{
	echo "<div class='well text-center'><h2 style='color:red'>Error: User Already Exists!</h2>";
	echo "<p><a href='register.php'>Try Again</a></p></div>";
}
else
{
	$dt=date('Y-m-d');

	$query1 = "insert into login(uname,pwd,role,blood_group,created_at) values('$uname','$npwd','$role','$blood_group','$dt')";

	mysqli_query($con,$query1) or die(mysqli_error($con));

	if($role=='receiver')
		$query2 = "insert into receiver_profile(r_uname) values('$uname')";
	else
		$query2 = "insert into hospital_profile(h_uname) values('$uname')";

	mysqli_query($con,$query2) or die(mysqli_error($con));

	if(mysqli_affected_rows($con) > 0)
	{
		echo "<div class='well text-center'><h2 style='color:green'>Success: User Registered!</h2>";
	
		echo "<p><a href='login.php'>Login...</a></p></div>";

	}
}

include "footer.php";
?>
