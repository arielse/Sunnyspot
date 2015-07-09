<?php 

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
	<link rel="stylesheet" type="text/css" href="common.css">
	<link rel="stylesheet" type="text/css" href="accommodation.css">
	<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Allura' rel='stylesheet' type='text/css'>
	<meta charset="utf-8">
	<meta name="description" content="Sunny Spot Holidays has 18 different cabins to choose from, as wel as different camping solutions.">
	<title>Accomodation</title>
</head>
<body>
	<?php require 'incl/header.php'; ?>
	<?php require 'incl/nav.php'; ?>

	<section class="sec">
		<div class="container">
				<h2>Cabins and Camping Accommodation</h2>
				<p>There are 18 different cabins to choose from, from standard cabins, to the deluxe cabins only 50 metres from the beach. Cabin linen is provided for all guests. There are also 50 powered grass sites and 90 powered slab sites for those wishing to camp.</p>
		</div>
	</section>

	<main>
		<?php

		foreach ($cabins as $cabin) {
			$inclusions = getCabinInclusions($link, $cabin['cabinID']);
			?>
					<div class="container">
	<article class="cabin">
				<div class="cabin-image" style="background-image: url(images/<?= $cabin['photo'] ?>);"></div>
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
		</div>
			
			<?php
		}
		?>

	</main>
<?php require 'incl/footer.php' ?>
</body>
</html>