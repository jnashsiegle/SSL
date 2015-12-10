<?php
// load external xml from a URL
//jana nash-siegle
// parse xml

$xml = simplexml_load_file("http://localhost:8888/SSL/Week3/turnIns/Activity3-1/fruitxml.php") or die("Error: Cannot create object");;
//print_r($xml);
//var_dump($xml);

foreach($xml->fruit as $fruit){
		echo "Name - " . " " . $fruit->fruitName. " | ";
		echo "Color - " . " " . $fruit->fruitColor. "<br />";
}
?>


