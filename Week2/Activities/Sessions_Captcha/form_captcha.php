<?php
	// Sessions use cookies; cookies use headers.
	// Sessions must start before any HTML output
	// ---unloess output  buffering is turned on.
session_start();
?>
<!DOCTYPE html>
<html>
<head lang = "en">
	<meta charset = "UTF-8">
	<title>Captcha</title>
</head>
<body>

<h2>Jana's Captcha Validation</h2>

	<form action = "captcha_validate.php" method = "POST">

			Captcha Verify:
			<input type = "text" name = "captcha" /><br /><br /><img src = "captcha.php" />
			<br /><br />
			<input type = "submit" name = "submit" value = "Submit" />
	</form>

<pre> <!-- Read current session(s) for this website -->
	<?php print_r($_SESSION); ?></pre>
</html>
</body>