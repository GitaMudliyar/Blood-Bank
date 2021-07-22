<?php
include "header.php";
require "dbi.php";
?>
<?php
//include "header.php";
$fid= $_GET["fid"];
$fname=$_GET["fname"];

//require "dbi.php";
$query="select * from feedback where fid=$fid";

$result=mysqli_query($con,$query) or die(mysqli_error($con));

//	echo "<center><h2 style='color:red'>Products Exist. Cannot Delete Category</h2></center>";
	//echo "<p><a href='admin.php'>Back</a></p></center>";


?>
<html>
<body>
<center>
<p><a href='feedback_select.php'>Back</a></p>

<form action="feedback_delete.php" method="post">

<?php
	echo "<h2 style='color:maroon'>Delete Feedback:$fname @ FID: $fid</h2>";
	echo "<h2>Are You Sure?</h2>";

?>

<input type="hidden" name="fid" value="<?php echo $fid; ?>" />


<input type="submit"  value="Confirm Delete"/>

</form>
</center>
</body>
</html>