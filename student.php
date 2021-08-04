<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

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
		<h3 class="text-center"> Student Details </h3>
		



				<table align="center" border="1">
			<tr><td>Name</td><td>College</td><td>Address</td><td>percentage_of_mark</td><td>Religion</td><td>Caste</td></td></tr>
			
<?php 
include_once("dbconnect.php");


		$result1 = mysqli_query($conn, "SELECT * FROM student");

while($row1=mysqli_fetch_array($result1))
{
	$id=$row1['user_id'];
	$collegeid=$row1['college_id'];
	$percentage=$row1['percentage_of_mark'];
	$religion=$row1['religion'];
	$caste=$row1['caste'];
	$q2="select * from usertb where id='$id'";
	$result2=mysqli_query($conn,$q2);
	if($row2=mysqli_fetch_array($result2))
	{

		$name=$row2['name'];
		$email=$row2['email'];
		$email=$row2['email'];


	

	}



			$q3="select * from college where id='$collegeid'";
			//echo $q3;
	$result3=mysqli_query($conn,$q3);
	if($row3=mysqli_fetch_array($result3))
	{

$college=$row3['college_name'];
$address=$row3['address'];

	}

?>
<tr><td><?php echo $name;?></td>
	<td><?php echo $college;?></td>
		<td><?php echo $address;?></td>
			<td><?php echo $percentage;?></td>
				<td><?php echo $religion;?></td>
					<td><?php echo $caste;?></td>
</tr>

<?php


}


?>
	
								

		</table>
		<div class="clearfix"></div><center><br/><b><a class="linkA" href="admin.php">Back</a></b></center>
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
