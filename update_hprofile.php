<?php
include "header.php";   // session started in header file - session_start();
include "dbi.php";

$hospital_name=$_POST["hospital_name"];
/*$fn=$_POST["fname"];
$ln=$_POST["lname"];
$age=$_POST["age"];
$gender=$_POST["gen"];
$aadhar_id=$_POST["aadhar_id"];*/
$phone=$_POST["phone"];
$e_email=$_POST["e_email"];
$address=$_POST["address"];
$city=$_POST["city"];
$state=$_POST["state"];
//$udt=date("Y-m-d");



mysqli_query($con,"update hospital_profile set hospital_name='$hospital_name',phone='$phone',e_email='$e_email',address='$address',city='$city',state='$state' where h_uname='$uname'");
if(mysqli_affected_rows($con) > 0)
{
	echo "<div class='well text-center'><h2 style='color:green'>Success: Profile Updated!</h2>";
	echo "<p><a href='hospital.php'>Back To Panel</a></p></div>";
}


include "footer.php";
?>