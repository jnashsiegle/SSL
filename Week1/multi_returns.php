<!DOCTYPE html>
<html>
<head lang = "en">
	<meta charset = "UTF-8">
	<title>multi returns</title>
</head>
<body>

<?php
	
	function add_subt($val1, $val2) {
		$add = $val1 + $val2;
		$subt = $val1 - $val2;
		return array($add, $subt); //one return per function
									//however, you can return multiple values

	}

	$result_array = add_subt(10,5);
	//Line #13 adds 10 + 5; Gets returned as 1st item in array
	echo "Add: " . $result_array[0] . "<br />"; //Echo the array key value
	echo "Subt: " . $result_array[1] . "<br />";
	//Line #14 subtracts 10 - 5; Gets returned as 2nd item in array
?>

<br /><br />
use list to assign "meaningful" array variables
	<?php
		function add_subt1($val3, $val4) {
			$add1 = $val3 + $val4;
			$subt1 = $val3 - $val4;
			return array($add1, $subt1); //one return per function...
										//but returning multiple values

			list($add1_result, $subt1_result) = add_subt1(20,7);
			echo "Add: " . $add1_result . "<br />"; // NO array keys required
			echo "Subt: " . $subt1_result . "<br />"; // NO array keys required
		}
	?>
</body>
</html>