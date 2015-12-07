<?php
//pull data from a database via PDO

$user = 'root';
$pass = 'root';
$dbh = new PDO('mysql:host=localhost;dbname=ssl;port=8889', $user, $pass);

$sql = "select fruitName, fruitColor from fruits order by fruitName";

$stmnt = $dbh->prepare($sql);

$stmnt->execute();

$result = $stmnt->fetchAll();

//simply display a list of fruit names
/*
foreach($result as $fruit){
	echo $fruit["fruitName"]."<br />";
};
*/
//Lets' make it a json object
//header("Content-type:application/json");
//echo json_encode($result);

//let's do it in XML
header("Content-type:text/xml");
$xmlfile = '<?xml version="1.0" encoding="UTF-8"?>';
$xmlfile .= '<fruits>';
foreach($result as $fruit){
	$xmlfile .= '<fruits>';
	$xmlfile .= "<fruitName>".$fruit["fruitName"]."</fruitName>";
	$xmlfile .= '</fruits>';
};
$xmlfile .= '</fruits>';
echo $xmlfile;

?>