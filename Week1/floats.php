<!DOCTYPE html>
<html>
<head lang = "en">
	<meta charset = "UTF-8">
	<title>floats</title>
</head>
<body>

	<?php echo $float = 3.14; ?><br />
	<?php echo $float + 7; ?><br />
	<?php echo 4/3; ?><br />

		
	
	
	Round: 		<?php echo round($float, 1);  ?> <br />//remember, $float is still set to 3.14 from line #10 earlier
	Ceiling: 	<?php echo ceil($float);  ?><br />//rounds up
	floor:		<?php echo floor($float); ?><br />//rounds down 
	

	<?php $integer = 3; ?>

	<?php echo "Is {$integer} integer? " . is_int($integer); ?><br />// true = 1
	<?php echo "Is {$float} integer?" . is_int($float);  ?><br />//false = nothing

	<?php echo "Is {$integer} float? " . is_float($integer); ?><br />// false = nothing
	<?php echo "Is {$float} float? " . is_float($float); ?><br />// true = 1 

	<?php echo "Is {$integer} numeric? " . is_numeric($integer);  ?><br />// true = 1
	<?php echo "Is {$float} numeric? " . is_numeric($float);  ?><br />// true = 1

</body>
</html>