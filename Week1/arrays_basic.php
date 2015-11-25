<!DOCTYPE html>
<html>
<head lang = "en">
	<meta charset = "UTF-8">
	<title>basic arrays</title>
</head>
<body>

	<?php

		$numbers = array(4,8,15,16,23,42);
		echo $numbers[0];

	?>

	<?php $mixed = array(6, "fox", "dog", array("x", "y", "z")); ?><br />
	<?php echo $mixed[2]; ?><br />//see screenshot for explanation of error 
	<?php echo $mixed[3]; ?><br />//see screenshot for explanation of error  
	<?php echo $mixed ?><br />
	<?php echo $mixed[3][1]; ?><br />// gives us the result of a specific position in the array

	<?php $mixed[2] = "cat"; ?><br />
	<?php $mixed[4]= "mouse"; ?><br />
	<?php $mixed[] = "horse"; ?> <br />

	<pre> //HTML <pre> tag keeps arrays nice & tidy!
	<?php echo print_r($mixed); ?> //prints readable arrays
	</pre> 

	





</body>
</html>