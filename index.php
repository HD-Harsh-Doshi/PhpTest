<?php
 require_once("database.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>User | registration</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
</head>
<body>
<!--php Engine-->
  
<!--End of php-->
<!--The header Part-->
<!--
<div class="container">
<div class="well">
    
</div>
</div>
-->
<!--End of the header Part-->

<!--The form-->
<div class="container">
<h3 class="text-center">Fill The following Form</h3>
    <h2 class="text-center text-danger"><img src="images/logo.png" alt="Logo" style="border-radius:200px; width:80px; height:80p;"> </h2>
<form action="registration.php" method="post">
<div class="form-group form-horizontal col-md-offset-2">
	<div class="form-group  col-md-10 ">
		<label for="username">Enter Username</label>
		<input type="text" name="username" placeholder="eg. Peter Daniel" class="form-control" required="required">
	</div>
	<div class="form-group  col-md-10 ">
		<label for="password">Enter Password</label>
		<input type="password" name="password" placeholder="eg. 123!kili" class="form-control" required="required">
	</div>
	<div class="form-group  col-md-10 ">
		<label for="password">Confirm Password</label>
		<input type="password" name="cpassword" placeholder="eg. 123!kili" class="form-control" required="required">
	</div>
	<div class="form-group  col-md-10 ">
		<label for="email">Enter Email</label>
		<input type="email" name="email" placeholder="eg. Petiibhuzah@gmail.com" class="form-control " required="required">
	</div>
	<div class="form-group  col-md-10 ">
		<label for="id">Enter Registration Id</label>
		<input type="text" name="reg_id" placeholder="eg. 160230220789" class="form-control " required="required">
	</div>
	<div class="form-group  col-md-10 ">
		<label for="course">Enter Course</label>
		<input type="text" name="course" placeholder="eg. Computer Eng." class="form-control " required="required">
	</div>
	<div class="form-group  col-md-7">
		<input type="submit" name="submit"  class="col-md-offset-3 form-control btn btn-warning btn block " value="Register">
	</div>
</div>
</form>
</div>
<!--End of the form-->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
</body>
</html>