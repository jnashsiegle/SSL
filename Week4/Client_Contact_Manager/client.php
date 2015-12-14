<?php
	// Setting up DB Username & Password
$user = 'root';
$pass = 'root';

// PDO
$db = new PDO('mysql:host=localhost;dbname=SSL;port=8889', $user, $pass);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$f_name 	= $_POST['f_name'];  //getting POST values
	$l_name 	= $_POST['l_name'];  //getting POST values
	$phone		= $_POST['phone']; // getting POST values
	$email 		= $_POST['email'];  //getting POST values
	$url 		= $_POST['url']; //getting POST valuesw
	$stmt      	= $db->prepare("INSERT INTO clients (f_name, l_name, phone, email, url) VALUES (:f_name, :l_name, :phone, :email, :url);");  //insert into and where the database

$stmt ->bindParam(':f_name', $f_name);  //bind variables to db
$stmt->bindParam(':l_name', $l_name); 
$stmt ->bindParam(':phone', $phone);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':url', $url);
$stmt->execute();
header('Location: client.php?success=1');  //
}	



/*
* 	======================================
*	PROJECT:  	SSL - Week 4 finals
*	FILE: 		client.php
*	AUTHOR:		Jana Nash-Siegle
*	CREATED: 	12/13/2015
*	======================================
*/
if ( isset($_GET['success']) && $_GET['success'] == 1 )
{
     // treat the succes case ex:
     echo "Success";
}

?>
<!DOCTYPE html>
<html>
<head lang = "en">
	<meta charset = "UTF-8">
	<title>Client Contact Manager</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<link rel = "stylesheet" href = "public/css/normalize.css">
	<link rel = "stylesheet" href = "public/css/style.css">
</head>
<body>

<article id = "main">
	<header>
		<section id = "clientList">
			<h1>Client Contact Manager</h1>
				<h2>for: Jana Nash-Siegle</h2>
		</section>
	</header>

	<!-- Window for add new client contact form --> 
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
			<input type="url" name="url" placeholder = "http://..." required>
	</div>	
		<input type="reset" name = "reset" value="Reset">
		<input type="submit" name = "submit" value = "Submit">
	</form>
	</div>
	</div>

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

$stmt = $db->prepare('SELECT * FROM clients order by l_name ASC;');

$stmt->execute();
$result = $stmt->fetchall(PDO::FETCH_ASSOC);

foreach ($result as $row) {
$url = '<a href="' . $row['url'] . '" target="_blank"> ' . $row['url'] . ' </a>';
$email = '<a href="mailto:' . $row['email'] . '" target="_blank"> ' . $row['email'] . ' </a>';
$username = $row['f_name'] . " " . $row['l_name'];

echo '<tr><td>' . $username . '</td><td>' . substr($row['phone'],0,3) . ' ' . substr($row['phone'],3,3) . '-' . substr($row['phone'],6,4) . '</td><td>' . $email . '</td><td>' . $url . 
'</td><td><a href = "delete.php?id=' . $row['id'] . '">Delete</a></td><td><a href = "update.php?id=' . $row['id'] . '">Update</a><br />';
}
?>

</table>
</section>
	
	</article>
	</body>
	</html>