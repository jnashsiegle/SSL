<?php
//pull data from a database via PDO

$user = 'root';
$pass = 'root';
$dbh = new PDO('mysql:host=localhost;dbname=ssl;port=8889', $user, $pass);

$sql = "select id, fruitName, fruitColor from fruits order by fruitColor";

$stmnt = $dbh->prepare($sql);

$stmnt->execute();

$result = $stmnt->fetchAll();

//let's do it in XML
header("Content-type:text/xml");
$xmlfile = '<?xml version="1.0" encoding="UTF-8"?>';
$xmlfile .= '<fruits>';
foreach($result as $fruit){
	$xmlfile .= "<id>".$fruit["id"]."</id>";
	$xmlfile .= "<fruitName>".$fruit["fruitName"]."</fruitName>";
	$xmlfile .= "<fruitColor>".$fruit["fruitColor"]."</fruitColor>";
	
};
$xmlfile .= '</fruits>';
echo $xmlfile;

//the following three lines will save as a physical file on the harddrive, in this same location as the api.
$dom = new DOMDocument("1.0");
$dom->loadXML($xmlfile);
$dom->save("myxml.xml");
?>