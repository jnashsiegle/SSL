<?php
// load external xml from a URL
//jana nash-siegle
// parse xml

$fruits = simplexml_load_file("http://localhost:8888/SSL/Week3/turnIns/Activity3-1/fruitxml.php");

var_dump($fruits);

foreach($fruits->fruits as $fruit){
	echo $fruit->fruitName. "<br /><br />";
}

?>


