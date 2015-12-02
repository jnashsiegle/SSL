<?php

//Class called "Person" with Method called "say_hello()" inside

class Person {
	function say_hello(){
		echo "Hello from inside a class. <br />";
	}
}
//Use "get_class_methods" to find and store methods from the "Person" class (--inside array)
$methods = get_class_methods('Person');
foreach($methods as $method){
	echo $method . "<br />";
}

//Add a conditional to see if the method say_hello above exists
if (method_exists('Person', 'say_hello')){
	echo "Method does exist. <br />";
}	else {
	echo "Method does not exist. <br />";
}
?>
