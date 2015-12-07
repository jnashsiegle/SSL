<?php
// load external xml from a URL
// load xml file locally
// parse xml

$contents = simplexml_load_file("http://localhost:8888/SSL/Week3/api/api.php");


var_dump($contents);

foreach($contents->feed as $feed){
		echo "from external url<br />";
		echo $feed->from. "<br /><br />";
}

?>

<?php
// load a FILE instead of a URL

// parse xml

$contents = simplexml_load_file("myxml.xml");


//var_dump($contents);

foreach($contents->feed as $feed){
		echo "from file<br />";
		echo $feed->from. "<br /><br />";
}

?>

