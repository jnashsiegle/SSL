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

// Establish DB Connection
$user = 'root';
$pass = 'root';
$salt = "SuperJanaSaltHash";

// Establish PDO & DSN Connection to Database
$dbh = new PDO('mysql:host=localhost;dbname=SSL;port=8889', $user, $pass);

// Grab Requested Client ID & record where ID equals;
$userid = $_GET['id'];

// "Select All" fields for matching user for later PRE-populating/updating
$stmt = $dbh->prepare("SELECT * FROM users101 where userid = :userid");
$stmt->bindParam(':userid', $userid);
$stmt->execute();
$result = $stmt->fetchall(PDO::FETCH_ASSOC);

// Setup Navigation
echo "&nbsp; | &nbsp;<a href = 'profile.php'>My Profile</a>&nbsp; | &nbsp;";
echo "<a href = 'dashboard.php'>Update More?</a>";

// Validate/filter the $_GET URL entered by User;
// Then, execute MySQL Update & return to dashboard.php page
if(isset($_POST['submit'])){

	$userid = $_GET['id'];
	$username = $_POST['user'];
	$stmt=$dbh->prepare("UPDATE users101 SET username = '".$username."' WHERE userid = '".$userid."';");
	$stmt->execute();

	header('Location: dashboard.php');
}

?>
<h2>Update User Console</h2>

<form action = "" method = "post">
	You are about to edit the following USERNAME:<input type = "text" name = "user" value = <?php echo '"'.$result[0]['username'].'"'; ?> /><br />
	<input type = 'submit' name = 'submit' value = "Update Database" />
</form>

<hr>
<br /><br /><br /><br />
<pre>
<?php
print_r(get_defined_vars());
?>
</pre>
<br />

</body>
</html>