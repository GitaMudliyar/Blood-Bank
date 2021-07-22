<?php
include "header.php";
require "dbi.php";
?>
<style>
th,td{
	background-color:#FFEFD5;
	padding:15px;
	text-align:left;
	border-bottom:1px solid DeepPink;
	height:50px;
	text-align:center;
}

tr:hover{
	background-color:FloralWhite;
}
tr,th{
	background-color:ChartReuse;
}

table{
	background-color:#FFD700;
	width:95%;
}
img
{
	border-radius:50%;
	border: 5px solid navy;
}

</style>

<?php
//include "header.php";   // require "header.php";
//include "dbi.php";
$f_uname=$_GET["f_uname"];
//$uname=$_GET["uname"];
//$sid=$_GET["sid"];

$query = "select * from receiver_profile where r_uname='$f_uname'"; 



//$skill=strtoupper($skill);
$result=mysqli_query($con,$query);

echo "<center>";
echo "<br>";


echo "<div class='table-responsive' >";
echo "<table border='1'>";
echo "<tr bgcolor='deepPink'><th><center>Name</center></th><th><center>Age</center></th>";
echo "<th><center>Gender</center></th><th><center>Phone</center></th>";
echo "<th><center>Email</center></th>";
echo "<th><center>Address</center></th><th><center>State</center></th></tr>";

//echo "<th><center>Photo</center></th></tr>";
//echo "<th><center>.....</center></th>";

//$cnt=0;
/*about_myself*/

while($row=mysqli_fetch_array($result))
{
	//$fname=$row["fname"];
	$fn=$row["fname"];
$ln=$row["lname"];
$age=$row["age"];
$gender=$row["gender"];
//$qual=$row["qualification"];
$aadhar_id=$row["aadhar_id"];
$phone=$row["phone"];
$e_email=$row["e_email"];
$address=$row["address"];
$city=$row["city"];
$state=$row["state"];
//$nm=$fn+$nm
	$nm = $row["fname"]." ".$row["lname"];

	echo "<td><br><br>&nbsp;&nbsp;".$nm."<br><br></td>";
	//echo "<td><br><br>&nbsp;&nbsp;".$row["ln"]."<br><br></td>";
	echo "<td><br><br>&nbsp;&nbsp;".$row["age"]."<br><br></td>";
	echo "<td><br><br>&nbsp;&nbsp;".$row["gender"]."<br><br></td>";
	echo "<td><br><br>&nbsp;&nbsp;".$row["phone"]."<br><br></td>";
	echo "<td><br><br>&nbsp;&nbsp;".$row["e_email"]."<br><br></td>";
	echo "<td><br><br>&nbsp;&nbsp;".$row["address"].",";
	echo "&nbsp;&nbsp;".$row["city"]."<br><br></td>";
	echo "<td><br><br>&nbsp;&nbsp;".$row["state"]."<br><br></td>";
	//echo "About Like are:-&nbsp;&nbsp;".$row["state"]."<br><br></td>";
	

	echo "</tr>";
	
	
}


echo "</table></div>";
echo "</center>";
echo "<br>";


 ?>


 
 <?php
include "footer.php";   // require "header.php";
 ?>