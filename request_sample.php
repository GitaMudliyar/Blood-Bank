<?php
include "header.php";
include "validate_receiver.php";
require "dbi.php";
?>
<?php
//include "header.php";
//echo $uname;
//include "validate_worker.php";
//echo "hi".$uname;
?>
<style>
body{
	margin: 0;
	padding: 0;
	background : url(pic1.jpg); 
	background-size: cover;
	background-position: center;
	font-family: sans-serif;
}
</style>

<div class="panel panel-primary" style="max-width:300px;margin:auto">
		<div class="panel-heading">
			SEND REQUEST
		</div>

		<div class="panel-body panel-center">
		<?php
//include "dbi.php";
//$from_u=$_GET["w_uname"];
//$sid=$_GET["sid"];
///$nm=$_GET["nm"];
//$pm_id=$_GET["pm_id"];
$udt=date('Y-m-d');
$f_uname=$_GET["uname"];
$t_uname=$_GET["h_uname"];
$t_nm=$_GET["hospital_name"];
///$t_uname=$_GET["w_nm"];



$query = "select * from receiver_profile where 	r_uname='$uname'";
$result = mysqli_query($con,$query) or die(mysqli_error($con));

while($row=mysqli_fetch_array($result))
{
	$m_nm = $row["fname"]." ".$row["lname"];
	echo $m_nm;
	
}
//echo "ji";
?>

<form class="form" action="insert_sample_request.php" method="post">		

<div class="form-group">
<label for="nameField">Date</label>
<input type="text" readonly class="form-control input-sm" name="mdate" value="<?php echo $udt;?>" />
</div>

<input type="hidden"  value="<?php echo $m_nm;?>" name="m_nm"/>
<input type="hidden"  value="<?php echo $f_uname;?>" name="uname"/>
<input type="hidden"  value="<?php echo $t_uname;?>" name="t_uname"/>
<input type="hidden"  value="<?php echo $t_nm;?>" name="t_nm"/>
<input type="hidden"  value="<?php //echo $pm_id;?>" name="pm_id"/>


<div class="form-group">
<label for="nameField">From</label>
<input type="text" class="form-control input-sm" readonly value="<?php echo $m_nm;?>" placeholder="Worker Name" />
</div>

<!--<div class="form-group">
<label for="nameField">To User Name</label>
<input type="text" class="form-control input-sm" readonly value="<?php echo $t_uname;?>" placeholder="Worker Name" />
</div>-->


<div class="form-group">
<label for="nameField">To</label>
<input type="text" class="form-control input-sm" readonly value="<?php echo $t_nm;?>" placeholder="Worker Name" />
</div>

<!--<input type="hidden" class="form-control input-sm" name="sid" />-->

<div class="form-group">
<label for="nameField">Quantity</label>
<input type="number" class="form-control input-sm" name="quantity" placeholder="Quantity" />
</div>

<div class="form-group">
<label for="nameField">Blood Group</label>
<div class="form-group">
	 <select name="blood_group" class="form-control text">
			                       <option value="">Blood Group</option>
	                               
	<option value="A+ ve">A +ve</option>
	<option value="A- ve">A -ve</option>
	<option value="B+ ve">B +ve</option>
	<option value="B- ve">B -ve</option>
	<option value="O+ ve">O +ve</option>
	<option value="O- ve">O -ve</option>
	<option value="AB+ ve">AB +ve</option>
	<option value="AB- ve">AB -ve</option>
	<option value="Bombay Blood Group">Bombay Blood Group</option>
</div>

</div> <p>. </p>

<div class="form-group">
<label for="nameField">Contents</label>
<textarea class="form-control input-sm" rows="4" cols="50"  name="contents" placeholder="Body of Message"></textarea>
</div>


<input type="submit" class="btn btn-success btn-block" value="Send" /> 
<!--<a href="insert_message_m_to_admin.php?uname=$uname&m_nm=$m_nm"> Send </a>-->
</form>
		</div>

		<div class="panel-footer text-center">
<?php			
echo "<a href='member.php'>Back To Panel</a>";
?>
		</div>

	</div>


<?php
include "footer.php";
?>