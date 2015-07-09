<?php

	require 'incl/server_connect.php';

?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="normalize.css">
	<link rel="stylesheet" type="text/css" href="common.css">
	<link rel="stylesheet" type="text/css" href="home.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Allura' rel='stylesheet' type='text/css'>
	
	<link rel="stylesheet" href="Nivo-Slider-master/nivo-slider.css" type="text/css" media="screen">
	<link rel="stylesheet" href="Nivo-Slider-master/themes/default/default.css" type="text/css" media="screen">
	<meta charset="utf-8">
	<meta name="description" content="Sunny Spot Holidays offers Cabins and Camping for all families. Located on the North Coast of NSW our facilities are affordable and set in a beautiful location.">
	
	<title>Sunny Spot Holidays</title>
</head>
<body>
	<?php require 'incl/header.php'; ?>

	<?php require 'incl/nav.php'; ?>

	<div class="hero">
		<div class="container">
			<div class="slider-wrapper theme-default">
				<div id="slider" class="nivoSlider">
					<img src="images/sail2.png" alt="sailboat 2">
					<img src="images/sail3.png" alt="sailboat 3">
					<img src="images/vista.png" alt="view of a beach">
					<img src="images/beach.png" alt="view of another beach">
				</div>
			</div>
		</div>
	</div>

	<div class="content">
		<div class="container cf">
			
			<aside>
				<div class="look">
					Looking for a relaxing holiday?
				</div>

				<div class="facts">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam nulla risus, vulputate non sollicitudin vitae, euismod a nisl.</p>
					<p> Nulla facilisi. Aenean erat urna, accumsan ac vehicula et, venenatis id ipsum. Suspendisse est felis, hendrerit et dictum non, scelerisque eu purus. Cras adipiscing posuere elit, eget consectetur sem consectetur sit amet.</p>
					<p class="intfacts"><a href="#">Interesting Facts</a></p>
				</div>
			</aside>

			<section class="squares">
			<a href="#">
				<div class="find information-tile">
					<p class="circle"></p>
					<h2>Find Us</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
				</div>
			</a>

			<a href="accommodation.php">
				<div class="accom information-tile">
					<p class="circle"></p>
					<h2>Accommodation</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
				</div>
			</a>

			<a href="#">
				<div class="camp information-tile">
					<p class="circle"></p>
					<h2>Camping</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
				</div>
			</a>

			<a href="#">
				<div class="todo information-tile">
					<p class="circle"></p>
					<h2>Things to do</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
				</div>
			</a>

			<a href="#">
				<div class="climate information-tile">
					<p class="circle"></p>
					<h2>Climate</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
				</div>
			</a>

			<a href="#">
				<div class="contact information-tile">
					<p class="circle"></p>
					<h2>Contact us</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
				</div>
			</a>
			</section>
		</div>
	</div>

<?php require 'incl/footer.php' ?>

<script type="text/javascript" src="Nivo-Slider-master/demo/scripts/jquery-1.9.0.min.js"></script>
<script type="text/javascript" src="Nivo-Slider-master/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider( {
			  effect: 'fade',
			  animSpeed: 500,
			  pauseTime: 4000
		});
    });
    </script>

</body>
</html>