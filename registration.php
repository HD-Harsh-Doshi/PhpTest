<?php
include "database.php";

if (isset($_POST['submit']) && !empty($_POST['submit'])) {
	$username  = $_POST['username'];
	$password  = md5($_POST['password']);
	$cpassword = sha1($_POST['cpassword']);
	$email	   = $_POST['email'];
	$reg_id    = $_POST['reg_id'];
	$course    = $_POST['course'];
       
   $sql= "INSERT INTO user_info (username,email,password,reg_id,course) VALUES ('$username','$email','$password','$reg_id','$course')";
    $db->query($sql);
    header("location: index.php");	
}
//else{
//	redirect("location: index.php");
//}
