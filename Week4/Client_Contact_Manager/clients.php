<?php

/*	Jana Nash-Siegle
	SSL
	ads.php
*/

// Setting up DB Username & Password
$user = 'root';
$pass = 'root';

// PDO
$db = new PDO('mysql:host=localhost;dbname=SSL;port=8889', $user, $pass);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$f_name 	= $_POST['f_name'];  //getting POST values
	$l_name = $_POST['l_name'];  //getting POST values
	$email = $_POST['email'];  //getting POST values
	$url = $_POST['url'];  //getting POST values
	$stmt      	= $db->prepare("INSERT INTO clients (f_name, l_name, email, url) VALUES (:f_name, :l_name, :email, :url);");  //insert into and where the database

$stmt ->bindParam(':f_name', $f_name);  //bind variables to db
$stmt->bindParam(':l_name', $l_name);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':url', $url);
$stmt->execute();
}	
?>
	
<!-- Setting up the form and the display -->
<!DOCTYPE html>  
<html>
<head lang = "en">
	<meta charset = "UTF-8">
	<title>Client Contact Manager</title>
	<link rel = "stylesheet" href = "public/css/normalize.css">
	<link rel = "stylesheet" href = "public/css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<article>
	<header>

		<section id = "clientList">
			<h1>Client Contact Manager</h1>
				<h2>Jana Nash-Siegle</h2>
		</section>
	</header>
	<form enctype="multipart/form-data" action="newuser.php" method="POST">
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
			<label>Email</label>
			<input type="email" name="email" placeholder = "Valid Email Address" required>
	</div>
	<div class="formGroup">
			<label>Website</label>
			<input type="url" name="website" placeholder = "http://..." required>
	</div>
	<div class="formGroup">
			<label>Profile Picture</label>
	<!-- MAX_FILE_SIZE must precede the file input field -->
    	<input type="hidden" name="MAX_FILE_SIZE" value="300000" />
    <!-- Name of input element determines name in $_FILES array -->
		<input type="file" name="userfile" type="file" />    	
	</div>
		<input type="reset" name = "reset" value="Reset">
		<input type="submit" name = "submit" value = "Submit">
	</form>
	<section class = "display">
	<table>
		<tr>
			<th>Last Name</th>
			<th>First Name</th>
			<th>Email</th>
			<th>WebSite</th>
			<th>Action</th>
		</tr>

	<!--Query & Print Fruit records from dB with Delete Link -->

<?php
$stmt = $db->prepare('SELECT * FROM clients order by l_name ASC;');

$stmt->execute();
$result = $stmt->fetchall(PDO::FETCH_ASSOC);

//Fruit LOOP for ADS upon Page Refresh 

foreach ($result as $row) {
$url = '<a href="' . $row['url'] . '" target="_blank"> ' . $row['url'] . ' </a>';
$email = '<a href="mailto:' . $row['email'] . '" target="_blank"> ' . $row['email'] . ' </a>';
echo '<tr><td>' . $row['l_name'] . '</td><td>' . $row['f_name'] . '</td><td>' . $email . '</td><td>' . $url . 
'</td><td><a href = "deletefruit.php?id=' . $row['id'] . '">Delete</a><br />';
}


?>
</table></section>
</article>
<!--<script src="js/script.js"></script> -->
</body>
</html>