<?php
/*
*	=======================================
*	Project:	SSL - Lab 7 Prep
*	File:		APIs (json_feed.php)
*	Author:		Jana Nash-Siegle
*	Created: 	1512
*/
// API (XML - JSON):  APPLICATION programming interfaces.
//  This is how one application can talk to another.
//  Examples: Facebook ebay, amazon, Google, etc...

// Creatomg a JSON file the long way...
header("Content-type:application/json");							// tells the browser contents of page is JSON

$jsonfile = '{';													// open file with curly brace
$jsonfile .= '"music_catalog":[';									// uses single and double quotes for primary
$jsonfile .= '{"artist":"Chris Siegle","album":"Greatest Hits"},';			// Create 1st array member
$jsonfile .= '{"artist":"Chris Siegle","album":"Just For Him!"}';				// Use comma at end of first array member
$jsonfile .= ']';													// close out elements
$jsonfile .= '}';													// close out file with curly brace

echo $jsonfile;														// Echo out the variable $jsonfile

?>