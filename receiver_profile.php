<?php
include "header.php";

include "validate_receiver.php";
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
			Receiver Profile
		</div>

		<div class="panel-body panel-center">
		<?php
include "dbi.php";

if(!empty($uname))
{
	$result = mysqli_query($con,"select * from receiver_profile where r_uname='$uname'");

	if($row=mysqli_fetch_array($result))
	{
		
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
//$udt=date("Y-m-d");
	}
	else
	{
		$fn=""; $ln=""; $age=""; $gender=""; $aadhar_id=""; $phone=""; $e_email=""; $address=""; $city=""; $state="";
	}

}


?>
	<form class="form" action="update_rprofile.php" method="post">		



<div class="form-group">
<label for="nameField">First Name</label>
<input type="text" class="form-control input-sm" required value="<?php echo $fn;?>" name="fname" placeholder="First Name" />
</div>

<div class="form-group">
<label for="nameField">Last Name</label>
<input type="text" class="form-control input-sm" required value="<?php echo $ln;?>" name="lname" placeholder="Last Name" />
</div>

<div class="form-group">
<label for="nameField">Age</label>
<input type="text" class="form-control input-sm" value="<?php echo $age;?>" name="age" placeholder="Age" />
</div>

<div class="form-group">
<label for="nameField">Gender</label>
<input type="text" class="form-control input-sm" value="<?php echo $gender;?>" name="gen" placeholder="Gender" />
</div>


<div class="form-group">
<label for="nameField">Aadhar Id</label>
<input type="text" class="form-control input-sm" required value="<?php echo $aadhar_id;?>" name="aadhar_id" maxLength=12 placeholder="Aadhar Card Details" />
</div>


<div class="form-group">
<label for="nameField">Phone</label>
<input type="text" class="form-control input-sm" required value="<?php echo $phone;?>" name="phone" maxLength=10 placeholder="phone" />
</div>

<div class="form-group">
<label for="nameField">Email</label>
<input type="text" class="form-control input-sm" required value="<?php echo $e_email;?>" name="e_email" placeholder="E-mail" />
</div>

<div class="form-group">
<label for="nameField">Address</label>
<input type="text" class="form-control input-sm" value="<?php echo $address;?>" name="address" placeholder="Address" />
</div>

<div class="form-group">
<label for="nameField">City</label>
<input type="text" class="form-control input-sm" value="<?php echo $city;?>" name="city" placeholder="City" />
</div>

<div class="form-group">
<label for="nameField">State</label>
<input type="text" class="form-control input-sm" value="<?php echo $state;?>" name="state" placeholder="State" />
</div>


<input type="submit" class="btn btn-warning btn-block" value="Update Profile" /> 
</form>
		</div>

		<div class="panel-footer text-center">
			
<a href="receiver.php">Back To Panel</a>
		</div>

	</div>


<?php
include "footer.php";
?>




