<?php
// Activity 3-2
// Jana Nash-Siegle
// 151201

$fruits = file_get_contents("http://localhost:8888/SSL/Week3/turnIns/Activity3-2/fruitjson.php");

$encoded = json_decode($fruits);

//var_dump($content);

foreach($encoded->fruits as $fruit){

	echo $fruit->fruitName . " ";

	echo $fruit->fruitColor ."\n";
}


?>

