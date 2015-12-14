<?php
/*
	* dashboard.php
	* Jana Nash-Siegle
	* 12/2/2015
*/

/*** begin our session ***/
session_start();

//	if the $_SESSION variable "user_name" is not empty, give welcome...
if(!empty($_SESSION["user_name"])){
	?>
	Welcome <br /><?php echo $_SESSION["user_name"]; ?><br />! ~
	Click here to <a href = "logout.php">Logout</a>&nbsp;&nbsp;

	<?php
	//	and store other session variables from Super Global $_SESSION
	$user_id = $_SESSION['user_id'];
	$usernameInput = $_SESSION['user_name'];
	$passwordInput = $_SESSION['pass_word'];
	$avatarfile = $_SESSION['avatar_file'];
}
?>

<!-- Starting HTML -->

<!DOCTYPE html>
<html lang = "en">
<head>
	<title>MySQL &amp; PHP - by Jana</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href = "css/style.css">
</head>
<body>

	<?php

	// If the $_SESSION user_id is NOT set, restrict user access immediately!
	if(!isset($_SESSION['user_id']))
	{
		echo "<h2>Users101 Dashboard</h2>";
		echo "Sorry - You must be logged in to access this area!<br />";
		echo "<a href = 'database_form.php'>Try Logging in</a>...";
	}	else 	{
		//	else, give user access to full Dashboard
		// Allow user to return to profile page...

		echo "<a href ='profile.php'>My Profile</a>";
		echo "<h2>Users101 Dashboard</h2>";
		echo "<table width = 80% align = center>";
		echo "<tr>";
		echo "<th>User ID</th>";
		echo "<th>User Name</th>";
		echo "<th>Password</th>";
		echo "<th>Profile Photo</th>";
		echo "<th>Action</th></tr>";

		// Setup DB Username & Password
		$user = 'root';
		$pass = 'root';
		$salt = "SuperJanaSaltHash";

		// Establish PDO & DSN Connection to Database
		$dbh = new PDO('mysql:host=localhost;dbname=SSL;port=8889', $user, $pass);

		// Read EVERYTHING in database, and sort from A-Z
		$stmt = $dbh->prepare('SELECT * FROM users101 order by userid ASC;');
		$stmt->execute();
		$result = $stmt->fetchall(PDO::FETCH_ASSOC);

			foreach ($result as $row) {
				echo '<tr><td>' . $row['userid'] . '</td><td>' . $row['username'] . '</td><td>' . 
				$row['password'] . '</td><td>' . $row['avatar'] . '</td><td><a href = "deleteuser.php?id=' .
				$row['userid'] . '">Delete</a></td><td><a href = "updateuser.php?id=' .
				$row['userid'] . '">Update</a></td>';
			}	
	}
	echo "</tr></table>";

?>


</body>
</html>