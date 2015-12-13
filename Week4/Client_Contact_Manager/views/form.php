<?php
/*
* 	======================================
*	PROJECT:  	SSL - LAB 03 PREP
*	FILE: 		views/form.php
*	AUTHOR:		Jana Nash-Siegle
*	CREATED: 	12/2/2015
*	======================================
*/
?>

Are you human?  If so, please enter the phrase below: <br /><br />

	<form action = "index.php?action=captchaVerify" method = "POST">

			Enter Phrase Here:
			<input type = "text" name = "captcha" /><br /><br />
			<img src = "http://localhost:8888/SSL/Week2/Activities/basic_mvc_app/views/captcha.php" />
			<br /><br />
			<input type = "submit" name = "submit" value = "Submit" />
	</form>

