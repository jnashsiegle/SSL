<?php

//This will give us a long list of pre-defined php classes PLUS the PERSON class we made ourselves in this script

class Person {

}
/*
$classes = get_declared_classes();
foreach($classes as $class) {
	echo $class ."<br ?>";
} */

if(class_exists("Person")) {
	echo "That class has been defined. <br />";
}	else {
	echo "Class has not been defined. < br />";
}

?>