<?php
include "header.php";
//require "dbi.php";
?>
<!DOCTYPE html>

<?php
//include "header.php";
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea ,input[type=email] {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;

 background-color: Ivory;

}
html{
	background:url(images_try/f1.jpg);
    <!--
	background:url(images/back.jpg);
	background-color: #fc0373;-->
  
background-size:cover;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: LightGreen;
}

.container {
  border-radius: 5px;
  background-color: MistyRose;
  <!--background-color: MistyRose;-->
  padding: 20px;
  <!--background-image:url('images/bg4.jpg');
background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;-->

}
</style>
</head>
<body style="background:url(images/f2.jpg);background-repeat: no-repeat;background-attachment: fixed;background-size: cover;">

<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Feedback Form</h2>

<div class="container">
  <form action="act_feedback.php" method="post">
  
  <input type="hidden" id="fid" name="fid">
  
    <label for="fname"><br>First Name</label>
    <input type="text" id="fname" name="fname" placeholder="Your first name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lname" placeholder="Your last name..">
	


    <label for="email">Enter your email:</label>
	<br>
<input type="email" id="e_mail" name="e_mail" placeholder="Your email..">
<br>

	 <label for="u_date">Date</label>
    <input type="text" readonly   name="u_date"  value= "<?php echo date("y-m-d");?>" placeholder="Updated Date"><br>
	

<br>
    <label for="content">Content</label>
    <textarea id="content" name="content" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>

</body>
</html>
