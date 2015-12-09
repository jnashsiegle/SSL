<?php
//pull data from a database via PDO
//Lets' make it a json object
//jana nash-siegle

$content = file_get_contents("http://localhost:8888/SSL/Week3/turnIns/Activity3-2/fruitjson.php");

$encoded = json_decode($content);

//var_dump($content);

foreach($encoded as $fruit){
	echo "Name - " . " " . $fruit->fruitName. " | ";
	echo "Color - " . " " . $fruit->fruitColor. "<br />";
}

?>

