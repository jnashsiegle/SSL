<!DOCTYPE html>
<html>
<head lang = "en">
	<meta charset = "UTF-8">
	<title>default values</title>
</head>
<body>

<?php
	function painter($color){
		return "The painter should use {$color} for my kitchen.";
	}
	
	echo painter("blue"); //error-missing argument!  SOMETHING must be passed.
	?>

<br /><br />
<?php
	function painter1(){
		$color = "Baby Blue";
		return "The painter should use {$color} for my kitchen.";
	}
	
	echo painter1("blue"); //ecannot redefine!!  baby blue will pass
	?>
<br /><br />
	How to set default arguments for a function<br />
	<?php
		function paint($room = "office", $color = "red"){
			return "The color of Jana's {$room} is {$color}.<br />";
		}
		echo paint();
		echo paint("bedroom", "blue");
		echo paint("bedroom", null);
		echo paint("car");
		echo paint("blue");  //Logica error -argument in wrong order!
	?>

</body>
</html>