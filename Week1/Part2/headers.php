<!DOCTYPE html>
<html>
<head lang = "en">
	<meta charset = "UTF-8">
	<title>headers</title>
</head>
<body>

<?php
//if HTTP Header changes are placed ** below ** HTML...
// The value won't change--unless we turn on output buffering. Temp fix is to put it above all the html up at top of page, but then you would have to do it for EVERY SINGLE php page
header("X-Powered-By:  None of your business");
?>
<!--output buffering is now turned on via the php.ini file. -->

<pre>
	<?php
		//Using 'headers_list" function
	//with print_r() allows us to see header values
	print_r(headers_list());
	?>
</pre>
</body>
</html>
