<?php
	session_start();
	require_once 'incl/server_connect.php';

	
	$username = mysqli_real_escape_string($link, $_POST['username']);
	$password = mysqli_real_escape_string($link, $_POST['password']);
	
    $query = "select * from tblAdmin where userName='$username' and password='$password'";

    $result = mysqli_query($link,$query);
	
	if (!$result)
    { 
?>
		<!doctype html>
		<html lang="en">
		<head>
  			<meta charset="utf-8">
  			<title>Login Check</title>
		</head>

		<body>
			<?php 
				echo "Query error: ". mysqli_error($link);
				mysqli_close($link);
				exit(); 
			?>
			
        </body>
        </html>

<?php  } 

	if (mysqli_num_rows($result)==1)
	{
		$_SESSION["authorised"] = TRUE;
		header("Location:admin_menu.php");
		exit();
	}
	else 
	{
		header("Location:admin_relogin.php");
		exit();
	}
  ?>