<!DOCTYPE html>
<html>
<head lang = "en">
	<meta charset = "UTF-8">
	<title>loops_for</title>
</head>
<body>

	
<?php 
	$ages = array(4,8,15,16,23,42);

	foreach($ages as $age) {
		echo "Age: {$age}<br />";
	}
	
?>

<br /><br />
<?php
	$person = array(
			"first_name" 	=> "Jana",
			"last_name"		=> "Nash-Siegle",
			"address"		=>	"3300 University Blvd.",
			"city"			=>	"Winter_Park",
			"state"			=>	"FL",
			"zip_code"		=>	"32789"
		);
	foreach($person as $attribute => $data){
		//uppercase keys & data; replace under_scores w/spaces
		$attr_nice = ucwords(str_replace("_", " ", $attribute));
		$data_nice = ucwords(str_replace("_", " ", $data));
	echo "{$attr_nice}: {$data_nice}<br />";
	}
	//uppercase removed and underscore removed from above data with the str_replace

?>
<br /><br />
<?php
	$prices = array("Brand New Computer at Full Sail" => 2000,
					"1 hour on FullSail.com" => 250,
	 				"Learning PHP with Fia" => null);
	foreach($prices as $item => $price){
		echo "{$item}: ";
		if (is_int($price)){ //CHECK for integer vs. NULL vale
			echo "$" . $price;
		}	else {
			echo "priceless";
		}
		echo "<br />";
	}

?>
</body>
</html>