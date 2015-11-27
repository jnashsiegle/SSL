<!DOCTYPE html>
<html>
<head lang = "en">
	<meta charset = "UTF-8">
	<title>first page</title>
</head>
<body>
<h1>Welcome to my 1st Super Global Page!</h1>

<?php
	$link_name = "Visit Second Page"; ?>

<?php $id = 2015; ?>

<?php $company = "Full Sail is a great school!"; ?>

<a href = "second_page.php?id=<?php echo $id; ?>&company=<?php echo $company; ?>">
	<?php echo $link_name; ?></a>
	


</body>
</html>