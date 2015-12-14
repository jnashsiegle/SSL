 

<section class = "display">
<i class="fa fa-plus-square">&nbsp;Add New Client Contact</i><br /><br />
	<table>
		<tr>			
			<th>First Name</th>
			<th>Last Name</th>
			<th>Email</th>
			<th>WebSite</th>
			<th>Action</th>
			<th>Action</th>
		</tr>
<?php
/*
* 	======================================
*	PROJECT:  	SSL - Week 4 finals
*	FILE: 		views/display.php
*	AUTHOR:		Jana Nash-Siegle
*	CREATED: 	12/13/2015
*	======================================
*/

// Setting up DB Username & Password
$user = 'root';
$pass = 'root';

// PDO
$db = new PDO('mysql:host=localhost;dbname=SSL;port=8889', $user, $pass);
?>



	<!--Query & Print Fruit records from dB with Delete Link -->
<?php

$stmt = $db->prepare('SELECT * FROM clients order by l_name ASC;');

$stmt->execute();
$result = $stmt->fetchall(PDO::FETCH_ASSOC);

foreach ($result as $row) {
$url = '<a href="' . $row['url'] . '" target="_blank"> ' . $row['url'] . ' </a>';
$email = '<a href="mailto:' . $row['email'] . '" target="_blank"> ' . $row['email'] . ' </a>';
echo '<tr><td>' . $row['f_name'] . '</td><td>' . $row['l_name'] . '</td><td>' . $email . '</td><td>' . $url . 
'</td><td><a href = "deleteclient.php?id=' . $row['id'] . '">Delete</a></td><td><a href = "updateclient.php?id=' . $row['id'] . '">Update</a><br />';
}
?>
</table>
</section>
	