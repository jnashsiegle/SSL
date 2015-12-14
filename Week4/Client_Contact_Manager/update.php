<?php
// Establish DB Connection
$user = 'root';
$pass = 'root';

// Establish PDO & DSN Connection to Database

$dbh = new PDO('mysql:host=localhost;dbname=SSL;port=8889', $user, $pass);
 
// Grab Requested Client ID & record where ID equals;
$id = $_GET['id'];
// "Select All" fields for matching user for later PRE-populating/updating
$stmt = $dbh->prepare("SELECT * FROM clients where id = :id");
$stmt->bindParam(':id', $id);
$stmt->execute();
$result = $stmt->fetchall(PDO::FETCH_ASSOC);

if(isset($_POST['submit'])){
	$id = $_GET['id'];
	$f_name = $_POST['f_name'];
	$l_name = $_POST['l_name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$url = $_POST['url'];

try {
$dbh = new PDO('mysql:host=localhost;dbname=SSL;port=8889', $user, $pass);
echo "Contact Information Update Successful";
$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
 {
echo $e->getMessage();
   }

	$stmt = $dbh->prepare("UPDATE clients SET f_name = '".$f_name."', l_name = '".$l_name."',phone = '".$phone."', email = '".$email."', url = '".$url."'  WHERE id = '".$id."'; ");
	$stmt->execute();
	header('Location: client.php?success=1');
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
	<form enctype="multipart/form_clients" action = "" id = "update"  method="POST">
	<?php 
	//while ($row = $result->fetch_assoc()) ?>
	<h2>Update Client Information</h2>
	<div class="formGroup">
			<label>First Name</label>
			<input type="text" name="f_name" value = <?php echo '"' . $result[0]['f_name'].'"';?> required>
		</div>
	<div class="formGroup">
			<label>Last Name</label>
			<input type="text" name="l_name" value = <?php echo '"' . $result[0]['l_name'].'"';?>>
	</div>
	<div class="formGroup">
			<label>Phone</label>
			<input type='tel' name="phone" value = <?php echo '"' . $result[0]['phone'].'"';?> required>
	</div>
	<div class="formGroup">
			<label>Email</label>
			<input type="email" name="email" value = <?php echo '"' . $result[0]['email'].'"';?> required>
	</div>
	<div class="formGroup">
			<label>Website</label>
			<input type="url" name="url" value = <?php echo '"' . $result[0]['url'].'"';?> required>
	</div>	
		<input type="reset" name = "reset" value="Reset">
		<input type="submit" name = "submit" value = "Update">
	</form>

		
	</article>
	</body>
	</html>