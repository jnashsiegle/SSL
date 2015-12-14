<?php
	// Setting up DB Username & Password
$user = 'root';
$pass = 'root';

// PDO
$db = new PDO('mysql:host=localhost;dbname=SSL;port=8889', $user, $pass);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$f_name 	= $_POST['f_name'];  //getting POST values
	$l_name 	= $_POST['l_name'];  //getting POST values
	$email 		= $_POST['email'];  //getting POST values
	$url 		= $_POST['url']; //getting POST valuesw
	$stmt      	= $db->prepare("INSERT INTO clients (f_name, l_name, email, url) VALUES (:f_name, :l_name, :email, :url);");  //insert into and where the database

$stmt ->bindParam(':f_name', $f_name);  //bind variables to db
$stmt->bindParam(':l_name', $l_name);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':url', $url);
$stmt->execute();
}	
// If the form is not set - do nothing
if (isset($_POST['submit'])){
	// Check to see if username, password, avatar is null
	if ($_POST['f_name'] != null && $_POST['l_name'] != null && $_POST['email'] !=null && $_POST['url']){
		//Read in all form fields into an "associate" array & return the array for processing output
function makeArray()
		{
			$f_name = $_POST['f_name'];
			$l_name = $_POST['l_name'];
			$email = $_POST['email'];
			$url = $_POST['url'];

			return array("First Name " => $f_name, "Last Name" => $l_name, "Email" => $email, "Website" => $url);
		}

		// Output Login Details to User
		echo "Your new contact has been added!";
		echo "<table width = 100% align = left border = 0><tr><td>";

		//CONVERT array into a variable
		$data = makeArray();

		//FOREACH for displaying Array Contents created in makeArray Function
		foreach ($data as $attribute => $data){
			echo "<p align = left><font color = #FF4136>{$attribute}</font>: {$data}";
		}


/*
* 	======================================
*	PROJECT:  	SSL - Week 4 Final
*	FILE: 		views/form.php
*	AUTHOR:		Jana Nash-Siegle
*	CREATED: 	12/13/2015
*	======================================
*/
include("header1.php");
?>

<form enctype="multipart/form_clients" id = "form_clients" action="form.php" method="POST">
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
			<input type="url" name="url" placeholder = "http://..." required>
	</div>	
		<input type="reset" name = "reset" value="Reset">
		<input type="submit" name = "submit" value = "Submit">
	</form>
