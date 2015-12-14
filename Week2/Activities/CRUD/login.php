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

// Setup DB Username & Password
$user = 'root';
$pass = 'root';
$salt = "SuperJanaSaltHash";

// Establish PDO & DSN Connection to Database
$dbh = new PDO('mysql:host=localhost;dbname=SSL;port=8889', $user, $pass);

// Test if 1st form has the empty fields;
// If not, grab the username & password & bind to DB parameters
if ($_POST['username_li'] != null & $_POST['password_li'] != null){
	// Grab Form Input
	$usernameInput = $_POST['username_li'];
	$passwordInput = md5($_POST['password_li'] . $salt);

	// Prepare the statement; Find the record that matches the username & password;
	$sth = $dbh->prepare('select userid, username, password, avatar from users101
		where username = :username and password = :password');
	$sth->bindParam(':username', $usernameInput);
	$sth->bindParam(':password', $passwordInput);
	$sth->execute();
	$result = $sth->fetchAll();

	// If the result of the 1st array item contains a 'userid',
	// let the user know they have successfully logged in.
	if (isset($result[0]['userid'])){

		//	BEGIN Session Processor
		//	Grab results of earlier select statement
			$user_id = $result[0]['userid'];
			$avatarfile = $result[0]['avatar'];

		/*** set the session user_id variable & others ***/
			$_SESSION['user_id'] = $user_id;
			$_SESSION['user_name'] = $usernameInput;
			$_SESSION['pass_word'] = $passwordInput;
			$_SESSION['avatar_file'] = $avatarfile;
			echo "Session Check: You are now logged in<br /><br />";
		//	END SESSION Processor 


		echo "Congratulations!!! You have successfully logged in.  Enjoy! :-) <br />";
		echo "<a href = 'dashboard.php'>Dashboard</a>&nbsp;&nbsp;<br /><br />";
		echo "<a href = 'logout.php'>LogOut</a>&nbsp;&nbsp;<br /><br />"; 

		// Use userid to look up username & profile photo
		foreach ($result as $row) {
			// Prepare/Bind/Execute and grab rfesults to echo $row['userid']. "<br />";
			$sth = $dbh->prepare('select username, avatar from users101 where userid = :userid');
			$sth -> bindParam(':userid', $row['userid']);
			$sth -> execute();
			$result = $sth->fetchAll();

			//Optional Analysis:
			//print_r($result[0]['username']);
		
			//Store each row found in the $results
			echo "<p>";
			$userid = $row['userid'];
			foreach ($result as $row){
				$photo = $row['avatar'];
				$username = $row['username'];
			};

			//echo out the profile photo and give user an option to logout
			if (!empty($photo)){
				echo "<img src = \"uploads/" . $photo . "\" width = \"200\" class = \"right userPhoto\"/><br />";
			}	else 	{
				echo "AVATAR STATUS:  You did not provide an avatar photo during sign-up.";
			}

			echo "</p>";
			echo "<ul class = \"right userSection\">
					<li>Your User ID is:  ".$userid."</li>
					<li>Your Username is:  ".$username."</li>
					</ul>";
			};  // Close out the FIRST (1st) foreach LOOP!

		}	else {
			// else let user know their login failed
			echo "So Sorry - Your Login Failed! <br />The User Name or Password is incorrect.  Please try again...<br />";
			echo "<a href = 'database_form.php'>Go Back?</a><br /><br />";
		}  //Close out the INNER "IF" statement (2nd IF statement)

} 	else 	{ //Else for OUTER-Parent "IF" statement (1st IF statement)
	echo "Sorry, you must submit both LOGIN fields to proceed.<br /><br />";
	echo "<a href = 'database_form.php'>Try again?</a><br /><br />";

}	// Close out the OUTER Parent 'IF' statement (1st IF statement)
?>