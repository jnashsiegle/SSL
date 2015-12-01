<!DOCTYPE html>
<html>
<head lang = "en">
	<meta charset = "UTF-8">
	<title>Unset Cookies</title>
</head>
<body>

	

<br /> How unsettling is this??... <br />

<?php
//	Three ways to unset cookies:
//	1. setcookie($name); no value for 2nd parameter
//	2. setcookie($name, null, $expire);
//	3. setcookie($name, $value, time() - 3600);

//  Fialishia's recommendation for unsetting:  Set cookie's value to 
//	nothing and then...
//	Set cookie's expiration date to date in the past

	$name = "SSLCookie";
	setcookie($name, null, time() - 3600);
	echo "<br />Your cookie is now UNSET!  Please refresh your browser...</br />";
	echo "<a href = set_cookies.php>" . "Go set it again?" . "</a>"
?>
<pre>
<!-- Read current cookie(s) for this website -->
	<?php print_r($_COOKIE); ?> </pre>	
	
</body>
</html>