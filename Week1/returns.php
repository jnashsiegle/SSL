<!DOCTYPE html>
<html>
<head lang = "en">
	<meta charset = "UTF-8">
	<title>returns</title>
</head>
<body>


<?php
	
	function add($val1, $val2) {
		$sum = $val1 + $val2;
			return $sum; // value $sum gets returned to variable that
						// called the function--not the browser!

	}

		$result1 = add(3,4);
		$result2 = add(5,$result1);  //5 + 7
		echo $result2; // this is how we get it to display in browser
	?>


	<br /><br />Chinese Zodiac in a different way using return instead of break || switch case inside of function<br />
<?php
// ChineseZodiac
// whitespace doesn't matter
//colons, semicolons and breaks do
function chinese_zodiac($year) {

switch (($year -4) % 12) {
	case 0: 	return  'Rat';		
	case 1: 	return  'Ox';			
	case 2: 	return  'Tiger';		
	case 3: 	return  'Rabbit';		
	case 4: 	return  'Dragon';		
	case 5: 	return  'Snake';		
	case 6: 	return  'Horse';		
	case 7: 	return  'Goat'; 		
	case 8: 	return  'Monkey'; 	
	case 9: 	return  'Rooster'; 	
	case 10: 	return  'Dog';		
	case 11: 	return  'Pig';		
}
}
// grab the return value
$zodiac = chinese_zodiac(2013);
echo "2013 is the year of the {$zodiac}.<br />";
echo "2027 is the year of the " . chinese_zodiac(2027) . ".<br />";

?>
<br /><br /><br />
<?php
	function better_hello($greeting, $target, $punct) {
		return $greeting . " " . $target . $punct . "<br />";
	}
echo better_hello("Hello", "~Jana Nash-Siegle", "!"); //You can only have one return per function
?>

</body>
</html>