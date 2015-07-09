<?php
	session_start();
	//check if already logged in, if so send them to admin home page.
	if(isset($_SESSION['authorised'])) {
		header("Location:admin_menu.php"); //this will send users to admin home page.
		exit();
	}
?>

<!doctype html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="../forms.css">
	<meta charset="utf-8">
	<title>Login</title>
</head>

<body>

	<h2>Please login for access to administrator options</h2>
	<form id="formA" method="post" action="admin_check_login.php">
		<fieldset>
		<legend>Login</legend>
		<div>
			<label for="username">Username:</label>
			<input type="text" name="username" id="username" size="25" maxlength="15">
			<span id="spanUser">* You must enter a username that is 2 - 12 characters long *</span>
			<br>
			<label for="password">Password:</label>
			<input type="password" name="password" id="password" size="20" maxlength="8">
			<span id="spanPass">* You must enter a password that is 4 to 8 characters long and is not solely numbers *</span>
			<br>
			<input type="submit" name="submit" id="login" value="Login">
		</div>
		</fieldset>
	</form>
	<br>

	<a href="/index.php" class="btnHome">Home page</a>
	<script type="text/javascript" src="login.js"></script>
</body>
</html>