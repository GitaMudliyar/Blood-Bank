<?php
include "header.php";
require "dbi.php";
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
//$name=$_POST["name"];
//$e_mail=$_POST["e_mail"];
//$u_date=date("Y-m-d");
//$comments=$_POST["comments"];

//include "dbi.php";
//include "header.php";


$query="select * from feedback";

$result = mysqli_query($con,$query) or die(mysqli_error($con));
echo "<center>";

echo "<p><a href='admin.php' class='btn btn-primary'>Back To Panel</a></p>";

//$total = mysqli_num_rows($result);

//echo "<h3>".strtoupper($cn).": $total Product(s)</h3>";
echo "<div class='table-responsive' >";
echo "<table border='1'>";
echo "<tr bgcolor='gold'><th><center>Sr.No.</center></th><th><center>Name</center></th><th><center>E-mail</center></th>";
echo "<th><center>Received On</center></th><th><center>Contents</th><th><center>Delete</center></th></tr>";

$cnt=0;

while($row=mysqli_fetch_array($result))
{
	$cnt++;
	$fid=$row["fid"];
	$fname=$row["fname"];

	echo "<tr>";
	echo "<td align='center'>$cnt</td>";
	echo "<td>&nbsp;".$row["fname"]." ";
	echo "&nbsp;".$row["lname"]."</td>";
	echo "<td>&nbsp;".$row["e_mail"]."</td>";
	echo "<td>&nbsp;".$row["u_date"]."</td>";
		echo "<td>&nbsp;".$row["content"]."</td>";
	echo "<td>";
	echo "&nbsp";
	//echo "<a href='feedback_del.php?fid=$fid'>Delete</a></td>";
	echo "<a href='feedback_del.php?fid=$fid&fname=$fname' class='btn active btn-warning' ";
	echo "style='background-color:SaddleBrown; color:white'>Delete</a></td>";
	echo "</tr>";
}

echo "</table></div></center>";

mysqli_close($con);
include "footer.php";
?>