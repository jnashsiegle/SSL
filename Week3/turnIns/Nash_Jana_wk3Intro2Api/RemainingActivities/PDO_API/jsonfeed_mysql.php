<?php
/*
*	=======================================
*	Project:	SSL - Lab 7 Prep
*	File:		APIs (jsonfeed_mysql.php)
*	Author:		Jana Nash-Siegle
*	Created: 	1512
*/
// API (XML - JSON):  APPLICATION programming interfaces.
//  This is how one application can talk to another.
//  Examples: Facebook ebay, amazon, Google, etc...

// 
header("Content-type:application/json");							// tells the browser contents of page is JSON

// How to create a JSON file using data fro mMySQL database

// 1. Establish Database Connection
// Setup DB Username & Password
		$user = 'root';
		$pass = 'root';
		
		// Establish PDO & DSN Connection to Database
		$dbh = new PDO('mysql:host=localhost;dbname=ssl;port=8889', $user, $pass);

// 2. Read the database
$sth = $dbh->prepare('SELECT username, password FROM users101');
$sth->execute();

// 3. Store the results in a variable
$result = $sth->fetchAll();

// 4. Just, tell Browser to expect JSON
//Look above

// 5. Encode $result & echo to browser as JSON
echo json_encode($result);

?>