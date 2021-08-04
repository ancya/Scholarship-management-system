<?php 
session_start();
include_once("dbconnect.php");
if(isset($_POST["submit"]))
{


 $username = $_POST['username'];
 $password = $_POST['password'];
 if($username=="admin"&&$password=="admin")
 {
 	?>


<script>alert('Login Success');window.location.replace('admin.php');</script>
 	<?php


 }

$result=mysqli_query($conn,"SELECT * FROM usertb WHERE username='$username' and password='$password'");
 $row=mysqli_fetch_assoc($result);
 $count=mysqli_num_rows($result);


 if($username=="admin")
 {
 	echo "<script>alert('invalid username')</script>";
 }
 else if($count==1)
{
	$type=$row['usertype'];
	if($type=="student")
	{
	$_SESSION['logged']=$username;
$_SESSION['id']=$row['id'];
	?>

<script>alert('Login Success');window.location.replace('student_index.php');</script>
	<?php
}

else
{
	$_SESSION['logged']=$username;

	?>

<script>alert('Login Success');window.location.replace('scholarship_officer.php');</script>
	<?php



}
}
else{
	?>

<script>alert('Login Failed');window.history.go(-1);</script>

	<?php

	
}

}


 ?>
 