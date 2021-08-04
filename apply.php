<?php
session_start();
if(!isset($_SESSION['user']))
{
header("Location: login.php");
}
?>
<?php
include_once("dbconnect.php");
$user_id=$_GET['uid'];
$scholarship_id=$_GET['id'];
$sts="Applied";
$result11=mysqli_query($conn,"select * from student where user_id='$user_id'");
			$rwo=mysqli_fetch_assoc($result11);
			$Cid=$rwo['college_id'];
if(mysqli_query($conn,"INSERT INTO scholarship_apply(scholarship_id,student_id,clg_id,status)VALUES('$scholarship_id','$user_id','$Cid','$sts')")){
	echo "<script>alert('Applied Successfully'); location.href='scholarship_apply.php'</script>";
}
?>