<!DOCTYPE html>
<html>
<head lang = "en">
	<meta charset = "UTF-8">
	<title>loops_while</title>
</head>
<body>

	
<?php 
	$count = 0;
	while ($count <= 10) {
		if($count == 5) {
			echo "FIVE, ";
		}	else {
				echo $count . ", ";
		}
		$count++; // increment by 1
	}
	echo "<br />";
	echo "Count: $count";

?>
<br /><br />
<?php
	$count = 1;
	while ($count < 20) {
		if($count % 2  == 0) { // use modulo to determine odd & even
			echo "{$count} is even <br />";
		}	else {
				echo "{$count} is odd<br />";
		}
		$count++;
	}
	?>

</body>
</html>