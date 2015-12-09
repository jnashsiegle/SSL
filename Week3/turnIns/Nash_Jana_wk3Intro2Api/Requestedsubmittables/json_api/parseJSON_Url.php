<?php
/*
*	=======================================
*	Project:	SSL - Lab 7 Prep
*	File:		APIs (parseJSON_URL.php)
*	Author:		Jana Nash-Siegle
*	Created: 	1512
*/
// API (XML - JSON):  APPLICATION programming interfaces.
//  This is how one application can talk to another.
//  Examples: Facebook ebay, amazon, Google, etc...

// parse a JSON file from a local file
header("Content-type:application/json");							// tells the browser contents of page is JSON

$contents = file_get_contents("http://localhost:8888/SSL/Week3/turnIns/json_api/myjson.json");

// Decode: The jsondecode() function will take a value already in JSON format and convert to a 
// variable containing a multidimensional, associative array.

$encoded = json_decode($contents); 									//use decode to convert JSON object to array

foreach($encoded->music_catalog as $album){							// loop through music_catalog content of file above

	echo $album->album."<br />";										// only echo out "album" only
}
?>