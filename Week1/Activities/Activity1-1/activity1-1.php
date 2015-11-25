<!DOCTYPE html>
<html>
<head lang = "en">
	<meta charset = "UTF-8">
	<title>Activity 1-1</title>
</head>
<body>

	
	<?php
	$name = "Jana Nash-Siegle";
	$age = 52;
	echo "1.  My name is " . $name . " and my age is " . $age . ".";
	?><br /><br /><hr>	

	<?php echo "1.  " . $name . " " . $age; ?>  //Double Quotes<br /><br />	

	<?php echo "2.  " . $name. ' ' . $age; ?> // Single Quotes<br /><br />

	<?php
	$person = array($name, $age);
	echo "3.  " . $person[0] . " " . $person[1];
	?> //$personindex<br /> <br />

	<?php
	$person = array("name" => "Jana Nash-Siegle", "age" => "52");	
	?> 

	<?php echo "4.  " . $person["name"]. " " . $person["age"];?>  // key/value pairs<br /><br />
	
	<?php $age = null;
	echo "5.  " . $age; ?> // NULL -the result is nothing echo's out, there is no age value any longer, null removed the original value of 52<br /><br />
	
	<?php unset($name);
	echo "6.  " . $name; ?>  // When you unset() it becomes an undefined variable  because the unset() destroyed the value
	
</body>
</html>