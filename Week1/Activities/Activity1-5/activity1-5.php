<!DOCTYPE html>
<html>
<head lang = "en">
	<meta charset = "UTF-8">
	<title>form</title>
</head>
<body>

	<h2> Email Validation</h2>

	<?php
	if (isset($_POST['submit'])) {  // control reload errors if form hadn't been submitted yet
		echo "The following emails have been submitted: <br />";
	
	// let's set the values for the emails or assign defaults if empty
	//first the school email
		if(!empty($_POST["s_email"])) {
			$s_email = $_POST["s_email"];
			echo "<br />" . "School Email: {$s_email}" . "<br />";
		}	else 	{
			$s_email = "default email (no input)";
			echo "<br />" . "School Email: {$s_email}" . "<br />";
		}
		//Let's check the validity of the email details for the school email to 
		//make sure it contains fullsail.edu using preg_match
	if(preg_match("/fullsail.edu/", $s_email)){
		echo "{$s_email}" . " does contain fullsail.edu. <br />";
	}	else 	{
		echo "{$s_email}" . " does not contain fullsail.edu.<br />";
	}

		// now the personal email
		if(!empty($_POST['p_email'])) {
			$p_email = $_POST["p_email"];
			echo "<br />" . "Personal Email: {$p_email}" . "<br />";
		}	else 	{
			$p_email = "default email (no input)";
			echo "<br />" . "Personal Email: {$p_email}" . "<br />";
		}
	
		//Let's check the validity of the email details for the personal email.
		//checking personal email
	if(filter_var($p_email, FILTER_VALIDATE_EMAIL)) {
		echo "{$p_email}" . " is a valid email address.<br />";
	}	else 	{
		echo "{$p_email}" . " is not a valid email.<br />";
	}
	
//if Form was reloaded with no submit..load defaults
	}	else 	{
		echo "No emails submitted: ";
		$s_email = "default email (no input)";
		$p_email = "default email (no input)";
		echo "<br />" . "School Email: {$s_email}" . "<br />";
		echo "<br />" . "Personal Email: {$p_email}" . "<br />";
	}
?>
	


	



</body>
</html>