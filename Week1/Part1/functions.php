<!DOCTYPE html>
<html>
<head lang = "en">
	<meta charset = "UTF-8">
	<title>associative arrays</title>
</head>
<body>


<?php
function say_hello() { //function without arguments
	echo "Hey Full Sailors!<br />";
}

say_hello();

function say_hello_to($word) { //function with argument
	echo "Hello {$word}!<br />"; 
}

say_hello_to("Class of 2015");
say_hello_to("SSL Developers");
?>
<br /><br />
<?php
say_hello_loudly(); //NOT A BEST PRACTICE
					// However, this IS allowed because...
					//PHP Pre-processes your file

function say_hello_loudly() {
	echo "HELLO PROGRAMMING WORLD!<br />";
}

//function say_hello_loudly() {
	//echo "We CANNOT re-define a function.";
//} //Uses the same name as a funciton above == NOT ALLOWED
?>


	





</body>
</html>