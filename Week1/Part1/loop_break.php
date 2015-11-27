<!DOCTYPE html>
<html>
<head lang = "en">
	<meta charset = "UTF-8">
	<title>loop break</title>
</head>
<body>

	
	<?php 
		for ($count = 0; $count <= 10; $count++){
			if ($count == 5){
				break;
			}
			echo $count . ", ";
		}

	?>
	<br /><br />
left side numbers from inner loop, right side #'s from outer loop'
	<?php  //loop inside a loop with break

		for ($i = 0; $i <= 5; $i++) {
			if ($i % 2 == 0) { continue(1); }
			for ($k = 0; $k <= 5; $k++) {
				if ($k == 3) { break(2); }
			echo $i . "-" . $k . "<br />";
			}
		}
		?>

</body>
</html>