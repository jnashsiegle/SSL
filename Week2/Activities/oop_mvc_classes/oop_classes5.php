<?php

//Class called "Person" with Method called "say_hello()" inside

class Person {

	var $first_name; // Always use "var" keyword when creating Class variables!
	var $last_name;

	var $arm_count = 2;
	var $leg_count = 2;

	function say_hello(){
		echo "Hello from inside a class. <br />";
	}
	function hello(){	
		$this->say_hello();
	}
}

//$person = new Person();
//echo $person->arm_count; //Now echo out one of the variabloes for this instance
						//Notice the arm_count DOES NOT need the $ in this notation

//How do we change the value of a propery for a particfular instance of Class

$person = new Person();
echo $person->arm_count . "<br />";
$person->arm_count = 3; //increase the arm count by 3
$person->first_name = 'Lucy'; //Set the first name to lucy

$new_person = new Person(); //Create a new instance called new person
$new_person->first_name = 'Ethel'; //Give them a different name

echo $person->first_name . "and she has " . $person->arm_count . " arms.  <br />"; //Display this person
echo $new_person->first_name . "<br />";
?>

