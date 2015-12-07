<?

$content = file_get_contents("http://localhost:8888/SSL/Week3/api/json.php");

$encoded = json_decode($content);

//var_dump($encoded);

foreach($encoded->feeds as $feed){
	echo "parse from url<br />";
	echo $feed->from. "<br />";
}

?>

<?

$content = file_get_contents("myjson.json");

$encoded = json_decode($content);

//var_dump($encoded);

foreach($encoded->feeds as $feed){
	echo "parse from local file<br />";
	echo $feed->from. "<br />";
}

?>