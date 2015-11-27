<!DOCTYPE html>
<html>
<head lang = "en">
	<meta charset = "UTF-8">
	<title>switch</title>
</head>
<body>

	
	<?php
	$a = 2;

	switch ($a) {
		case 0:
			echo "a equals 0<br />";
			break; //stops switch from evaluating more
		case 1:
			echo "a equals 1<br />";
			break;
		case 2:
			echo "a equals 2<br />";
			break;
		case 3:
			echo "a equals 3<br />";
			break;
		default:
			echo "a is not 0, 1, 2, or 3<br />";
			break;
	}
	//NOTE: WITHout the "break", the rest of the echo statements would execute--even if the value is not the same!
?>
<br /><br />without break it would keep on evaluating as below shows<br />
<?php
	$a = 2;

	switch ($a) {
		case 0:
			echo "a equals 0<br />";
			//break; //stops switch from evaluating more
		case 1:
			echo "a equals 1<br />";
			//break;
		case 2:
			echo "a equals 2<br />";
			//break;
		case 3:
			echo "a equals 3<br />";
			//break;
		default:
			echo "a is not 0, 1, 2, or 3<br />";
			//break;
	}
	//NOTE: WITHout the "break", the rest of the echo statements would execute--even if the value is not the same!
?>
<br /><br />Chinese Zodiac<br />
<?php
// ChineseZodiac
// whitespace doesn't matter
//colons, semicolons and breaks do
$year = 2015;
switch (($year -4) % 12) {
	case 0: 	$zodiac = 'Rat';		break;
	case 1: 	$zodiac = 'Ox';			break;
	case 2: 	$zodiac = 'Tiger';		break;
	case 3: 	$zodiac = 'Rabbit';		break;
	case 4: 	$zodiac = 'Dragon';		break;
	case 5: 	$zodiac = 'Snake';		break;
	case 6: 	$zodiac = 'Horse';		break;
	case 7: 	$zodiac = 'Goat'; 		break;
	case 8: 	$zodiac = 'Monkey'; 	break;
	case 9: 	$zodiac = 'Rooster'; 	break;
	case 10: 	$zodiac = 'Dog';		break;
	case 11: 	$zodiac = 'Pig';		break;
}
echo "{$year} is the year of the {$zodiac}.<br />";
?>

<br /><br />Case with multiple string values<br />
<?php
$user_type = 'user'; //changed string

switch ($user_type) {
	case 'student':
		echo "Welcome!";
		break;
	case 'press':
		echo "Greetings!";
		break;
	case 'customer':
		echo "Thanks for your business!";
		break;
	case 'user':
	case 'admin':
		echo "Login Success!";
		break;
}
?>



</body>
</html>




