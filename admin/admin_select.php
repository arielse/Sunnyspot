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
	<link rel="stylesheet" type="text/css" href="../forms.css">
	<link href='http://fonts.googleapis.com/css?family=Lato:100,400,700' rel='stylesheet' type='text/css'>
	<title>Select table</title>
	<meta charset="utf-8">
</head>

<body>
	
	

	<?php require 'incl/admin_nav.php'; ?>
		

	<?php
	require_once "incl/server_connect.php";

	$query='SELECT * FROM tblCabins';

	$result = mysqli_query($link, $query);

		$cabins = mysqli_fetch_all($result, MYSQLI_ASSOC); //read backwards: create an associative array from all of the info in $result, fetch
		//the info and put it into the variable $cabins. 
		
		?>

	<main>
		<?php
		if(array_key_exists('notice', $_GET)) {
			?>
			<p class="flash"><?= $_GET['notice'] ?></p>
			<?php
		}
	?>

			<table>
				<tr>
					<th>Cabin ID</th>
					<th>Cabin Type</th>
					<th>Cabin Description</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>

				<?php 



		foreach($cabins as $cabin) { //for each of the bits of info in the $cabins variable, get the singular bit of info $cabin.

			?>

			<tr>
				<td><?= $cabin['cabinID'] ?></td> <!-- get the "Cabin ID" from $cabin --> 
				<td><?= $cabin['cabinType'] ?></td>
				<td><?= $cabin['cabinDescription'] ?></td>
				<td><a href="admin_update.php?CABINID=<?= $cabin['cabinID'];?>">Edit</a></td>
				<td><a href="admin_delete.php?CABINID=<?= $cabin['cabinID']; ?>" onclick="return confirm('Are you sure you want to delete this cabin?')" id="linkDelete" >Delete</a></td>
			</tr>

			<?php 
		}

		?>
			</table>
	</main>
</body>

</html>