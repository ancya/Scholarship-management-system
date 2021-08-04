<?php
session_start();
$logged=$_SESSION['logged'];
//echo "user".$logged;
$id=$_SESSION['id'];
$_SESSION['user']=$id;

?>
 
<!DOCTYPE HTML>
<html lang="en">
<head>
<title>Student</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Lecture a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- fonts -->
<link href="//fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Limelight" rel="stylesheet">
<!-- /fonts -->
<!-- css -->

<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/portfolio.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/jQuery.lightninBox.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/services.css" rel="stylesheet" type="text/css" media="all"/>
<link href="css/pogo-slider.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- /css -->
</head>
<body>
<!-- banner section -->
<section class="banner-w3ls">
	<div class="navbar-wrapper">
		<div class="container">
			<nav class="navbar navbar-inverse navbar-static-top">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html"><h1>Scholarship</h1></a>
				</div>
				<div id="navbar" class="navbar-collapse collapse menu--valentine">
					<ul class="nav navbar-nav navbar-right cl-effect-5">
						<li class="active"><a href="index.php" class="page-scroll"><span data-hover="Home">Home</span></a></li>
						<li><a href="logout.php" class="page-scroll"><span data-hover="login">Logout</span></a></li>
					</ul>
				</div>
			</nav>
		</div>
    </div>
	
	</div><!-- .pogoSlider -->	
</section>
<!-- /banner section -->
<!-- services section -->
<section class="service-w3ls" id="service">
	<div class="container">
		<h3 class="text-center"> Profile </h3>
		 <table border='1' align="center"><form method="POST"> 
		 	<?php
		 	include_once('dbconnect.php');
		 	$query="select * from usertb join student where usertb.id = student.user_id and usertb.id=".$_SESSION['user'];
			echo $_SESSION['user'];
		 	$result=mysqli_query($conn,$query);
		 	while($row=mysqli_fetch_assoc($result))
		 	{
		 		$_SESSION['student_global']=$row['id'];
			echo  "<tr><td>Name</td><td><input type='text' name='name' value='".$row['name']."'/></td></tr>
			<tr><td>username</td><td><input type='text' name='uname' value='".$row['username']."'/></td></tr><tr><td>password</td><td><input type='password' name='pass' value='".$row['password']."'/></td></tr>
					<tr><td>email</td><td><input type='email' name='email' value='".$row['email']."'/></td></tr>
						<tr><td>contact</td><td><input type='number' name='phonenumber' value='".$row['phonenumber']."'/></td></tr>
								<tr><td>address</td><td><textarea name='address'>".$row['address']."</textarea></td></tr>
								<tr><td>College</td><td><select name='clg' required>
				<option value='0' selected>Select College</option>";
				 include_once('dbconnect.php');
				$clgSelect = mysqli_query($conn, 'select * from college');
				while($row34=mysqli_fetch_assoc($clgSelect))
				{
					if($row['college_id']==$row34['id'])
						{echo "<option selected value='".$row34['id']."'>".$row34['college_name']."</option>";}
					else{
                 echo "<option value='".$row34['id']."'>".$row34['college_name']."</option>";
             }
                }
                  
              echo  
               "</select>
 </td></tr>
									<tr><td>percentage_of_mark</td><td><input type='text' name='percentage_of_mark' value='".$row['percentage_of_mark']."'/></td></tr>
										<tr><td>Religion</td><td><input type='text' name='religion' value='".$row['religion']."'/></td></tr>
											<tr><td>Caste</td><td><input type='text' name='caste' value='".$row['caste']."'/></td></tr>";
									
									}	
								?>
<tr><td></td><td><input name="update" type="submit" value="update"></tr></td>
		</table></form>
		<div class="clearfix"></div>
		<center><br/><b><a class="linkA" href="student_index.php">Back</a></b></center>
	</div>
</section>
<!-- /services section -->

<!-- copyright section -->
<div class="copyright-w3-agileits">
	<div class="container">
		<p class="copyright">© 2020 Lecture. All Rights Reserved | Design by <a href="#" target="_blank">Scholar</a></p>
	</div>
</div>
<!-- /copyright section -->
<!-- back to top -->
<a href="#0" class="cd-top">Top</a>
<!-- /back to top -->	
</body>
<!-- js files -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/SmoothScroll.min.js"></script>
<script src="js/modernizr.min.js"></script> 
<script src="js/jquery.easing.min.js"></script>
<script src="js/grayscale.js"></script>
<script src="js/top.js"></script>
<script>
$(window).scroll(function() {
  $(".slideanim").each(function(){
    var pos = $(this).offset().top;

    var winTop = $(window).scrollTop();
    if (pos < winTop + 600) {
      $(this).addClass("slide");
    }
  });
});
</script>
<script src="js/jarallax.js"></script>
<script type="text/javascript">
    /* init Jarallax */
    $('.jarallax').jarallax({
        speed: 0.5,
        imgWidth: 1366,
        imgHeight: 768
    })
</script>
<!-- js for portfolio -->
<script src='js/TweenMax.min.js'></script>
<script src="js/portfolio.js"></script>
<!-- /js for portfolio -->
<!-- js for gallery -->
<script src="js/jQuery.lightninBox.js"></script>
<script type="text/javascript">
	$(".lightninBox").lightninBox();
</script>
<!-- /js for gallery -->
<!-- js for banner -->
<script src="js/jquery.pogo-slider.min.js"></script>
<script src="js/main.js"></script>
<!-- /js for banner -->
<!-- /js files -->
</html>

<style>
table{
	color:#000;
	font-weight: bold
}
	</style>
<?php 
include_once("dbconnect.php");

if(isset($_POST["update"]))
{

 $f_name=$_POST['name'];
$college_id=$_POST['clg'];
$Username=$_POST['uname'];
$Password=$_POST['pass'];
$Email=$_POST['email'];	
$Contact=$_POST['phonenumber'];
$percentage_of_mark=$_POST['percentage_of_mark'];
$Religion=$_POST['religion'];
$Caste=$_POST['caste'];
$address=$_POST['address'];

if(mysqli_query($conn,"UPDATE usertb SET username='$Username',password='$Password',email='$Email',phonenumber='$Contact',name='$f_name' where id=".$_SESSION['user']))
{
	if(mysqli_query($conn,"UPDATE student SET college_id='$college_id',percentage_of_mark='$percentage_of_mark',religion='$Religion',caste='$Caste',address='$address' where id=".$_SESSION['student_global']))
		
		{echo "<script>alert('Success');window.location.href='profile.php'</script>";}
	else{echo "<script>alert('Error')</script>";}
}
}
?>