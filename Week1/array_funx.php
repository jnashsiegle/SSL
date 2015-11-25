<!DOCTYPE html>
<html>
<head lang = "en">
	<meta charset = "UTF-8">
	<title>array functions</title>
</head>
<body>

	
<?php $numbers = array(8,23,15,42,16,4); ?>

Count:  	<?php echo count($numbers); ?><br />
Max Value: 	<?php echo max($numbers); ?><br />
Min Value: 	<?php echo min($numbers); ?><br />

<pre>
Sort: 		<?php sort($numbers); print_r($numbers); ?><br />
Reverse Sort: <?php rsort($numbers); print_r($numbers); ?><br />
</pre>	

Implode: <?php echo $num_string = implode(" * ", $numbers); ?>  // Turns an array into a string separated by a char<br />
Explode: <?php print_r(explode(" * ", $num_string)); ?>  // Turns a string into an array using a separator<br />


15 in array?: <?php echo in_array(15, $numbers); // returns T/F ?> // 1 = true<br />
19 in array?: <?php echo in_array(19, $numbers); // returns T/F ?> // nothing = false<br />


</body>
</html>