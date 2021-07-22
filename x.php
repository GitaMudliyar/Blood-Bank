<?php
include "header.php";
require "dbi.php";
?>
<!DOCTYPE html>
<html lang="en">
<?php
//include "header.php";
?>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Blood Bank</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">

</head>
<style>



.button {
  border: none;
  color: white;
  padding: 5px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: DodgerBlue; 
  color: black; 
  <!--border: 2px solid #4CAF50;-->
}

.button1:hover {
  background-color: DodgerBlue;
  color: white;
}
.bg{
   background-image: url("img/back");
  background-repeat: no-repeat;
  background-size: cover;

}
.responsive {
  width: 1400px;
  height: 300px;
}

body{
	margin: 0;
	padding: 0; 
	background-size: cover;
	background-position: center;
	font-family: sans-serif;
	background-color:gainsboro;
	}
</style>
<!--</style>-->

<body>




<center><img src="images/crouse1.jpg" width="300" height="200"></center>

<br>
<div class="container" >

<div class="table-responsive" >
<table class="table table-hover table-bordered table-striped">

<th style="width:200px">
<center>
<form action="act_add_blood_info.php" method="post">

	<?php
//include "dbi.php";
/*
if(!empty($uname))
{
	$result = mysqli_query($con,"select * from share_story where uname='$uname'");

	if($row=mysqli_fetch_array($result))
	{
	$partner_name=$row["partner_name"];	
$share_your_story=$row["share_your_story"];

//$h_activities=$row["h_activities"];

	}
	else
	{
		$partner_name="";
		$share_your_story="";
		
	}

}

*/
?>

<!--<input type="hidden" name="uname" value="<?php //echo $uname; ?>" />-->
<!--<label for="partner">Partner's User Name</label>
    <input type="text" id="partner_name" name="partner_name" placeholder="Your Partner's User Name..">
-->

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

<label for="partner">Number of Packets</label>
    <input type="number" id="quantity" name="quantity" placeholder="1 packet contains 250 ml blood">

 <label for="u_date">Date</label>
    <input type="text" readonly   name="u_date"  value= "<?php echo date("y-m-d");?>" placeholder="Updated Date"><br>
	

<!--<textarea id="share_your_story" name="share_your_story" rows="10" cols="50">
  
  </textarea> -->
  <input type="submit" name="Submit" value="Submit"  style="background-color:#2eb82e;"/>
 
 <!--<a href="act_share_story.php">hii</a>-->
</form>

</center>

     
</th>
<!--</th>
</th>
</th>
<th>City</th>-->
<tr>
</table>
</div>
</div>

<script src="js/jquery.js"></script>

<script src="js/bootstrap.js"></script>

</html>