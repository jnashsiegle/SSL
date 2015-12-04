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

// Grab userid from previous page using $_GET;
$userid = $_GET['id'];

// Setup Navigation
echo "&nbsp; | &nbsp;<a href = 'profile.php'>My Profile</a>&nbsp; | &nbsp;";
echo "<a href = 'dashboard.php'>'Delete More?'</a>";

if(isset($_POST['submit'])){

	// Establish DB Connection
	$user = 'root';
	$pass = 'root';
	// Establish PDO & DSN Connection to Database
	$dbh = new PDO('mysql:host=localhost;dbname=ssl;port=8889', $user, $pass);

	// Use $_GET t0 confirm userid
	$userid = $_GET['id'];

	// Use PREPARE to delete userid //
	$stmt = $dbh->prepare("DELETE FROM users101 where userid IN (:userid)");

	$stmt->bindParam(':userid', $userid);
	$stmt->execute();

	header('location: dashboard.php');
	
}

?>
<h2>Delete User Console</h2>
<br /><br />Are you sure you want to delete User ID <?php echo '"'.$userid.'"'; ?> ?<br /><br />

<form action = "" method = "post">
	If so, click yes... <input type = 'submit' name = 'submit' value = "yes, Delete it Now!" />
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