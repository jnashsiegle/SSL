<!DOCTYPE html>
<html>
<head lang = "en">
	<meta charset = "UTF-8">
	<title>form</title>
</head>
<body>

	<h2> User Validation Rocks!</h2>

	<?php

	// * isset (---opposite of null & empty) Is there a value?
	//   remember, even if its an empty string, there is still a value;
	$value = "y";
	if (!isset($value) || empty($value)) {
		echo "1.  ISSET:  Validation failed!<br />";
		echo '$value is now set to: ' . $value . "><br /><br />";
	} 	else {
		echo "1. ISSET:  Validation successful! <br />";
		echo '$value is now set to:  ' . $value . "<br /><br />";
	}

	// * presence
	// use trim() so empty spaces don't count
	// use +++ strictly equal to avoid false positives
	// empty() would consider "0" to be empty
	$value = trim(" 0 ");
	if (!isset($value) || $value === "") {
		echo "2. PRESENCE:  Whoops!  Validation failed for the presence check.<br />";
		echo '$value is set to:  ' . $value . "<br /><br />";
	}	else 	{
		echo "2.  PRESENCE:  Validation Successful!<br />";
		echo '$value is now set to:  ' . $value . "<br /><br />";
	}

	// * string length
	// minimum length
	$value = "abcd";
	$min = 3;
	if (strlen($value) < $min) {
		echo "3.  STRING LENGTH (min):  Ooops = Validation failed the string length (strlen) test!<br />";
		echo '$value is now set to: ' . $value . "<br /><br />";
	}	else 	{
		echo "3.  STRING LENGTH (min):  Validation successful!<br />";
		echo '$value is now set to: ' . $value . "<br /><br />";
	}

	// * max length
	$max = 6;
	if (strlen($value) > $max) {
		echo "4.  STRING LENGTH (max):  Oopsy - Validation failed the max length check!<br />";
		echo '$value is now set to:  ' . $value . "<br /><br />";
	}	else 	{
		echo "4.  STRING LENGTH (max):  Validation successful!<br />";
		echo '$value is now set to:  ' . $value . "<br /><br />";
	}

	// * type
	// always going to be a string;
	$value = "1";
	if (!is_string($value)) {
		echo "5.  TYPE:  Uh oh - Validation failed the is_string test too!<br />";
		echo '$value is now set to:  ' . $value . "<br /><br '/>";
	}	else 	{
		echo "5.  TYPE:  Validation successful!<br />";
		echo '$value is now set to:  ' . $value . "<br /><br />";
	}

	// * inclusion in a set
	$value = "1";
	$set = array("1", "2", "3", "4");
	if (!in_array($value, $set)) {
		echo "6.  INCLUSION:  Oh no - Not again...Validation failed the in_array test too!<br />";
		echo '$value is now set to:  ' . $value . "<br /><br />";
	}	else 	{
		echo "6.  INCLUSION:  Validation successful!<br />";
		echo '$value is now set to:  ' . $value . "<br /><br />";
	}

	// * uniqueness - coming soon!
	// we'll get to this later... uses a database to check uniqueness
	echo "7.  UNIQUENESS:  We'll talk about uniqueness with datases during Week #2 of SSL - stay tuned!! <br /><br />";

	// * format
	// use a regex on a string
	// preg_match($regex, $subject)
	if (preg_match("/PHP/", "PHP is fun.")) {
		echo "8.  REGEX/PREG_MATCH:  Finally!!! A match was found.  Test for preg_match is valid!<br />";
		echo '$value is now set to:  ' . $value . "<br /><br />";
	}	else 	{
		echo "8.  REGEX/PREG_MATCH:  Not again!  A match was not found.  The test for preg_match test is invalid!<br />";
		echo '$value is now set to:  ' . $value . "<br /><br />";
	}

	$value = "nobody@nowhere.com";
	// use a regex on a string
	// preg_match ($regex, $subject)
	// preg_match is most flexible
	if (!preg_match("/@/", $value)) {
		echo "9.  REGEX/PREG_MATCH:  Geez!  Validation failed again?<br />";
		echo '$value is now set to:  ' / $value . "<br /><br />";
	}	else 	{
		echo "9.  REGEX/PREG_MATCH:  Validation successful!<br />";
		echo '$value is now set to:  ' . $value . "<br /><br />";
	}

	// strpos is faster than preg_match!
	// strpos finds the position of the first occurrence of a substring in a string
	// use === to make exact match with false
	if (!strpos($value, "@") === false) {
		echo "10.  STRPOS:  Yippee!!  Way to GO - Validation for string position (strpos) is working!!!<br />";
		echo '$value is now set to:  ' . $value . "<br /><br />";
	}	else 	{
		echo "10.  STRPOS:  Validation failed<br />";
		echo '$value is now set to:  ' . $value . "<br /><br />";
	}

	


	?>



</body>
</html>