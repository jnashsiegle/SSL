<?php

/*	Jana Nash-Siegle
	SSL
	deletefruit.php
*/
$user 	= "root";
$pass	= "root";
$db 	= new PDO('mysql:host=localhost;dbname=SSL;port=8889', $user, $pass);

$fruitid = $_GET['id'];

$stmt 	= $db->prepare("UPDATE FROM fruits SET fruitImage where id IN (:id)");

$stmt->bindParam(':id', $fruitid);
$stmt->execute();
header('Location: ads.php'); //redirecting back to the original fruits page
die();
?>