<?php
/*
*	=======================================
*	Project:	SSL - Lab 7 Prep
*	File:		APIs (parseXML_Local.php)
*	Author:		Jana Nash-Siegle
*	Created: 	1512
*/
// API (XML - JSON):  APPLICATION programming interfaces.
//  This is how one application can talk to another.
//  Examples: Facebook ebay, amazon, Google, etc...

// How to load & parse XML using a local file
// simplexml_load_file - interprets an XML file into an object

$contents = simplexml_load_file("myxml.xml");

foreach($contents->feed as $feeds){ 					//loop through "feed elements in local XML file

	echo $feeds->from."<br />";							// only echo out "from" node
}

?>