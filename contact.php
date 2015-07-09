<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="normalize.css">
	<link rel="stylesheet" type="text/css" href="common.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Allura' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="forms.css">
	<meta charset="utf-8">
	<meta name="description" content="Sunny Spot Holidays contact form, for all enquiries please email us.">
	<title>Contact Us</title>
</head>
<body>
	<?php require 'incl/header.php'; ?>
	<?php require 'incl/nav.php'; ?>
	<main class="contact">
		<section class="sec">
			<div class="container">
				<h2>Contact Us</h2>

				<form id="contactForm">

					<fieldset>
						<legend>Contact Us</legend>

						<div class="fname left">
							<label for="fname">First Name:</label>
							<input type="text" id="fname" name="fname"/>
							<span id="spanFname">* First name must contain two letters or more *</span>
						</div>

						<div class="lname right"> 
							<label for="lname">Last Name:</label>
							<input type="text" id="lname" name="lname">
							<span id="spanLname">* Last name must contain two letters or more *</span>
						</div>

						<div class="address left">
							<label for="address">Address:</label>
							<input type="text" id="address" name="address">
							<span id="spanAddress">* Address must contain ten characters or more *</span>
						</div>

						<div class="phone right">
							<label for="phone">Phone:</label>
							<input type="tel" id="phone" name="phone">
							<span id="spanPhone">* Phone number must be between 8 and 14 numbers long *</span>
						</div>

						<div class="mobile left">
							<label for="mobile">Mobile:</label>
							<input type="tel" id="mobile" name="mobile">
							<span id="spanMobile">* Mobile number must be between 10 and 12 numbers long *</span>
						</div>

						<div class="email right">
							<label for="email">Email:</label>
							<input type="email" id="email" name="email">
							<span id="spanEmail">* Please enter a valid email address *</span>
						</div>

						<div class="age left">
							<p>Age:</p>
							<span id="spanRadio">* Please select an age option *</span>

							<div>
								<label for="radio1">Under 18</label>
								<input type="radio" id="radio1" name="ages" value="Under 18">
							</div>

							<label for="radio2">19-25</label>
							<input type="radio" id="radio2" name="ages" value="19-25">

							<label for="radio3">26-35</label>
							<input type="radio" id="radio3" name="ages" value="26-35">

							<label for="radio4">35 or older</label>
							<input type="radio" id="radio4" name="ages" value="35 or older">
						</div>

						<div class="mailing right">
							<p>Would you like to join our mailing list?</p>
							<br>

							<label for="yes">Yes</label>
							<input type="checkbox" id="yes" name="yes" value="yes">

							<label for="no">No</label>
							<input type="checkbox" id="no" name="no" value="no">
						</div>
						<div class="comments">
						<p>Comments:</p>
						<textarea name="comments" cols="50" rows="10">Write a comment here...</textarea>
					</div>

						<input type="submit" id="submit" name="submit" value="Submit">

					</fieldset>
				</form>
			</div>
		</section>
	</main>
	<?php require 'incl/footer.php' ?>

	<script type="text/javascript" src="contact.js"></script>
</body>
</html>