<?php
//pull fruit data from database
// Jana Nash-Siegle
// 151201
header("Content-type:application/json");

$user = 'root';
$pass = 'root';
$dbh = new PDO('mysql:host=localhost;dbname=ssl;port=8889', $user, $pass);

$sql = "SELECT id, fruitName, fruitColor FROM fruits ORDER BY fruitName";

$stmnt= $dbh->prepare($sql);

$stmnt->execute();

$fruits = $stmnt->fetchAll();

echo json_encode($fruits);

?>





