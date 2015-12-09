<?php
// API (XML - JSON)
// Jana Nash-Siegle
// SSL 151201

header("Content-type:application/json");
$content = file_get_contents("http://www.omdbapi.com/?t=goodfellas");
//var_dump($content);
echo json_encode($content);
echo nl2br($content);
?>

<?php
$file = 'dictionary.txt';
if($handle = fopen($file, 'r')) {
	$words = fread($handle, filesize($file));
	fclose($handle);
};
echo nl2br($words);
?>