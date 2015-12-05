<?php
/*	=======================
	* 	Jana Nash-Siegle
	*	SSL - 151201
	*	Fruits | fruits.php
	*	12/4/2015
*/
// Setting up DB Username & Password
$user = 'root';
$pass = 'root';

// PDO
$db = new PDO('mysql:host=localhost;dbname=SSL;port=8889', $user, $pass);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$fruitName 	= $_POST['fruitName'];  //getting POST values
	$fruitColor = $_POST['fruitColor'];  //getting POST values
	$stmt      	= $db->prepare("INSERT INTO fruits (fruitName, fruitColor) VALUES (:fruitName, :fruitColor);");  //insert into and where the database

$stmt ->bindParam(':fruitName', $fruitName);
$stmt->bindParam(':fruitColor', $fruitColor);
$stmt->execute();
}	
?>

<!DOCTYPE html>
<html>
<head lang = "en">
	<meta charset = "UTF-8">
	<title>Fruits</title>
	<link rel = "stylesheet" href = "css/styles.css">
</head>
<body>
<article>
	<header>My Fruit Database App</header>
	<form enctype = "multipart/form_fruits" action = "fruits.php" method = "POST">
	<ul>
		<li>
			<fieldset>
				<legend>Fruit Name</legend>
					<input type = "text" name = "fruitName" value = "" required>
			</fieldset>
		</li>
		<li>
			<fieldset>
				<legend> Fruit Color</legend>
					<input type = "text" name = "fruitColor" value = "" required>
			</fieldset>
		</li>			
	</ul>
	<input type = "submit" name = "submit" value = "Submit" />
	</form>	

	<section class = "display">
	<table>
		<tr>
			<th>Fruit ID</th>
			<th>Fruit Name</th>
			<th>Fruit Color</th>
			<th>Action</th>
		</tr>

	<!--Query & Print Fruit records from dB with Delete Link -->

<?php
$stmt = $db->prepare('SELECT * FROM fruits order by id ASC;');

$stmt->execute();
$result = $stmt->fetchall(PDO::FETCH_ASSOC);
foreach ($result as $row) {
	echo '<tr><td>' . $row['id'] . '</td><td>' . $row['fruitName'] . '</td><td>' . $row['fruitColor'] . '</td><td><a href = "deletefruit.php?id=' . $row['id'] . '">Delete</a><br />';
}
?>
</table></section>
</article>
</body>
</html>