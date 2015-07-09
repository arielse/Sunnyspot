<?php
	session_start();
	
	if(!($_SESSION['authorised'])) {
		header("Location:../index.php"); //this will send users to home page.
		exit();
	}
?>

<!doctype html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="normalize.css">
	<link rel="stylesheet" type="text/css" href="admin_nav.css">
	<link href='http://fonts.googleapis.com/css?family=Lato:100,400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="../forms.css">
	<title>Insert table</title>
	<meta charset="utf-8">
</head>

<body>
	<?php require 'incl/admin_nav.php'; ?>
<main>

	<?php
		if(array_key_exists('notice', $_GET)) {
			?>
			<p class="flash"><?= $_GET['notice'] ?></p>
			<?php
		}
	?>

	<form id="update" method="post" action="admin_insert_process.php" >

		<fieldset>
			<legend>Enter New Cabin Details</legend>

			<label for="type">Cabin Type:</label>
			<input type="text" id="type" name="cabinType"/>
			<span id="spanType">* Cabin Type cannot be left blank *</span>

			<label for="description">Cabin Description:</label>
			<textarea id="cabinDescription" name="cabinDescription" rows="4" cols="40"></textarea>
			<span id="spanDescription">* Cabin Description cannot be left blank *</span>

			<label for="ppn">Price Per Night:</label>
			<input type="text" id="ppn" name="pricePerNight"/>
			<span id="spanPerNight">* Price Per Night cannot be left blank *</span>
			<span id="spanPpnValue">* Price Per Night must be between $50 and $200 *</span>
			<span id="spanNightVSWeek">* Price Per Night must be lower than Price Per Week *</span>

			<label for="ppw">Price Per Week:</label>
			<input type="text" id="ppw" name="pricePerWeek" />
			<span id="spanPerWeek">* Price Per Week cannot be left blank *</span>
			<span id="spanPpwValue">* Price Per Week must be between $200 and $2000 *</span>

			<label for="photo">Photo:</label>
			<input type="text" id="photo" name="photo" />
			<span id="spanPhoto">* Photo cannot be left blank *</span>
		</fieldset>
		

			

		<input type="submit" id="submit" name="submit" value="Save Changes">


		
	</form>
</main>

<script type="text/javascript" src="update2.js"></script>
</body>

</html>