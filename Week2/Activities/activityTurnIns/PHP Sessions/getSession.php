<?php
	// Jana Nash-Siegle
	// SSL 151201
	// November 30, 2015

session_start();
?>


<!DOCTYPE html>
<html>
<head lang = "en">
	<meta charset = "UTF-8">
	<title>Get Session</title>
</head>
<body>


<?php 
	echo "This is the current session id of the session set in setSession.php:  " . session_id(). "<br />";
	echo "<pre> This is a print out of session variables using print_r get the defined variables:  <br />";
		print_r(get_defined_vars());
	echo "</pre>";
?>

<hr>	

<?php
	echo "Let's pull the session variables with GET . <br /><br />";
	echo "This is my name:  " . $_GET['name'] . "<br />";
	echo "This is my city:  " . $_GET['city'] . "<br />";
	echo "This is my state: " . $_GET['state'] . "<br />";
	echo "I am a " . $_GET['profession'] . " right now, but soon I will be a web developer."; 
?>



</html>
</body>