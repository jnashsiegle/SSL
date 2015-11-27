<!DOCTYPE html>
<html>
<head lang = "en">
	<meta charset = "UTF-8">
	<title>integers</title>
</head>
<body>

	<?php
		$var1 = 3;
		$var2 = 4;
	?>
	Basic Math: <?php echo ((1 + 2 + $var1) * $var2) / 2 - 5; ?><br />

	Absolute Value: <?php echo abs(0-300); ?><br />// return absolute positive value of a number
	Exponential: 	<?php echo pow(2, 8); ?><br />
	Square Root:  	<?php echo sqrt(100); ?> <br />
	Modulo:			<?php echo fmod(20, 7); ?>  //  only returns the "remainder" of a division<br /> 
	Random: 		<?php echo rand(); ?>  //  return a random number <br />
	Random (min, max): <?php echo rand(1, 10);  ?>  // return random with a min max declared<br />

	+= : <?php $var2 += 4; echo $var2;  ?>  //remember, the value of $var2 started out as 4 (--from line #11)<br />
	-= : <?php $var2 -= 4; echo $var2; ?><br />
	*= : <?php $var2 *= 3; echo $var2; ?><br />
	/= : <?php $var2 /= 4; echo $var2; ?>  // also, value of $var2 is changing after each line is executed <br />

	Increment: <?php $var2__; echo $var2;  ?>  //remember the value of $var2 starts out as 3 (--from line #25)<br />
	Decrement: <?php $var2--; echo $var2; ?><br />

	//type conversion 
	<?php
	echo 1 + "1"; // type conversion makes the '1' string into a number
	echo "<br /><br />";
	echo 1 + "2 houses"; //the word 'houses' disappears
	?>

	




</body>
</html>