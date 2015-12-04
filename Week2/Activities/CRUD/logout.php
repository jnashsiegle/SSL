<?php

/*
*	========================================
*	PROJECT:	SSL 
*	CRUD - Class Analysis (logout.php)
*	AUTHOR:  Jana Nash-Siegle
*	========================================
\*/

/*** begin our session ***/
session_start();

//Unset all of the session variables.
session_unset();

//Destroy the session
session_destroy();
?>
<!DOCTYPE html>
<html>
<head lang = "en">
	<title>Logged Out</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href = "css/style.css">
</head>
<body>
<h2>You are now logged out.  See ya next time!</h2>
<a href = 'database_form.php'>Login</a>&nbsp;&nbsp;
<a href = 'dashboard.php'>Dashboard</a>&nbsp;&nbsp;<br /><br />

<pre>
	<?php
	print_r(get_defined_vars());
	?>
</pre>
<br />
</body>
</html>


?>