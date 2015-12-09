<?php
//pull data from a database via PDO
//Lets' make it a json object
header("Content-type:application/json");

$user = 'root';
$pass = 'root';
$dbh = new PDO('mysql:host=localhost;dbname=ssl;port=8889', $user, $pass);

$sql = "select id, fruitName, fruitColor from fruits order by fruitName";

$stmnt = $dbh->prepare($sql);

$stmnt->execute();

$result = $stmnt->fetchAll(PDO::FETCH_ASSOC);



echo json_encode($result);



?>