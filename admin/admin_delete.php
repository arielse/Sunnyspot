
<?php
require_once "incl/server_connect.php";

$cabinID = $_GET['CABINID'];

$query = "DELETE FROM tblCabins where
cabinID=$cabinID";

$result = mysqli_query($link, $query);

if(!$result)
	{
		echo "Query error: " .mysqli_error($link);
		mysqli_close($link);
		exit('Error deleting cabin');
	}else
	{
		header("Location: admin_select.php?notice=Sucessfully deleted cabin");
	}

?>