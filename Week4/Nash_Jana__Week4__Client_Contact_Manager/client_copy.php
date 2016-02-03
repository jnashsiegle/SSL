<?php

/*
* 	======================================
*	PROJECT:  	SSL - Week 4 finals
*	FILE: 		client_copy.php
*	AUTHOR:		Jana Nash-Siegle
*	CREATED: 	12/13/2015
*	======================================
*/

session_start();
if(isset($_SESSION['notice']))
{
	echo $_SESSION['notice'];
	unset($_SESSION['notice']);

	// Setting up DB Username & Password
}
$user = 'root';
$pass = 'root';
$mysql = 'mysql:host=localhost;dbname=SSL;port=8889';
$dbh = new PDO($mysql, $user, $pass);

// Checking POST || Validating || Post Insert -> database

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	if(!filter_var($_POST['url'], FILTER_VALIDATE_URL))
	{
		echo "<div class = 'notice2'>The entered URL is not valid!</div>";
	}else{
		$_SESSION['notice'] = "<div class = 'notice'>Contact added successfully!</div>";
	$db = new PDO($mysql, $user, $pass);
	$f_name 	= $_POST['f_name'];  //getting POST values
	$l_name 	= $_POST['l_name'];  //getting POST values
	$phone		= $_POST['phone']; // getting POST values
	$email 		= $_POST['email'];  //getting POST values
	$url 		= $_POST['url']; //getting POST valuesw
	$stmt      	= $dbh->prepare("INSERT INTO clients (f_name, l_name, phone, email, url) VALUES (:f_name, :l_name, :phone, :email, :url);");  //insert into and where the database
	$stmt ->bindParam(':f_name', $f_name);  //bind variables to db
	$stmt->bindParam(':l_name', $l_name); 
	$stmt ->bindParam(':phone', $phone);
	$stmt->bindParam(':email', $email);
	$stmt->bindParam(':url', $url);
	$stmt->execute();
	
	header('Location: client.php'); //redirecting back to the original client page
	exit();
	}
}	
?>
<!DOCTYPE html>
<html>
<head lang = "en">
	<meta charset = "UTF-8">
	<title>Client Contact Manager</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel = "stylesheet" href = "public/css/normalize.css">
	<link rel = "stylesheet" href = "public/css/style_copy.css">
</head>
<body>

<article id = "main">
	<header>
		<section id = "clientList">
			<h1>Client Contact Manager</h1>
				<h2>for: Jana Nash-Siegle</h2>
		</section>
	</header>

	<!-- Modal for add new client contact form --> 
	<a href="#openModal"><i class="fa fa-user-plus"></i>Add New Client</a>

	<div id="openModal" class="modalDialog">
	<div><a href="#close" title="Close" class="close">X</a>
	<form enctype="multipart/form_clients" id = "form_clients" action="client.php" method="POST">
	<h2>Add New Client</h2>
	<div class="formGroup">
			<label>First Name</label>
			<input type="text" name="f_name" placeholder = "First Name" required>
		</div>
	<div class="formGroup">
			<label>Last Name</label>
			<input type="text" name="l_name" placeholder = "Last Name" required>
	</div>
	<div class="formGroup">
			<label>Phone</label>
			<input type='tel' name="phone" placeholder = "Valid Phone Number" required>
	</div>
	<div class="formGroup">
			<label>Email</label>
			<input type="email" name="email" placeholder = "Valid Email Address" required>
	</div>
	<div class="formGroup">
			<label>Website</label>
			<input type="url" name="url" value = "http://" required>
	</div>	
	<div class = "formGroup">
		<input type="reset" name = "reset" value="Reset">
		<input type="submit" name = "submit" value = "Save">
	</div>
	</form>
	</div>
	</div>
<!--Let's set up our display of client information -->
	<section class = "display">

	<table>
		<tr>			
			<th>Username</th>
			<th>Phone</th>
			<th>Email</th>
			<th>WebSite</th>
			<th>Action</th>
			<th>Action</th>
		</tr>
<?php
//retrieve data to slip into variables with the client list, sorted by last name
$stmt = $dbh->prepare('SELECT * FROM clients order by l_name ASC;');

$stmt->execute();
$result = $stmt->fetchall(PDO::FETCH_ASSOC);

foreach ($result as $row) {
$url = '<a href="' . $row['url'] . '" target="_blank"> ' . $row['url'] . ' </a>';
$email = '<a href="mailto:' . $row['email'] . '" target="_blank"> ' . $row['email'] . ' </a>';
$username = $row['f_name'] . " " . $row['l_name'];

echo '<tr><td>' . $username . '</td><td>' . substr($row['phone'],0,3) . ' ' . substr($row['phone'],3,3) . '-' . substr($row['phone'],6,4) . '</td><td>' . $email . '</td><td>' . $url . 
'</td><td><a href = "delete.php?id=' . $row['id'] . '"><button id = "delete">Delete</button></a></td><td><a href = "update.php?id=' . $row['id'] . '">Update</a><br />';
}

?>

</table>
</section>
</article>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

<script>
	(function ($) {
		$('.notice').fadeIn().delay(3000).fadeOut();
		$('.notice2').fadeIn().delay(3000).fadeOut();

		//Delete Button confirmation

		$('#delete').click(function() {
			return window.confirm(this.title || 'Are you sure you want to delete this contact?');
		});

	})(jQuery);
</script>

</body>
</html>