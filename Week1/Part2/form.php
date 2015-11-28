<!DOCTYPE html>
<html>
<head lang = "en">
	<meta charset = "UTF-8">
	<title>form</title>
</head>
<body>

	<h2>Jana's Sign-Up Form</h2>

	<!--<form action = "form_processing.php" method = "post"> -->
	<!--<form action = "form_detector.php" method = "post"> FORM DETECTION -->
	<!--form action = "form_single01.php" method = "post"> new procssor -->
		<form action = "password_encryption.php" method = "post"> <!--PASSWORD ENCRYPTION -->
		Username:  <input type = "text" name = "username" placeholder = "username" value = ""  /><br />
		Password:  <input type = "password" name = "password" placeholder = "password" value = ""  /><br />
		<br />
		<input type = "submit" name = "submit" value = "Submit" />
	</form>

</body>
</html>