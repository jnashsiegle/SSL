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
	<title>Set Session</title>
</head>
<body>

<?php
	$name = "Jana Nash-Siegle";
	$city = "Canyon Lake";
	$state = "Texas";
	$profession = "Student";

	$info = array(	'name' => $name,
					'city' => $city,
					'state' => $state,
					'profession' => $profession);

	$query_string = "name={$name}&city={$city}&state={$state}&profession={$profession}";
	$url = "getSession.php?" . http_build_query($info, '', "&");
?>
<a href = "getSession.php?name=Jana+Nash-Siegle&city=Canyon+Lake&state=Texas&profession=Student">getSession.php link</a>



<pre> <!-- Read current session(s) for this website -->
	<?php print_r(get_defined_vars()); 
	?>
</pre>
</html>
</body>