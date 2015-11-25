<!DOCTYPE html>
<html>
<head lang = "en">
	<meta charset = "UTF-8">
	<title>associative arrays</title>
</head>
<body>


<?php $assoc = array("first_name" => "Jana", "last_name" => "Siegle"); ?>
<?php echo $assoc["first_name"]; ?><br />
<?php echo $assoc["first_name"] . " " . $assoc["last_name"]; ?><br />
	
<?php $assoc["first_name"] = "Chris"; ?>
<?php echo $assoc["first_name"] . " " . $assoc["last_name"]; ?>  //only the first_name was reset, not the last_name<br /> 

<?php $numbers = array(4,8,15,16,23,42); ?>  //basic array
<?php $numbers = array(09 => 4, 1 => 8, 2 => 15, 3 => 16, 4 => 23, 5 => 42); ?>  //same array as an associative array
<?php echo $numbers[0]; ?> //Both the basic array & associative array would give you the same value


	





</body>
</html>