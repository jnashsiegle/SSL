<?php
/*
	* login.php
	* Jana Nash-Siegle
	* 12/2/2015
*/

/*** begin our session ***/
session_start();

/*** check if the user is already logged in ***/
if(isset( $_SESSION['user_id']))
{
	echo "Session Status:  User is already logged in<br />";
}

?>
<!DOCTYPE html>
<html>
<head lang = "en">
	<title>MySQL and PHP - Jana</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href = "css/style.css">
</head>
<body>

<?php

	// Setup Navigation
	echo "<a href = 'dashboard.php'>Dashboard</a>&nbsp;|&nbsp;";
	echo "<a href = 'logout.php'>Logout</a>&nbsp;<br /><br />";

	// Check to see if SESSION variables for username, password is null
	if ($_SESSION['pass_word'] != null && $_SESSION['user_name'] != null) {

		// Read in all form fields into an "associate array & 
		//return the array for processing output
		function makeArray()
		{
			$epass = $_SESSION['pass_word'];  // already salted from earlier
			$euser = $_SESSION['user_name'];
			$avatarfile = $_SESSION['avatar_file'];

			return array("username: " => $euser, "Hashed PASSWORD w/ Salt" => $epass, "Avatar" => $avatarfile);
		}
		// Output Login Details to User
		echo "<h2>User Profile Page - Welcome!</h2>";
		echo "<table width = 100% align = left border = 0><tr><td>";

		// Convert array into a variable
		$data = makeArray();

		//FOREACH for displaying Array Contents created in makeArray Function
		foreach ($data as $attribute => $data) {
			echo "<p align = left><font color = #FF4136>{$attribute}</font>: {$data}";
		}
		// If $_SESSION variable for avatar is NOT missing, show it...
		// Otherwise, give message:  no photo uploaded
		if (!empty($_SESSION['avatar_file'])){
			echo "<br /><br />Your Avatar Photo:  " . $_SESSION['avatar_file'];
			echo "<br /><br /><img src = '" . "uploads" . "/" .
				$_SESSION['avatar_file'] . "' width = '200'/>";
		}	else 	{
			echo "<br /><br />AVATAR: No Photo was uploaded";
		}
			echo "</td></tr></table>";
	}	else 	{
		echo "Sorry, you are not currently logged in. <br /><br />";
		echo "<a href = 'database_form.php'>Try again?</a><br /><br />";
	}

?>