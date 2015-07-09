<?php header("Cache-Control:no-cache"); ?>


<?php
	require_once 'incl/server_connect.php';

	$type = mysqli_real_escape_string($link, $_POST['cabinType']);
	$description = mysqli_real_escape_string($link, $_POST['cabinDescription']);
	$ppn = mysqli_real_escape_string($link, $_POST['pricePerNight']);
	$ppw = mysqli_real_escape_string($link, $_POST['pricePerWeek']);
	$photo = mysqli_real_escape_string($link, $_POST['photo']);
	//$inclusions = mysqli_real_escape_string($link, $_POST['inclusionName'];

	$cabinID = $_GET['CABINID'];
	

	$query = "UPDATE tblCabins SET cabinType='$type', cabinDescription='$description', pricePerNight=$ppn, pricePerWeek=$ppw, photo='$photo' WHERE cabinID = $cabinID";

	$result = mysqli_query($link,$query);
	
	if(!$result)
	{
		echo "Query error: " .mysqli_error($link);
		mysqli_close($link);
		exit('Error updating cabin');
	}else
	{
		header("Location: admin_update.php?CABINID=$cabinID&notice=Sucessfully updated");
	}

?>
