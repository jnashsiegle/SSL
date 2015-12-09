<?php
/*
*	=======================================
*	Project:	SSL - Lab 7 Prep
*	File:		APIs (xml_feed.php)
*	Author:		Jana Nash-Siegle
*	Created: 	1512
*/

// API (XML - JSON):  APPLICATION programming interfaces.
//  This is how one application can talk to another.
//  Examples: Facebook ebay, amazon, Google, etc...

// The long way to create an XML file...

header("Content-type:text/xml");		//Tells browser contents of page is xml

/* The encoding declaration identifies which encoding is used to 
represent the characters in the document.
A whole bunch of ASCII that the XML processor looks for... */

$xmlfile = "<?xml version = '1.0' encoding = 'UTF-8'?>";		//Tells browswer which version of XML
$xmlfile .= "<feeds>";											// Start parent element called "feeds"

$xmlfile .= "<feed>";											// Start child element called "feed"
$xmlfile .= "<from>Jana</from>";
$xmlfile .= "<message>Merry Christmas!!</message>";
$xmlfile .=	"</feed>";											//end child node called "feed"

$xmlfile .= "<feed>";											//Start another child element
$xmlfile .= "<from>Chris</from>";
$xmlfile .= "<message>Happy New Year!!</message>";
$xmlfile .= "</feed>";											// End second child element

$xmlfile .= "</feeds>";											// End Parent element called "feeds"

echo $xmlfile;

$dom = new DOMDocument("1.0");						//Instantiate / create a new object with DOMDocument; XML Version
$dom->loadXML($xmlfile);							// Use PHP method called "loadXML" to load the current file resuolts
$dom->save("myxml.xml");							// save the file under the current path and call it myxml.xml

?>
