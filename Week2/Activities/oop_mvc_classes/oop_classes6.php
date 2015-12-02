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
	function full_name(){									//Create another method
		return $this->first_name . " " . $this->last_name; //Use $this with arrow notation
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
$person->last_name = 'Ricardo'; //Set last name

$new_person = new Person(); //Create a new instance called new person
$new_person->first_name = 'Ethel'; //Give them a different name
$new_person->last_name = 'Mertz'; //Give ethel last name

echo $person->full_name() . "<br />"; //Display this person's FULL name
echo $new_person->full_name() . "<br />"; //Display new persons full name

//To get more info about properties and variables within a class do this:

$vars = get_class_vars('Person'); //Store the value of get_class_vars in an Array
foreach($vars as $var => $value) { //Loop thru the values of the array
	echo "{$var}:  {$value}<br />"; //Echo the variable names and values
}
//Use "property exists" to check and see if a property exists inside a Class
echo property_exists('Person', 'first_name') ? 'true' : 'false';
?>

