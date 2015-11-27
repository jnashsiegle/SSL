<!DOCTYPE html>
<html>
<head lang = "en">
	<meta charset = "UTF-8">
	<title>scope</title>
</head>
<body>

<?php
	$bar = "outside"; //global scope
	function jana_foo() {
		global $bar;  //allow GLOBAL $bar inside this function

		if (isset($bar)) {
			echo "jana_foo: " . $bar . "<br />";
		}
		$bar = "inside";  //LOCAL scope -- because key word "global" not
							//used.  Even though it uses the same name, its
							//local

	}
	
	echo "1: " . $bar . "<br />"; // Line #23 no function invoked; $bar is global
	jana_foo();// line #24 function is invoked but $bar is still global for isset
	echo "2: " . $bar . "<br />"; // Line 25: $bar is set back to LOCAL at end of function
	?>


</body>
</html>