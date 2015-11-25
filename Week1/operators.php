<!DOCTYPE html>
<html>
<head lang = "en">
	<meta charset = "UTF-8">
	<title>operators</title>
</head>
<body>


<?php
$a = 4;
$b = 3;
$c = 1;
$d = 20;
if (($a >= $b) || ($c >= $d)) {
	echo "a is larger than b OR ";
	echo "c is larger than d";
}

?>
<br /><br />
<?php
$a = 4;
$b = 3;
$c = 20;
$d = 1;
if (($a >= $b) && ($c >= $d)) {
	echo "a is larger than b AND ";
	echo "c is larger than d";
}

?>	
<br /><br />(NOT:!isset)<br />

<?php
$e = 100;
if (!isset($e)) {
	$e = 200;
}
echo $e;
?>
<br /><br />
<?php
//$f = 100;  <--commented out default value so e is no longer set 
if (!isset($f)) {
	$f = 200;
}
echo $f;
?>
<br /> <br />

<?php
//don't reject 0 or 0.0 -- or other empty form values
$quantity  = "";
if (empty($quantity) && !is_numeric($quantity)) {
	echo "You must enter a quantity.";
}
?>
<br /><br />
<?php
//don't reject 0 or 0.0 -- or other empty form values or non-numeric values
$quantity  = "A";
if (empty($quantity) || !is_numeric($quantity)) {
	echo "You must enter a quantity.";
}
?>


</body>
</html>