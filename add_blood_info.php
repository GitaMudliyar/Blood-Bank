<?php
include "header.php";
include "validate_hospital.php";
require "dbi.php";
//$h_uname=$_GET["uname"];
?>
<style>
th,td{
	padding:15px;
	text-align:left;
	border-bottom:1px solid DeepPink;
	<!--height:50px;-->
}

table{
	width:95%;
}


</style>
</head>

<head>
	<meta charset="utf-8">
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/opensans-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>

<?php 
//include "header.php"; 
//include "validate_member.php";
//echo $h_uname."Sdsd";
//echo $uname;
$query="select * from hospital_profile where h_uname='$uname'";

$result = mysqli_query($con,$query) or die(mysqli_error($con));

while($row=mysqli_fetch_array($result))
{
	//$cnt++;
	$hospital_name=$row["hospital_name"];
//	echo $hospital_name;
/*	$fname=$row["fname"];

	echo "<tr>";
	echo "<td align='center'>$cnt</td>";
	echo "<td>&nbsp;".$row["fname"]." ";*/
}
?>
<form action="insert_add_blood_info.php" method="post">

<div class='table-responsive' >
<table border='0'>
  
  <th>
	
	<div class="wizard-header">
<h2>
			            	
			            	<!--<span class="step-text">Educational and Career</span>-->
			            </h2>
			                	<div class="wizard-header">
									<h3 class="heading"><b>Blood Information</b></h3>
									<p>Please add blood information. 1 packet contains 250 ml of blood</p>
								</div>
								
								
								
			                		 <div class="form-row">
									<div class="form-holder form-holder-2">
								
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



</div>
</div><br>

<input type="hidden"  value="<?php echo $uname;?>" name="uname"/>
<input type="hidden"  value="<?php echo $hospital_name;?>" name="hospital_name"/>

	<div class="form-row">
									
									<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Number of Packets</legend>
											<input type="number" class="form-control" id="quantity" name="quantity" placeholder="NUMBER OF PACKETS" required>
										</fieldset>
									</div>
									</div>	
									
						<div class="form-row">
									<div class="form-holder form-holder-2">
										<fieldset>
											<legend>Date</legend>
											<input type="text" class="form-control" id="udt" name="udt" value= "<?php echo date("y-m-d");?>" placeholder="Date " readonly>
										</fieldset>
									</div>
									</div>			
									
							
							</div>		 <br>
							
							<a href=' hospital.php' class='btn active  btn-primary' style='background-color:green';>Back to Panel</font></a>
&nbsp;&nbsp;&nbsp;

<input type="submit" name="submit"  class='btn active  btn-danger' value="Save"  style="background-color:blue;"/>
	</th>	 
		 <!--<input type="submit" name="submit" value="Save and Next"  style="background-color:#2eb82e;"/>-->
  </div>
</div></th>
</form>
</body>
</html>
