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

<?php
	$_SESSION["first_name"] = "Jana";
	$name = $_SESSION["first_name"];
	echo "Welcome to My Session, " . $name . "!";
?>

<pre> <!-- Read current session(s) for this website -->
	<?php print_r($_SESSION); ?></pre>
</html>
</body>