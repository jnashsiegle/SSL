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

// Another way to read/p;arse XML & send output to browser
//file_get_contents - Reads entire file into a string


$xmlStr = file_get_contents("http://localhost:8888/SSL/Week3/turnIns/xml_api/xml_feed.php");

$xml = new SimpleXMLElement($xmlStr);					// Instantiate object & store in variable

foreach($xml->feed as $feeds){						// loop through "feedc" content of file above

	echo $feeds->from. ' says...' . $feeds->message . '<br />';		// only echo out "message" node

}

?>

<pre>
<?php
// Do a var_dump of content to see output
// Type & value (Object with nested arrays)
var_dump($xml);
?>
</pre>