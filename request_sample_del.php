<?php
include "header.php";
require "dbi.php";
?>
<?php
//include "header.php";
$rid= $_GET["rid"];
//$fname=$_GET["fname"];

//require "dbi.php";
$query="select * from request_sample where rid=$rid";

$result=mysqli_query($con,$query) or die(mysqli_error($con));

//	echo "<center><h2 style='color:red'>Products Exist. Cannot Delete Category</h2></center>";
	//echo "<p><a href='admin.php'>Back</a></p></center>";


?>
<html>
<body>
<center>
<p><a href='hospital.php'>Back</a></p>

<form action="request_sample_delete.php" method="post">

<?php
	echo "<h2 style='color:maroon'>Delete Request @ RID: $rid</h2>";
	echo "<h2>Are You Sure?</h2>";

?>

<input type="hidden" name="rid" value="<?php echo $rid; ?>" />


<input type="submit"  value="Confirm Delete"/>

</form>
</center>
</body>
</html>