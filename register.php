<?php
include "header.php";
?>
<style>
body{
	margin: 0;
	padding: 0;
	background : url(pic1.jpg); 
	background-size: cover;
	background-position: center;
	font-family: sans-serif;
background-color:gainsboro;
}
</style>
<center><h4><a href="register_hospital.php" style="color:maroon"> To Register as Hospital Member Click Here</a></h4></center>
<div class="panel panel-primary" style="max-width:300px;margin:auto">
		<div class="panel-heading">
			NEW RECEIVER REGISTRATION
		</div>

		<div class="panel-body panel-center">
	<form class="form" action="act_register.php" method="post">		


<div class="form-group">
<label for="nameField">UserName</label>
<input type="text" class="form-control input-sm" name="uname" required placeholder="User Name" />
</div>

<div class="form-group">
<label for="emailField">New Password</label>
<input type="password" class="form-control" name="npwd" required placeholder="New Password" />
</div>

<div class="form-group">
<label for="emailField">Confirm Password</label>
<input type="password" class="form-control" name="cpwd" required placeholder="Confirm Password" />
</div>

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
</div><br>
<input type="hidden" name="role" value="receiver" />

<input type="submit" class="btn btn-success btn-block" value="Register" /> 
</form>
		</div>

		<div class="panel-footer text-center">
			
<a href="login.php">Cancel</a>
		</div>

	</div>


<?php
include "footer.php";
?>




