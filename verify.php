
<?php
include_once("dbconnect.php");
$user_id=$_GET['student'];
$scholarship_id=$_GET['scholar'];
$sts="Verified";
$result11=mysqli_query($conn,"select * from student where user_id='$user_id'");
			$rwo=mysqli_fetch_assoc($result11);
			$Cid=$rwo['college_id'];
if(mysqli_query($conn,"update scholarship_apply set status='$sts' where student_id='$user_id' and scholarship_id='$scholarship_id'")){
	echo "<script>alert('Verified Successfully'); location.href='scholarship_officer.php'</script>";
}
?>