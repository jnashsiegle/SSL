<!DOCTYPE html>
<html>
<head lang = "en">
	<meta charset = "UTF-8">
	<title>Set Cookies</title>
</head>
<body>


<?php
//	REMEMBER:  Setting cookies (changes the HTTP header)
//				... and changes must be requested before *any*
//				HTML output -- unless output buffering is turned on.

	echo "My SSL Browser Cookie is Set!";

	$name = "SSLCookie"; //cookie names cannot contain spaces!
	$value = "1508 - Day 3";
	// Set Expiration: add seconds for 1 week = sec * sec/min * hours/day *days/week
	$expire = time() + (60*60*24*7);

	// Set the Cookie, but remember this is set only when there is a browser request
	// This means you may need to refresh your browser to see the NEW cookie value
	setcookie($name, $value, $expire);

	echo "<br /><a href = unset_cookies.php>" . "Wanna UNSET Your Cookie?" . "</a>";
?>

<pre> <!-- Read current cookie(s) for this website -->
	<?php print_r($_COOKIE); ?> </pre>
</body>
</html>
