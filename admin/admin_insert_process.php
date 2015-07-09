
<?php
	require_once 'incl/server_connect.php';

	$type = mysqli_real_escape_string($link, $_POST['cabinType']);
	$description = mysqli_real_escape_string($link, $_POST['cabinDescription']);
	$ppn = mysqli_real_escape_string($link, $_POST['pricePerNight']);
	$ppw = mysqli_real_escape_string($link, $_POST['pricePerWeek']);
	$photo = mysqli_real_escape_string($link, $_POST['photo']);
	
	$query= "INSERT INTO tblCabins(cabinType, cabinDescription, pricePerNight, pricePerWeek, photo)
	VALUES('$type', '$description', '$ppn', '$ppw', '$photo')";
	
	$result = mysqli_query($link,$query);
	
	if(!$result)
	{
		echo "Query error: " .mysqli_error($link);
		mysqli_close($link);
		exit('Error inserting cabin into database');
	}else
	{
		header("Location: admin_insert.php?CABINID=$cabinID&notice=Sucessfully updated");
	}

	//to get the inclusions into the database we first have to know what the cabin ID is. So we need to do two queries, one that creates the cabin and
	// the second one which adds the inclusions once we know the cabin ID.


?>