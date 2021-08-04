<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

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
		<h3 class="text-center"> College </h3>
		<table align="center"><form method="POST"
			<tr><td>College_name</td><td><input type="text" name="college_name"></td></tr>
								<tr><td>Address</td><td><textarea name="Address" cols="50" rows="7"></textarea></td></tr>
								
											<tr><td></td><td><input name="Add_college" type="submit" value="Add_college"></td></tr>
								

		</table></form><center><br/><b><a class="linkA" href="admin.php">Back</a></b></center>
		<br/>
		<table border="1" align="center">	<tr><td>college name</td><td>Address</td></tr>
<?php 
include_once("dbconnect.php");


		$result1 = mysqli_query($conn, "SELECT * FROM college");

while($row1=mysqli_fetch_array($result1))
{

?>
<tr><td><?php echo $row1['college_name'];?></td>
	<td><?php echo $row1['address'];?></td>
</tr>

<?php


}


?>

		
	</table>
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

<style>
table{
	color:#000;
	font-weight: bold
}
	</style>}
<?php 
include_once("dbconnect.php");
if(isset($_POST["Add_college"]))
{

 $f_name=$_POST['college_name'];
 $add=$_POST['Address'];


	if(mysqli_query($conn,"INSERT INTO college(college_name,Address) VALUES('$f_name','$add')"))
		{echo "<script>alert('Success');window.location.href='admin.php'</script>";}
	else{echo "<script>alert('Error')</script>";}

}
?>