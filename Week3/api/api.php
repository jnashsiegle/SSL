<?php
//API (XML - JSON)
// Application Programming Interfaces.  This is how one application can talk to another.
// Facebook, Ebay, Amazon, Google, etc...

header("Content-type: text/xml");

$xmlfile  = "<?xml version='1.0' encoding='UTF-8' ?>"; 
$xmlfile .= "<feeds>";
$xmlfile .= "<feed>";
$xmlfile .= "<from>Joe</from>";
$xmlfile .= "<message>Hello</message>";
$xmlfile .= "<from>Mike</from>";
$xmlfile .= "<message>Hello</message>";
$xmlfile .= "</feed>";
$xmlfile .= "</feeds>";

echo $xmlfile;

//the following three lines will save as a physical file on the harddrive, in this same location as the api.
$dom = new DOMDocument("1.0");
$dom->loadXML($xmlfile);
$dom->save("myxml.xml");


?>