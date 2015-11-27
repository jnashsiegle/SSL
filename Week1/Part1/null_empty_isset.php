<!DOCTYPE html>
<html>
<head lang = "en">
	<meta charset = "UTF-8">
	<title>null empty and isset</title>
</head>
<body>

	
<?php 
	$var1 = null;
	$var2 = "";
?>
var1 null? <?php echo is_null($var1); ?>  // 1= true <br />
var2 null? <?php echo is_null($var2); ?>  // nothing = false <br />
var3 null? <?php echo is_null($var3); ?>  // var3 "does not" exist; is_null is still TRUE, but includes a warning<br />

var1 is set? <?php echo isset($var1); ?> // nothing = false; null is considered "not set" <br />
var2 is set? <?php echo isset($var2); ?> // 1 = true; considered to be set -- even though its empty<br />
var3 is set? <?php echo isset($var3); ?> // nothing = false; doesn't exist, so its NULL and is "not set"



<?php  //PHP considers these values as empty: "", null, 0, 0.0, "0", false, array() ?>

<?php $var3 = "0"; ?>
var1 empty? <?php echo empty($var1); ?>  // null is considered null and EMPTY<br />
var2 empty? <?php echo empty($var2); ?>  // considered EMPTY<br />
var3 empty? <?php echo empty($var3); ?>  // set to "0" is the same as empty<br />

</body>
</html>