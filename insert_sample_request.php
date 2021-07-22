<?php
include "header.php";
require "dbi.php";


//$pm_id=$_POST["pm_id"];
//echo $pm_id;
$from=$_POST["m_nm"];
//$from=$_POST["m_nm"];
//$to=$_POST["nm"];
$f_uname=$_POST["uname"];

$t_uname=$_POST["t_uname"];
$to_u=$_POST["t_nm"];
$mdate=$_POST["mdate"];
$quantity=$_POST["quantity"];
$blood_group=$_POST["blood_group"];
$contents=$_POST["contents"];
$f_status = '';

//echo $blood_group;

		$query="insert into request_sample(f_uname,from_u,t_uname,to_u,mdate,quantity,blood_group,contents) values('$f_uname','$from','$t_uname','$to_u','$mdate','$quantity','$blood_group','$contents')";
	
		mysqli_query($con,$query) or die(mysqli_error($con));
	
		if(mysqli_affected_rows($con) > 0)
		{
			//$remaining=$chat_limit-$cnt;
	
			echo "<div class='well text-center'><h2 style='color:green'>Success: Message Sent!</h2>";
			echo "<div class='well text-center'><h3 style='color:navy'>$to_u Staff will Contact You Soon...!</h3>";
			echo "<p><a href='index.php'>Back</a></p></div>";
		}
	//}
/*}	

	else 
	{
	 
		echo "<div class='well text-center'><h2 style='color:green'>You Can't Send Any Messages</h2>";
		echo "<div class='well text-center'><h2 style='color:red'>Limit Exceeded</h2>";
		//header("location:member.php");
		echo "<p><a href='member.php'>Back To Panel</a></p></div>";	
	}
	//}*/
/*}
else
{
	echo "<div class='well text-center'><h2 style='color:green'>Unable To Send Message</h2>";
	echo "<p><a href='member.php'>Back To Panel</a></p></div>";	
}*/

?>