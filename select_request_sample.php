<?php
include "header.php";
include "validate_hospital.php";
require "dbi.php";
//echo $uname;
?>
<style>
th,td{
	padding:15px;
	text-align:left;
	border-bottom:1px solid DeepPink;
	height:50px;
	text-align:center;
}

tr:hover{
	background-color:FloralWhite;
}

table{
	width:95%;
}

</style>


<?php
//$fid=$_POST["fid"];
//$uname=$_POST["uname"];
//echo $uname;
//$e_mail=$_POST["e_mail"];
//$u_date=date("Y-m-d");
//$comments=$_POST["comments"];

//include "dbi.php";
//include "header.php";


//$query="select * from request_sample";
$query="select * from request_sample where t_uname='$uname'";

$result = mysqli_query($con,$query) or die(mysqli_error($con));
echo "<center>";

echo "<p><a href='hospital.php' class='btn btn-primary'>Back To Panel</a></p>";

//$total = mysqli_num_rows($result);

//echo "<h3>".strtoupper($cn).": $total Product(s)</h3>";
echo "<div class='table-responsive' >";
echo "<table border='1'>";
echo "<tr bgcolor='gold'><th><center>Sr.No.</center></th><th><center>Request From</center></th><th><center>Date</center></th>";
echo "<th><center>Blood Group</center></th><th><center>Quantity</center></th><th><center>Contents</th><th><center>Action</center></th></tr>";

$cnt=0;

while($row=mysqli_fetch_array($result))
{
	$cnt++;
	$rid=$row["rid"];
	$f_uname=$row["f_uname"];
	$from_u=$row["from_u"];
	$mdate=$row["mdate"];
	$quantity=$row["quantity"];
	$contents=$row["contents"];
	$blood_group=$row["blood_group"];

	echo "<tr>";
	echo "<td align='center'>$cnt</td>";
	echo "<td>&nbsp;".$row["from_u"]." ";
	//echo "&nbsp;".$row["lname"]."</td>";
	echo "<td>&nbsp;".$row["mdate"]."</td>";
	echo "<td>&nbsp;".$row["blood_group"]."</td>";
	echo "<td>&nbsp;".$row["quantity"]."</td>";
		echo "<td>&nbsp;".$row["contents"]."</td>";
	echo "<td>";
	echo "&nbsp";
	//echo "<a href='feedback_del.php?fid=$fid'>Delete</a></td>";
	
	echo "<a href='read_more.php?f_uname=$f_uname' class='btn active btn-warning' ";
		echo "style='background-color:Crimson; color:white'>Read More</a>";
	
	echo "<a href='request_sample_del.php?rid=$rid' class='btn active btn-warning' ";
	echo "style='background-color:SaddleBrown; color:white'>Delete</a></td>";
	echo "</tr>";
}

echo "</table></div></center>";

mysqli_close($con);
include "footer.php";
?>