<?php
/*
* 	======================================
*	PROJECT:  	SSL - LAB 03 PREP
*	FILE: 		views/results.php
*	AUTHOR:		Jana Nash-Siegle
*	CREATED: 	12/2/2015
*	======================================
*/
?>
<?
	// Captcha Check //
	// Check to see if the array key "captcha exists in $_SESSION Super Global"
		if(array_key_exists('captcha', $_SESSION)) {
			echo "Yes captcha exists! <br /><br />";
		}

	// Store Captcha input in Session Variable for Verification Later;
		$captchaInput = $_POST['captcha'];
		$captchaVerify = $_SESSION['captcha'];
		// end Captcha Overview; //

		// Check to see if the form input ($_POST) matches what's in the SESSION Variable
		if ($captchaInput == $captchaVerify) {
			echo "Congratulations!!!! You are HUMAN & your Captcha is working.<br /><br />";
			echo "<a href = 'index.php'>Try Again?</a><br /><br />";
		}	else 	{
			echo "OOPSY...Something is WRONG with your Captcha input!  Sorry...<br /><br />";
			echo "You may have entered the wrong word...or you did not pass the Human Check (Captcha), it is case-sensitive.
			Please Try Again...<br /><br />";
			echo "<a href = 'index.php'>Try Again?</a><br /><br />";	
		}
		?>

		<pre>
		<?php
		print_r(get_defined_vars()); //shows all our variables
		?>
		</pre>