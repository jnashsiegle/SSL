<!DOCTYPE html>
<html>
<head lang = "en">
	<meta charset = "UTF-8">
	<title>strings</title>
</head>
<body>

	<?php

	echo "Hello World<br />"; //string using double Quotes
	echo 'Hello World<br />'; //string using single Quotes

	$greeting = "Hello";
	$target = "World";
	$phrase = $greeting . " " . $target;
	echo $phrase;
	echo "<br />";




	echo "$phrase Again<br />"; //string w/variable embedded HAS TO USE DOUBLE QUOTES
	echo '$phrase Again<br />'; //SINGLE quotes won't work w/ embedding variable names
	echo "{$phrase}Again<br />"; //putting curly braces around variables with trailing string text is a best practice & creates clarity regarding spacing, etc.

	?>





</body>
</html>