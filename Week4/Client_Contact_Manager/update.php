<?php
// Establish DB Connection
$user = 'root';
$pass = 'root';

// Establish PDO & DSN Connection to Database
$dbh = new PDO('mysql:host=localhost;dbname=SSL;port=8889', $user, $pass);

/*** set the error reporting attribute ***/
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// Grab Requested Client ID & record where ID equals;
$id = $_GET['id'];
// "Select All" fields for matching user for later PRE-populating/updating
$stmt = $dbh->prepare("SELECT * FROM clients where id = :id");
$stmt->bindParam(':id', $id);
$stmt ->bindParam(':f_name', $f_name);  //bind variables to db
$stmt->bindParam(':l_name', $l_name); 
$stmt ->bindParam(':phone', $phone);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':url', $url);
$stmt->execute();

$result = $stmt->fetchall(PDO::FETCH_ASSOC);

if (isset($_GET['submit'])) {
	$id = $_GET['id'];
	$f_name = $_GET['f_name'];
	$l_name = $_GET['l_name'];
	$phone = $_GET['phone'];
	$email = $_GET['email'];
	$url = $_GET['url'];

	$stmt = $dbh->prepare("UPDATE clients SET f_name = '".$f_name."', l_name = '".$l_name."',phone = '".$phone."', email = '".$email."', url = '".$url."', WHERE id = '".$id."'; ");
	$stmt->execute();
	header('Location: client.php');
	die("Update Failed");
}

/*
* 	======================================
*	PROJECT:  	SSL - Week 4 finals
*	FILE: 		update.php
*	AUTHOR:		Jana Nash-Siegle
*	CREATED: 	12/13/2015
*	======================================
*/
?>
<!DOCTYPE html>
<html>
<head lang = "en">
	<meta charset = "UTF-8">
	<title>Client Contact Manager</title>
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
	<form enctype="multipart/form_clients" id = "update"  method="POST">
	<?php 
	//while ($row = $result->FETCH_ASSOC()) ?>
	<h2>Add New Client</h2>
	<div class="formGroup">
			<label>First Name</label>
			<input type="text" name="f_name" value = <?php echo '"' . $row['f_name'].'"';?> required>
		</div>
	<div class="formGroup">
			<label>Last Name</label>
			<input type="text" name="l_name" value = <?php echo '"' . $row['l_name'].'"';?>>
	</div>
	<div class="formGroup">
			<label>Phone</label>
			<input type='tel' pattern='[\+]\d{2}[\(]\d{2}[\)]\d{4}[\-]\d{4}' title='Phone Number (Format: +99(99)9999-9999)' name="phone" value = <?php echo '"' . $result[0]['phone'].'"';?> required>
	</div>
	<div class="formGroup">
			<label>Email</label>
			<input type="email" name="email" value = <?php echo '"' . $row['email'].'"';?> required>
	</div>
	<div class="formGroup">
			<label>Website</label>
			<input type="url" name="url" value = <?php echo '"' . $row['url'].'"';?> required>
	</div>	
		<input type="reset" name = "reset" value="Reset">
		<input type="submit" name = "submit" value = "Submit">
	</form>

		
	</article>
	</body>
	</html>