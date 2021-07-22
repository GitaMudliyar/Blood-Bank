<?php
include "header.php";

require "validate_hospital.php";
//$uname=$_POST["uname"];
?>


<h1>Welcome Hospital Member</h1> <?php //echo $uname; ?>
  <div class="list-group">
	<a href="hospital_profile.php" class="list-group-item">Update Profile</a>
	<a href='add_blood_info.php' class="list-group-item">Add Blood Information</a>
	<a href="select_request_sample.php" class="list-group-item">View All Blood Sample Request</a>
	<a href="feedback_select.php" class="list-group-item">View All Feedback</a>
	<!--<a href="w_view_complaints.php" class="list-group-item">View New Complaint(s)</a>
	<a href="w_view_complaint_history.php" class="list-group-item">Complaint History</a>
	<a href="w_send_admin.php" class="list-group-item">Message to Admin</a>
	<a href="w_received_messages.php" class="list-group-item">Inbox</a>
	<a href="w_sent_messages.php" class="list-group-item">Outbox</a>-->
	
  </div>


<?php
include "footer.php";
?>




