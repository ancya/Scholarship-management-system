<?php
session_start();
$logged=$_SESSION['logged'];
echo "user".$logged;
$id=$_SESSION['id'];

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
					<a class="navbar-brand" href="index.html"><h1>Lecture</h1></a>
				</div>
				<div id="navbar" class="navbar-collapse collapse menu--valentine">
					<ul class="nav navbar-nav navbar-right cl-effect-5">
						<li class="active"><a href="index.php" class="page-scroll"><span data-hover="Home">Home</span></a></li>
						<li><a href="logout.php?logout">LOGOUT</a></li>
					</ul>
				</div>
			</nav>
		</div>
    </div>
    
	<div class="pogoSlider" id="js-main-slider">
		<div class="pogoSlider-slide" data-transition="barRevealDown" data-duration="1000"  style="background-image:url(images/banner1.jpg);">
			<div class="pogoSlider-slide-element">
				<h3>Scholarship management</h3>
			</div>
		</div>
		
		<div class="pogoSlider-slide" data-transition="barRevealDown" data-duration="1000"  style="background-image:url(images/banner2.jpg);">
			<div class="pogoSlider-slide-element">
				<h3>Scholarship Management</h3>
			</div>
		</div>
		<div class="pogoSlider-slide" data-transition="barRevealDown" data-duration="1000"  style="background-image:url(images/banner3.jpg);">
			<div class="pogoSlider-slide-element">
				
				<h3>Scholarship Management</h3>
			</div>
		</div>	
			<div class="pogoSlider-slide-element">
				<h3>Scholarship Management</h3>
			</div>
		</div>
	</div><!-- .pogoSlider -->	
</section>
<!-- /banner section -->
<!-- services section -->
<section class="service-w3ls" id="service">
	<div class="container">
		<h3 class="text-center slideanim"> Student</h3>
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 serv-w3layouts">
			<div class="ch-grid slideanim">
				<div>
					<div class="ch-item ch-img-1">
						<div class="ch-info">
							<h3><a href="scholarship_apply.php">Scholarship </a></h3>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 serv-w3layouts">
			<div class="ch-grid slideanim">
				<div>
					<div class="ch-item ch-img-2">
						<div class="ch-info">
							<h3><a href="profile.php">Profile</a></h3>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 serv-w3layouts">
			<div class="ch-grid slideanim">
				<div>
					<div class="ch-item ch-img-4">
						<div class="ch-info">
							<h3><a href="feedback.php">Feedback</a></h3>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 serv-w3layouts">
			<div class="ch-grid slideanim">
				<div>
					<div class="ch-item ch-img-4">
						<div class="ch-info">
							<h3><a href="logout.php?logout">logout</a></h3>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
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