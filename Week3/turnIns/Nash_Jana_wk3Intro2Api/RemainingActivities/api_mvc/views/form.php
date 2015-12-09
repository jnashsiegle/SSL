<?php
/*
* 	======================================
*	PROJECT:  	SSL - LAB 09 PREP
*	FILE: 		views/form.php
*	AUTHOR:		Jana Nash-Siegle
*	CREATED: 	12/8/2015
*	======================================
*/
?>

<h1>Jana's Weather App</h1>
<hr><br />
<h2>Welcome!</h2>

<h3>Wanna know what today's weather is?</h3>
<p>Try a Zip Code:
	<form action = "?action=lookup" method = "POST">

			<input type = "text" name = "tf_zip" value="" /><br /><br />
			<input type = "submit" name = "submit" value = "Lookup Now!" />
	</form>

