<?php

/*	Jana Nash-Siegle
	SSL
	ads.php
*/

// FRUIT OF THE DAY API CALL
$spotFruit = file_get_contents("http://localhost:8888/SSL/Week3/FruitAds/Nash_Jana_FruitAds_Wk3/fruitget.php");
// decode result 
$spotFruit = json_decode($spotFruit)[0];
//var_dump($spotFruit);  // TESTING PURPOSES ONLY
//End FRUIT OF DAY CALL

// Setting up DB Username & Password
$user = 'root';
$pass = 'root';

// PDO
$db = new PDO('mysql:host=localhost;dbname=SSL;port=8889', $user, $pass);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$fruitName 	= $_POST['fruitName'];  //getting POST values
	$fruitColor = $_POST['fruitColor'];  //getting POST values
	$fruitImage = $_POST['fruitImage'];  //getting POST values
	$stmt      	= $db->prepare("INSERT INTO fruits (fruitName, fruitColor, fruitImage) VALUES (:fruitName, :fruitColor, :fruitImage);");  //insert into and where the database

$stmt ->bindParam(':fruitName', $fruitName);  //bind variables to db
$stmt->bindParam(':fruitColor', $fruitColor);
$stmt->bindParam(':fruitImage', $fruitImage);
$stmt->execute();
}	
?>

<!-- Fruit LOOP for ADS upon Page Refresh -->
	
<!-- Setting up the form and the display -->
<!DOCTYPE html>  
<html>
<head lang = "en">
	<meta charset = "UTF-8">
	<title>Fruits</title>
	<link rel = "stylesheet" href = "css/normalize.css">
	<link rel = "stylesheet" href = "css/styles.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<article>
	<header>

		<section id = "fruitAds">
			<h1>My Fruit Database App</h1>
			<h2>Fruit Spotlight</h2>
				<img src="<?= $spotFruit->fruitImage; ?>" width = 200px>
			<h3>This is a <?=$spotFruit->fruitColor. " " . $spotFruit->fruitName;?></h3>
		</section>
	</header>
	<form enctype = "multipart/form_fruits" name = "fruitForm" action = "ads.php" method = "POST">
	<ul>
		<li>
			<fieldset>
				<legend align = "center">Fruit Name</legend>
					<input type = "text" name = "fruitName" value = "" placeholder = "Name of fruit" required>
			</fieldset>
		</li>
		<li>
			<fieldset>
				<legend align = "center"> Fruit Color</legend>
					<input type = "text" name = "fruitColor" value = "" placeholder = "Color of fruit" required>
			</fieldset>
		</li>
		<li>
			<fieldset>
				<legend> Fruit Image</legend>
					<input type = "text" name = "fruitImage" value = "" placeholder = "URL here for the image" required>
			</fieldset>
		</li>	
		<li>
			<input type = "submit" name = "submit" value = "Submit" />
		</li>
		<li>
			<input type="button" onclick="myFunction()" value="Reset form">
		</li>		
	</ul>
	
	</form>	

	<section class = "display">
	<table>
		<tr>
			<th>Fruit ID</th>
			<th>Fruit Name</th>
			<th>Fruit Color</th>
			<th>Fruit Image</th>
			<th>Action</th>
		</tr>

	<!--Query & Print Fruit records from dB with Delete Link -->

<?php
$stmt = $db->prepare('SELECT * FROM fruits order by id ASC;');

$stmt->execute();
$result = $stmt->fetchall(PDO::FETCH_ASSOC);



foreach ($result as $row) {
$url = '<a href="' . $row['fruitImage'] . '" target="_blank"> ' . $row['fruitImage'] . ' </a>';
echo '<tr><td>' . $row['id'] . '</td><td>' . $row['fruitName'] . '</td><td>' . $row['fruitColor'] . '</td><td>' . $url . 
'</td><td><a href = "deletefruit.php?id=' . $row['id'] . '">Delete</a><br />';
}


?>
</table></section>
</article>
</body>
</html>