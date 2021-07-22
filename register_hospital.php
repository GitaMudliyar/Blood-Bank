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

<div class="panel panel-primary" style="max-width:300px;margin:auto">
		<div class="panel-heading">
			NEW HOSPITAL MEMBER REGISTRATION
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

<input type="hidden" name="blood_group" value=" " />
<input type="hidden" name="role" value="hospital" />

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




