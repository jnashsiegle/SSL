<?php
/*
*	=======================================
*	Project:	SSL - Lab 7 Prep
*	File:		APIs (xmlfeed_mysql.php)
*	Author:		Jana Nash-Siegle
*	Created: 	1512
*/
// API (XML - JSON):  APPLICATION programming interfaces.
//  This is how one application can talk to another.
//  Examples: Facebook ebay, amazon, Google, etc...

// 
header("Content-type:application/xml");							// tells the browser contents of page is JSON

// make an XML feed with mysql using PHP

// 1. Establish Database Connection
// Setup DB Username & Password
		$user = 'root';
		$pass = 'root';
		
		// Establish PDO & DSN Connection to Database
		$dbh = new PDO('mysql:host=localhost;dbname=ssl;port=8889', $user, $pass);

// 2. Read the database
$sth = $dbh->prepare('SELECT username, password FROM users101');
$sth->execute();

$result = $sth->fetchAll();

// Tell browser to expect XML, which version and encoding character format
// see above

$xmlfile = '<?xml version = "1.0" encoding = "UTF-8"?>';
$xmlfile .= '<users>';												// append & start parent element

foreach($result as $user) {											// Read through DB results as array $user
	$xmlfile .= '<username>';										// Append & start 1st child
	$xmlfile .= "<uname>" . $user["username"] . "</uname>";			//Append Value of 1st child node
	$xmlfile .= '</username>';										//append & close 1st child
	$xmlfile .= '<password>';										// append Y& start 2nd child
	$xmlfile .= "<upass>" . $user["password"] . "</upass>";		// ap;pend value of the second child node
	$xmlfile .= '</password>';										// append & close 2nd child
};

$xmlfile .= '</users>';												// append & end parent element

echo $xmlfile;														// display xml/variable to browser
?>	
