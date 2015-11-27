<!DOCTYPE html>
<html>
<head lang = "en">
	<meta charset = "UTF-8">
	<title>print_r</title>
</head>
<body>
<!-- 
Code ANALYSIS/DEBUG:
- How do we analyze what's going on with our data & function calls?
- Use print_r and var_dump to analyze our Super Globals & other variables!!
- Add this code to the bottom of your files when you to see
- what's happening with your form data, sessions, etc...
-->

<pre> <!-- start HTML formatting to your analysis -->
	<?php
	//Use print_r to get all currently defined variables liek $_GET and $_POST;
	//print_r() displays information about a variable in a way that's readable by humans.
	echo "<hr>My print_r analysis report:  <br /><br /><br /><hr>";
	print_r(get_defined_vars());		
	?>
</pre> <!-- end HTML formatting to your analysis -->

	<!--Using elements of $_SERVER -->
	<?php
	echo "My PHP_SELF is: " . $_SERVER['PHP_SELF'];  //Returns the filename of the currently executing script
	echo "<br>";
	echo "My SERVER_NAME is: " . $_SERVER['SERVER_NAME']; //Returns the name of the host server
	echo "<br>";
	echo "My HTTP_HOST is: " . $_SERVER['HTTP_HOST']; //Returns the Host header from the current request
	echo "<br>";
	echo "My HTTP_REFERER is: " . $_SERVER['HTTP_REFERER']; //Returns the complete URL of the current page
	echo "<br>";
	echo "My HTTP_USER_AGENT is: " . $_SERVER['PHP_SELF']; // Returns Your Machine Details
	echo "<br>";
	echo "My SCRIPT_NAME is: " . $_SERVER['PHP_SELF']; //Returns the path of the current script
	?>
	<!-- End $_SERVER Elements -->

<pre>
<?php
	//Use var_dump to get all currently defined variable values,
	//PLUS variable type & length;
	echo "<hr>My var_dump analysis report: <br><br><hr>";
	var_dump(get_defined_vars());

	/* LATER: Use var_dump(debug_backtrace() to report the number of 'function calls' up to this point in your script. */
	echo "<hr>My var_dump of debug_backtrace <br><br><hr>";
	var_dump(debug_backtrace());	
?>
</pre>
<!-- to get indidual bits of info the following is $_SERVER..go to php.net to see all the attributes that are available.
<pre>
	<?php
	// Use $_SERVER[] to get info about your server & attributes;
	echo "<hr> My server analysis report: <br><br><hr>";
	echo "SERVER_NAME: ". $_SERVER['SERVER_NAME'] ."<br />";
	?>
</pre>



</body>
</html>