<!DOCTYPE html>
<html>
<head lang = "en">
	<meta charset = "UTF-8">
	<title>loops_for</title>
</head>
<body>

	
<?php 
	for($count = 0; $count <= 10; $count++){
		echo $count . ", ";
	}	
?>
<br /><br />
<?php
	for ($count = 20; $count > 0; $count--){
		if($count % 2 == 0) { //use modulo to determine odd n even
			echo "{$count} is even. <br />";
		}	else {
			echo "{$count} is odd.<br />";
		}
	}
	?>

</body>
</html>