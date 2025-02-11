<!DOCTYPE html>
<head>
	<!-- Links: CSS and others -->
	<link rel="icon"  href="images/logo3.png" type="image/x-icon">
	<link href='http://fonts.googleapis.com/css?family=Playfair+Display'
	 rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="foundation-5.3.3/css/foundation.css" />
	<link rel="stylesheet" href="foundation-5.3.3/css/normalize.css" />
	<link rel="stylesheet" href="font-awesome-4.3.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="fonts/et-line-font/et-line-font/style.css" />	
	<link rel="stylesheet" type="text/css" href="stylesheets/style.css" />
	<link href='http://fonts.googleapis.com/css?family=Abril+Fatface' rel='stylesheet'
		type='text/css'>
	<link rel="stylesheet" type="text/css" href="slick-1.3.13/slick/slick.css">

	<!-- Scripts -->
	<script src="foundation/js/vendor/modernizr.js"></script>

	<!-- Defining Meta Data -->	
	<!-- Responsive screen:setting view point -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Character set -->
	<meta charset="UTF-8">
	<!-- Description of the website -->
	<meta name="description" content="Action For The Elderly UgandA">
	<!-- Keywords -->
	<meta name="keywords" content="needy children, needy women, Jehovah, the aging">
	<!-- Author -->
	<meta name="author" content="Novus Terra.">
	
	<!-- Site Title -->
	<title>Action For Elderly - Uganda</title>
</head>
<style>
	body {		
	  padding: 0;
	    background: url(images/back-1.jpg) no-repeat center center fixed;
	    -webkit-background-size: cover;
	    -moz-background-size: cover;
	    -o-background-size: cover;
	    background-size: cover;
	}
</style>
	<!-- Navigation section -->
	<div class="contain-to-grid sticky small-12" id="header"
		 style="">
	  
	</div>	
	<!-- End of navigation section -->
	<!-- Header section -->	
	<div class="large-12 columns header" style="background-color:;">
		<div class = "large-12 columns" style = "padding-bottom:10px;margin-top:0px;">
			<div class = "large-12" style = "padding:0;margin-top:0px;">			
				<!-- <div class = "large-6 columns" style = "padding:0;"> -->
					<!-- <div class = "row"> -->
						<div class = "large-10 medium-10 small-12 columns">
							<a href="index.php">
								<img src="images/logo_1.jpg"
								 style="width: 200px;margin: 20px;
								 height: 200px;border-radius:50%;">
							</a>
							<div>
								<nav class="top-bar" data-topbar role="navigation" data-options="sticky" 
									style="border-radius:10px;">
							     <ul class="title-area">
							    <li class="name">						      
							    	<h6>&nbsp;</h6>
							    </li>
							     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
							    <li class="toggle-topbar menu-icon"><a href="#">
							    	<span style="color:#fff;">Menu</span></a></li>
							  </ul>
							  <section class="top-bar-section">
							    <!-- Right Nav Section -->
							    <!-- Left Nav Section -->
							    <ul>
								    <li style="margin-left:12px;">
								      	<a href="index.php"
								      	class="<?php if($_SESSION['CURRENT_PAGE'] == 'HOME') echo 'active';?>">
								      	HOME</a>
								    </li>
								    <li style="margin-left:12px;">
								      	<a href="about.php"  class="
								      	<?php if($_SESSION['CURRENT_PAGE'] == 'ABOUT') echo 'active';?>">
								      	<b>ABOUT</b></a>
								    </li>
								    <li style="margin-left:12px;">
								      	<a href="team.php"  class="
								      	<?php if($_SESSION['CURRENT_PAGE'] == 'ABOUT') echo 'active';?>">
								      	<b>TEAM</b></a>
								    </li>
								     <li style="margin-left:12px;">
								      	<a href="gallery.php" class="
								      	<?php if($_SESSION['CURRENT_PAGE'] == 'SERVICES') echo 'active';?>">
								      	<b>SERVICES AND ACTIVITIES</b></a>
								    </li>
								     <li style="margin-left:12px;">
								      	<a href="join.php" class="
								      	<?php if($_SESSION['CURRENT_PAGE'] == 'JOIN') echo 'active';?>">
								      	<b>VOLUNTEER</b></a>
								    </li>
								     <li style="margin-left:12px;">
								      	<a href="index.php" class="
								      	<?php if($_SESSION['CURRENT_PAGE'] == 'STORY') echo 'active';?>">
								      	<b>STORIES</b></a>
								    </li>
								    <li style="margin-left:12px;">
								      	<a href="contact.php"
								      	class="<?php if($_SESSION['CURRENT_PAGE'] == 'CONTACT'    )
								  		 echo 'active';?>" > <b>CONTACT US</b></a>
								    </li>
							    </ul>
							  </section>
							  </nav>  
							</div>
							
						</div>
						<div class = "large-2 medium-2 small-12 columns">
							<a href="support.php">
							<button style = "background-color:#FFF;
							color:red;border:1px solid red;
							float:right;margin-top:100px;
								color:#FFF;" class = "radius tiny">
								<b style = "color:red;">DONATE NOW</b></button>
							</a>
						</div>
					<!-- </div> -->
				<!-- </div> -->
			</div>
		</div>
	</div>
	<!-- End of header section -->