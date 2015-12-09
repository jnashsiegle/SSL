<?

$content = file_get_contents("http://localhost:8888/SSL/Week3/turnIns/Activity3-2/fruitjson.php");

$encoded = json_decode($content);

var_dump($content);

foreach($content->fruits as $fruit){
	echo "parse from url<br />";
	echo $fruit[1]->fruitName. "<br />";
	echo $fruit[2]->fruitColor. "<br />";
}

?>

