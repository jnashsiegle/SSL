<?php
/*
*	=======================================
*	Project:	SSL - Lab 7 Prep
*	File:		APIs (json_encode.php)
*	Author:		Jana Nash-Siegle
*	Created: 	1512
*/
// API (XML - JSON):  APPLICATION programming interfaces.
//  This is how one application can talk to another.
//  Examples: Facebook ebay, amazon, Google, etc...

// Creatomg a JSON file the long way...
header("Content-type:application/json");							// tells the browser contents of page is JSON

/*
$jsonfile = '{';													// open file with curly brace
$jsonfile .= '"music_catalog":[';									// uses single and double quotes for primary
$jsonfile .= '{"artist":"MJ","album":"Leave Me Alone"},';			// Create 1st array member
$jsonfile .= '{"artist":"MJ","album":"Just Beat It!"}';				// Use comma at end of first array member
$jsonfile .= ']';													// close out elements
$jsonfile .= '}';													// close out file with curly brace
*/

//Create a JSON file using a nested array
$jsonfile = array("music_catalog"=>array(array("artist"=>"MJ", "album"=>"Leave Me Alone"),
									array("artist"=>"MJ", "album"=>"Just Beat It!")));

//echo $jsonfile;														// Echo out the variable $jsonfile
																		//Cannot echo out Arrays LIKE THIS!!!!
																		//Error: Array to String Conversion

// Encode:  The jsonencode() function will take a value and convert it to a JSON format
echo json_encode($jsonfile);											//echo out $jsonfile (array to JSON format)
?>
