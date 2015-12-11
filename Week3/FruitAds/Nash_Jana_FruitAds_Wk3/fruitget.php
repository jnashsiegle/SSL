<?php

/*	Jana Nash-Siegle
	SSL
	fruitget.php
*/

// tell browser its JSON
header("Content-type:application/json");

// Setting up DB Username & Password
$user = 'root';
$pass = 'root';

// PDO
$db = new PDO('mysql:host=localhost;dbname=SSL;port=8889', $user, $pass);

// choose a fruit randomly for ad display
$sql = 'SELECT * FROM fruits ORDER BY RAND() LIMIT 1;';
$stmnt = $db->prepare($sql);

$stmnt->execute();

$result = $stmnt->fetchAll(PDO::FETCH_ASSOC);
// echo out result
echo json_encode($result);

?>