
<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<style>
	select{
		color: #000 !important;
		background-color: #fff !important;
		border: 1px solid #000 !important;
		border-radius: 0px !important;
		padding:0px !important;
		margin:0px !important;
	}
</style>
<!DOCTYPE HTML>
<html lang="en">
<head>
<title>Add Scholarship Officer</title>
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
		<h3 class="text-center"> Add_Scholarshipofficer </h3>
		<table align="center"><form method="POST">
			<tr><td>Name</td><td><input type="text" name="name"/></td></tr>
			<tr><td>Username</td><td><input type="text" name="uname"/></td></tr>
			<tr><td>Password</td><td><input type="password" name="pass"/></td></tr>
			<tr><td>Email</td><td><input type="email" name="email"/></td></tr>
			<tr><td>Contact</td><td><input type="number" name="mob"/></td></tr>
			<tr><td>designation</td><td><input type="text" name="designation" placeholder="designation" /></td></tr>
			<tr><td>college</td><td><select name="clg">
									<?php 
									include_once 'dbconnect.php';
									$qry1=mysqli_query($conn, "select * from college");
									while($row1=mysqli_fetch_assoc($qry1))
									{
echo "<option value='".$row1['id']."'>".$row1['college_name']."</option>";
									}
									?>
								</select></td></tr>
								<tr></tr>
								<tr> <td> </td><td><input  name="add"type="submit" value="Add"/></td></tr>

								
								

		</table></form>
		<div class="clearfix"></div>
		<center><br/><b><a class="linkA" href="admin.php">Back</a></b></center>
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
	</style>}
<?php 
include_once("dbconnect.php");
if(isset($_POST["add"]))
{

 $f_name=$_POST['name'];
 $des=$_POST['designation'];
$college_id=$_POST['clg'];
$Username=$_POST['uname'];
$Password=$_POST['pass'];
$Email=$_POST['email'];	
$Contact=$_POST['mob'];
$usertype= "so";
if(mysqli_query($conn,"insert into usertb(username,password,email,name,usertype,phonenumber) values('$Username','$Password','$Email','$f_name','$usertype','$Contact')"))
{
	$result1=mysqli_query($conn,"select * from usertb order by id desc limit 1");
	$rwo=mysqli_fetch_assoc($result1);
	$Uid=$rwo['id'];
	if(mysqli_query($conn,"INSERT INTO scholarshipofficer(designation,college_id,user_id) VALUES('$des','$college_id','$Uid')"))
		{
			
		echo "<script>alert('Success');window.location.href='admin.php'</script>";}
	else{echo "<script>alert('Error')</script>";}
}
}
?>