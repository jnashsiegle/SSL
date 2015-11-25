<!DOCTYPE html>
<html>
<head lang = "en">
	<meta charset = "UTF-8">
	<title>constants</title>
</head>
<body>

	
 	<?php
 		$max_width = 980;  
 		define("MAX_WIDTH", 980);
 		echo MAX_WIDTH;  
 	?>  // BROWSER results for line #13<br />

 	<?php
 	//  can't change the value of a constant
 	//MAX_WIDTH = MAX_WIDTH + 1
 	// echo MAX_WIDTH; ?>

 	<?php //can't even redefine the value of a constant
 	define("MAX_WIDTH", 981);
 	echo MAX_WIDTH;
	?>  // browser results for line #23



</body>
</html>