<!DOCTYPE html>
<html>
<head lang = "en">
	<meta charset = "UTF-8">
	<title>boolean</title>
</head>
<body>

	
<?php 
	$result1 = true;
	$result2 = false;
?>
Result1: <?php echo $result1; ?>  // 1 = true<br />
Result2: <?php echo $result2; ?>  // nothing = false<br />

result2 is boolean? <?php echo is_bool($result2); ?>  // 1 = true
<br />

<?php 
	$number = 3.14;
	if( is_float($number) ) {
		echo "It is a float.";
	}
?>  // preview to conditionals



</body>
</html>