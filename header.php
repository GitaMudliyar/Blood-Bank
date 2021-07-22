<?php
session_start();

$uname = isset($_SESSION["uname"])?$_SESSION["uname"]:"";
$role = isset($_SESSION["role"])?$_SESSION["role"]:"Guest";

?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Blood Bank</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link href="css/styles.css" rel="stylesheet">

<style>
body{
background-color:gainsboro;
}

</style>
</head>
<body>


    <div class="navbar navbar-inverse">
	<div class="container-fluid">
	<div class="navbar-header">
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar-content">
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		</button>

	<a class="navbar-brand active" href="">Blood Bank</a>
	</div>
		<div class="collapse navbar-collapse" id="mynavbar-content">
			<ul class="nav navbar-nav">
				<li class><a href="index.php">Home</a></li>
				<!--<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown"> About Us<b class="caret"></b></a>
					<!--<ul class="dropdown-menu">
						<li><a href="#">Board of Members</a></li>
						<li><a href="#">Developers Team</a></li>
						<li><a href="#">Designing Team</a></li>
						<li class="divider"></li>
						<li><a href="#">Login</a></li>
						<li><a href="#">Registration</a></li>
					</ul>
				</li>-->
				
				<!--<li><a href="about_us.php">About Us</a></li>-->
				<li><a href="available_samples.php">Available Blood Samples</a></li>
				<li><a href="feedback.php">Feedback</a></li>
				<li><a href="register.php">New Registration</a></li>

							<li>

<?php

		if($role=="receiver")
		{
			echo "<li><a href='receiver.php'>Receiver</a></li>	";
		}
		else if($role=="hospital")
		{
			echo "<li><a href='hospital.php'>Hospital</a></li>";
		}


		if(empty($uname))
			echo "<li> <a style='background:Khaki' href='login.php'><b>Login</b></a></li>	";
		
		else
		{
			
			echo "<li><a style='background:khaki' href='logout.php'>Logout $uname</a></li>";
		}
		?>
		
		
			</li>
				
				
			</ul>	
		</div>
	</div>
</div>