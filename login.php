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

</style>
}
</style>

<div class="panel panel-primary" style="max-width:300px;margin:auto">
		<div class="panel-heading">
			Please Login
		</div>

		<div class="panel-body panel-center">
	<form class="form" action="act_login.php" method="post">		


<div class="form-group">
<label for="nameField">UserName</label>
<input type="text" class="form-control input-sm" name="uname" required placeholder="User Name" />
</div>

<div class="form-group">
<label for="emailField">Password</label>
<input type="password" class="form-control" name="pwd" required placeholder="Password" />
</div>

<input type="submit" class="btn btn-primary btn-block" value="Login" /> 
</form>
		</div>

		<div class="panel-footer text-center">
			
<a href="register.php">Register</a>
<!--<a href="register.php">Register Member</a>-->
		</div>

	</div>


<?php
include "footer.php";
?>




