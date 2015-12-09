<?php
// API (XML - JSON)
//jana nash-siegle
// Application programming interfaces.  This is how one application can talk to another.
// facebook, ebay, amazon, google, etc....

header("Content-type:application/json");

/*
$jsonfile = '{';
$jsonfile .= '"feeds":[';
$jsonfile .= '{"from":"joe","message":"hello"},';
$jsonfile .= '{"from": "mike", "message":"hello"}';
$jsonfile .= ']';
$jsonfile .= ']';
to be more accurate let php build the array instead as below
*/

$jsonfile = array("feeds" =>array(array("from"=>"joe","message"=>"hello"),
								  array("from"=>"mike","message"=>"hello")));

echo json_encode($jsonfile);

//turn the above echo into a variable so we can download it to a file in the api folder
$myjson = json_encode($jsonfile);

file_put_contents('myjson.json', $myjson);

?>