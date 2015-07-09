<?php 

	session_start();
	
	if(!($_SESSION['authorised'])) {
		header("Location:../index.php"); //this will send users to home page.
		exit();
	}

	



require_once 'incl/server_connect.php';

$query = 'select * from tblCabins';

$result = mysqli_query($link, $query);

if(!$result) {
	exit("Query error: " . mysqli_error($link));
}


$cabins = mysqli_fetch_all($result, MYSQLI_ASSOC);

function getCabinInclusions($link, $id) {
	$query = "SELECT inclID, inclusionName, tblCabins_cabinID
		FROM tblInclusions, tblCabinInc
		WHERE tblInclusions.inclID = tblCabinInc.tblInclusions_InclID
		AND tblCabinInc.tblCabins_cabinID = $id";

	$result = mysqli_query($link, $query);

	$inclusions = mysqli_fetch_all($result, MYSQLI_ASSOC);

	return $inclusions;
}


?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="normalize.css">
	<link href='http://fonts.googleapis.com/css?family=Lato:100,400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="admin_nav.css">
	<link rel="stylesheet" type="text/css" href="admin_home.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
	<meta charset="utf-8">
	<title>Accomodation</title>
</head>
<body>

	<?php require 'incl/admin_nav.php'; ?>

	<main>
		<?php

		foreach ($cabins as $cabin) {
			$inclusions = getCabinInclusions($link, $cabin['cabinID']);
			?>
				<article class="cabin">
					<div class="cabin-image" style="background-image: url(images/<?= $cabin['photo'] ?>);">
					</div>
					<div class="cabinfo">
						<div class="nameinfo">
							<h3><?= $cabin['cabinType'] ?></h3>
							<p><?= $cabin['pricePerNight'] ?> per night / <?= $cabin['pricePerWeek'] ?> per week</p>
						</div>
						<p><?= $cabin['cabinDescription'] ?></p>
						<br />
						<p>Cabin inclusions:</p>
						<ul>
							<?php
							if(count($inclusions) > 0) {
								foreach ($inclusions as $key => $incl) {
									?>
									<li><?= $incl['inclusionName'];?></li>
									<?php
								}
							} else {
								?><li><?= "None"; ?></li><?php
							}
							?>
						</ul>
					</div>

				</article>
			
			<?php
		}
		?>

	</main>

</body>
</html>