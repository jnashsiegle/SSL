<!DOCTYPE html>
<html>
<head lang = "en">
	<meta charset = "UTF-8">
	<title>array_pointers</title>
</head>
<body>

	
	<?php 
		$ages = array(4,8,15,16,23,42);

		// current: current pointer value
		echo "1: " . current($ages) . "<br />";

		// next: move the pointer forward
		//similar to using 'continue' inside a loop
		next($ages);
		echo "2: " . current($ages) . "<br />";

		next($ages);
		next($ages);
		echo "3: " . current($ages) . "<br />";

		//previ: move the pointer backward
		prev($ages);
		echo "4:  " . current($ages) . "<br />";
		
		//reset: move the pointer to the first element
		reset($ages);
		echo "5: " . current($ages) ."<br />";

		// end: move the pointer to the last element
		end($ages);
		echo "6: " . current($ages) ."<br />";

		// move the pointer past the last element
		next($ages);
		echo "7: " . current($ages) . "<br />";  //wont' automtically move to 1st element..use RESET instead
	?>


	<?php
		reset($ages); //resets array pointer back to the beginning

		//while loop is great for moving through database arrays
		//database pointer is moved  by database driver each time
		// foreach loops can't move the database arrays, but while loops can...
		//foreach loops are better for php arrays;

		while($age = current($ages)) { //get a non-NULL item & assign it

			//if you got an item that is not NULL, echo out...
			echo $age . " ~";
			next($ages);
		}
		?>
</body>
</html>