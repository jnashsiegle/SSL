<!DOCTYPE html>
<html>
<head lang = "en">
	<meta charset = "UTF-8">
	<title>string functions</title>
</head>
<body>

	<?php

	$first = "The quick brown fox";
	$second = " jumped over the lazy dog.";

	$third = $first;
	$third .= $second; //makes $third in concatenation form and adds $second to it.

	echo $third;

	?>


	Lowercase:  <?php echo strtolower($third); ?><br />
	Uppercase: <?php echo strtoupper($third); ?> <br />
	Uppercase first: <?php echo ucfirst($third); ?><br />
	Uppercase words: <?php echo ucwords($third); ?><br />

	Length: <?php echo strlen($third); //"strlen" include all spaces in final count ?> <br />  
	Trim: <?php echo "A" . trim(" B C D ") . "E"; //"Trim" removes leading and trailing spaces only ?> <br /> 
	Find: <?php echo strstr($third, "brown"); //"strstr" shows brown & everything after ?> <br />
	Replace by string: <?php echo str_replace("quick", "super-fast", $third); ?><br />

	Repeat: <?php echo str_repeat($third, 2);   ?><br />
	Make Substring: <?php echo substr($third, 5, 10); //starts at 0! show everyting including 5th position plus 10 more characters?><br />
	Find position: <?php echo strpos($third, "brown"); //position where brown starts...count starts at 0 not 1 ?> <br />
	Find character: <?php echo strchr($third, "z"); //returns everything after the find ?><br />


	





</body>
</html>