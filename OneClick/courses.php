<!DOCTYPE HTML>
<!--
	Aesthetic by gettemplates.co
	Twitter: http://twitter.com/gettemplateco
	URL: http://gettemplates.co
-->
<?php
$con = mysqli_connect("localhost", "root", "", "oneclick") or die(mysqli_error($con));

//to get no. of rows...
//$total_rows_fetched = mysqli_num_rows($select_query_result);
//echo $total_rows_fetched;
//to print those rows..

?>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Courses &mdash; OneClick</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by GetTemplates.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="GetTemplates.co" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Bootstrap DateTimePicker -->
	<link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">



	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style3.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	<style>
	.courses-view {
		background: orange;
		padding-top: 100px;
		width: 70%;
		margin: auto;
	}

	.eighty {
		width: 90%;
		margin: auto;
		margin-top: 20px;
		font-size: 18px;
		position: relative;
	}

	.title {
		font-family: "Kaushan Script", cursive !important;
		font-size: 30px;
		color: grey;
		padding-bottom: 20px;
	}

	</style>

	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">

	
	<!-- <div class="page-inner"> -->
			<nav class="gtco-nav" role="navigation">
					<div class="gtco-container">
						
						<div class="row">
							<div class="col-sm-4 col-xs-12">
								<div id="gtco-logo"><a href="index.php">OneClick  <em>.</em></a></div>
							</div>
							<div class="col-xs-8 text-right menu-1">
								<ul>
									<li><a href="index.php">Home</a></li>
									<li class="has-dropdown">
										<a>Courses</a>
										<ul class="dropdown">
											<li><a href="courses.php?type=science">Science</a></li>
											<li><a href="courses.php?type=arts">Arts</a></li>
											<li><a href="courses.php?type=engineering">Engineering</a></li>
											<li><a href="courses.php?type=management">Management</a></li>
											<li><a href="courses.php?type=diploma">Diploma</a></li>
										</ul>
									</li>
									<li><a href="career.html">Career Guidance</a></li>
									<li><a href="contact.php">Contact</a></li>
									<li class="btn-cta"><a href="wannahelp.html"><span>Want to Help?</span></a></li>
								</ul>	
							</div>
						</div>
						
					</div>
				</nav>
	
	<div class="courses-view">
		
		<div class="eighty">
		<?php 
			if ($_GET['type'] == "science"){
			$select_query = "SELECT name, details FROM ".$_GET['type'];
			$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
			echo '<span class="title"><CENTER>COURSES RELATED TO SCIENCE..</CENTER></span><br>';
			while ($row = mysqli_fetch_array($select_query_result)){ 
				echo '<span style="color: white;"><b>'.$row['name'].'</b></span><br>';
			echo $row['details'].'<br><br><hr>';
			
			 	}
			}
		?>  
		
		<?php 
			if ($_GET['type'] == "arts"){
			$select_query = "SELECT name, details FROM ".$_GET['type'];
			$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
			echo '<span class="title"><CENTER>COURSES RELATED TO ARTS..</CENTER></span><br>';
			while ($row = mysqli_fetch_array($select_query_result)){ 
				echo '<span style="color: white;"><b>'.$row['name'].'</b></span><br>';
			echo $row['details'].'<br><br><hr>';
			
			 	}
			}
		?> 

		<?php 
			if ($_GET['type'] == "management"){
			$select_query = "SELECT name, details FROM ".$_GET['type'];
			$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
			echo '<span class="title"><CENTER>COURSES RELATED TO MANAGEMENT..</CENTER></span><br>';
			while ($row = mysqli_fetch_array($select_query_result)){ 
				echo '<span style="color: white;"><b>'.$row['name'].'</b></span><br>';
			echo $row['details'].'<br><br><hr>';
			
			 	}
			}
		?> 

		<?php 
			if ($_GET['type'] == "diploma"){
			$select_query = "SELECT name, details FROM ".$_GET['type'];
			$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
			echo '<span class="title"><CENTER>COURSES RELATED TO DIPLOMA..</CENTER></span><br>';
			while ($row = mysqli_fetch_array($select_query_result)){ 
				echo '<span style="color: white;"><b>'.$row['name'].'</b></span><br>';
			echo $row['details'].'<br><br><hr>';
			
			 	}
			}
		?> 

		<?php 
			if ($_GET['type'] == "engineering"){
			$select_query = "SELECT name, details FROM ".$_GET['type'];
			$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
			echo '<span class="title"><CENTER>COURSES RELATED TO ENGINEERING..</CENTER></span><br>';
			while ($row = mysqli_fetch_array($select_query_result)){ 
				echo '<span style="color: white;"><b>'.$row['name'].'</b></span><br>';
			echo $row['details'].'<br><br><hr>';
			
			 	}
			}
		?> 

		</div>
	</div>

	<div id="gtco-subscribe">
		<div class="gtco-container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2 class="cursive-font">Subscribe</h2>
					<p>To get updates about new Scholarship Schemes.</p>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<form class="form-inline" action="connect3.php" method="GET">
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label for="email" class="sr-only">Email</label>
								<input type="email" name="email" class="form-control" id="email" placeholder="Your Email">
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<button type="submit" class="btn btn-default btn-block">Subscribe</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<footer id="gtco-footer" role="contentinfo" style="background-image: url(images/img_bg_1.jpg)" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row row-pb-md">

				

				
				<div class="col-md-12 text-center">
					<div class="gtco-widget">
						<h3>Get In Touch</h3>
						<ul class="gtco-quick-contact">
							<li><a href="https://www.truecaller.com/"><i class="icon-phone"></i> +91 999 999 999</a></li>
							<li><a href="https://accounts.google.com"><i class="icon-mail2"></i> thestillvariables@gmail.com</a></li>
							<li><a href="contact.php"><i class="icon-chat"></i> Live Chat</a></li>
						</ul>
					</div>
					<div class="gtco-widget">
						<h3>Get Social</h3>
						<ul class="gtco-social-icons">
							<li><a href="https://twitter.com/"><i class="icon-twitter"></i></a></li>
							<li><a href="https://facebook.com"><i class="icon-facebook"></i></a></li>
							<li><a href="https://www.linkedin.com/"><i class="icon-linkedin"></i></a></li>
							
						</ul>
					</div>
				</div>

				<div class="col-md-12 text-center copyright">
					<p><small class="block">&copy; OneClick. All Rights Reserved.</small> 
						<small class="block">Designed by <a>The Still Variables</a> </small></p>
				</div>

			</div>

			

		</div>
	</footer>
	<!-- </div> -->

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>

	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>

	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	
	<script src="js/moment.min.js"></script>
	<script src="js/bootstrap-datetimepicker.min.js"></script>


	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>
