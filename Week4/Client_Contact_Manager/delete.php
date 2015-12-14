<?php

/*
* 	======================================
*	PROJECT:  	SSL - Week 4 finals
*	FILE: 		delete.php
*	AUTHOR:		Jana Nash-Siegle
*	CREATED: 	12/13/2015
*	======================================
*/
$user 	= "root";
$pass	= "root";
$db 	= new PDO('mysql:host=localhost;dbname=SSL;port=8889', $user, $pass);

$clientid = $_GET['id'];

$stmt 	= $db->prepare("DELETE FROM clients where id IN (:id)");

$stmt->bindParam(':id', $clientid);
$stmt->execute();

//success message for delete

header('Location: client.php'); //redirecting back to the original client page
die();
?>

