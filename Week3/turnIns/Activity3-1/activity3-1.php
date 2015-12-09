<?php
// load external xml from a URL
// parse xml

$contents = simplexml_load_file("http://localhost:8888/SSL/Week3/turnIns/Activity3-1/fruitxml.php");

var_dump($contents);

foreach($contents->fruits as $fruits){
		echo "from external url<br />";
		echo $fruits->fruitName. "<br /><br />";
		echo $fruits->fruitColor. "<br /><br />";
}

?>


