<?php
/*
	* SSL Sign Up Form
	* Jana Nash-Siegle
	* 12/2/2015
*/
?>
<!DOCTYPE html>
<html>
<head lang = "en">
	<title>SSL Sign Up Form</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href = "css/style.css">
</head>
<body>
		<!-- The data encoding type, enctype, MUST be specified as below -->
	<h2>Sign Up Today!</h2>
<form enctype="multipart/form-data" action="signup.php" method="POST">
	<fieldset>
	<legend>Sign-Up Now?</legend>
	Username <input type = "text" name = "user" value = "" /><br />
	Password&nbsp; <input type = "password" name = "password" value = "" /> <br />
	<br /> Select avatar photo to upload:
	<input type = "file" name = "avatarfile" value = "" /><br />
	<br />
	<input type = "submit" value = "Sign Up!" name = "submit">
	</fieldset>
</form><br /><br />

<form action = "login.php" method = "post">
	<fieldset>
		<legend>Already a Member?  Login...</legend>

		<p>
			<label for = "username_li">Username</label> <input id = "username_li" type = "text" name = "username_li">
		</p>
		<p>
			<label for = "password_li">Password&nbsp;</label> <input id = "password_li" type = "password" name = "password_li">
		</p>
		<p class = "rel">
			<button type = "submit" class = "right">Submit</button>
		</p>
	</fieldset>
</form>



</body>
</html>