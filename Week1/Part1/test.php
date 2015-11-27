<!DOCTYPE html>
<html>
<head lang = "en">
	<meta charset = "UTF-8">
	<title>troubleshooting</title>
</head>
<body>



this is not working for some reason....troubleshoot it
use list to assign "meaningful" array variables
	<?php
		function add_subt($val1, $val2) {
			$add = $val1 + $val2;
			$subt = $val1 - $val2;
			return array($add, $subt); //one return per function...
										//but returning multiple values

			list($add_result, $subt_result) = add_subt(20,7);
			echo "Add: " . $add_result . "<br />"; // NO array keys required
			echo "Subt: " . $subt_result . "<br />"; // NO array keys required
		}
	?>
</body>
</html>