<!DOCTYPE html>
<html>
<head lang = "en">
	<meta charset = "UTF-8">
	<title>Color Loops</title>
</head>
<body>

	Part 1<br />
	<?php 

	$colors = array(
			"0" 			=>  "Red",
			"1"				=>  "Cranberry",
			"2"				=>	"Yellow.",
			"3"				=>	"Amber",
			"4"				=>	"Blue",
			"5"				=>	"Sapphire",
			"6"				=> 	"Green",
			"7"				=>	"Shamrock",
			"8"				=>	"Black",
			"9"				=>	"Gray"
		);
	foreach ($colors as $key => $val) {
		echo "Color {$key}  is {$val}.<br />";
		} 		
	?>
	<br /><br />
	Part 2<br />
	<?php
	krsort($colors);
	foreach ($colors as $key => $val) {
		echo "Color {$key} is {$val}.<br />";
	}
	?>
	<br /><br />	
	Part 3<br />
	<?php
	ksort($colors);	
	foreach ($colors as $key => $val){
		if ($key % 2 == 0) {
			echo "Color {$key} is {$val}.<br />";
	}
}
	?>

	
</body>
</html>

