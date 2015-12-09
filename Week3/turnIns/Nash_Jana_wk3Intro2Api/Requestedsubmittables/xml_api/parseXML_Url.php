<?php
/*
*	=======================================
*	Project:	SSL - Lab 7 Prep
*	File:		APIs (parseXML_Url.php)
*	Author:		Jana Nash-Siegle
*	Created: 	1512
*/
// API (XML - JSON):  APPLICATION programming interfaces.
//  This is how one application can talk to another.
//  Examples: Facebook ebay, amazon, Google, etc...

// Load and parse external XML from a URL
// simlexml_load_file - interprets an XML file into an object

$contents = simplexml_load_file("http://localhost:8888/SSL/Week3/turnIns/xml_api/xml_feed.php");

foreach($contents->feed as $feeds){						// loop through "feedc" content of file above

	echo $feeds->message."<br />";						// only echo out "message" node

}

?>

<pre>
<?php
// Do a var_dump of content to see output
// Type & value (Object with nested arrays)
var_dump($contents);
?>
</pre>