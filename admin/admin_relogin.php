<?php
  session_start();
  header("Cache-Control:no-cache");
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Relogin</title>
  <link rel="stylesheet" type="text/css" href="forms.css">
</head>

<body>
  <p>The username and password entered are <i>NOT</i> correct!</p>
  <h2>Please enter details again for access to administrator options.</h2>  


  <form id="formA" method="post" action="admin_check_login.php">

    <fieldset>
    <legend>Login</legend>

      <div>
		    <label for="username">Username:</label>
		    <input type="text" name="username" id="username" size="25" maxlength="15">
        <span id="spanUser">* You must enter a username that is 2 - 12 characters long *</span>
		    <br>

		    <label for="txtPassword">Password:</label>
		    <input type="password" name="password" id="password" size="25" maxlength="8">
        <span id="spanPass">* You must enter a password that is 4 to 8 characters long and is not solely numbers *</span>
		    <br>

		    <input type="submit" name="submit" id="login" value="Login">

      </div>

    </fieldset>

  </form>
  <br>

  <a href="/index.php" class="btnHome">Home page</a>
  
  <script type="text/JavaScript" src="login.js"></script>
</body>
</html>