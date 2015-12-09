<?php
/*
* 	======================================
*	PROJECT:  	SSL - LAB 0 PREP
*	FILE: 		controllers/Action_Controller.php
*	AUTHOR:		Jana Nash-Siegle
*	CREATED: 	12/8/2015
*	======================================
*/

session_start();

include("models/Views.Class.php");
include("models/WeatherAPI.Class.php");
$views = new Views();
$api = new WeatherAPI();

// If action is *NOT* empty keep going....
if(!empty($_GET["action"])){
	// if action is specified as home:
	if($_GET["action"] == "home"){
		//Display only the default layout
		$views->getView("views/header.php");
		$views->getView("views/form.php");
		$views->getView("views/footer.php");
	
	}	
	//if action is specified as lookup:
	if($_GET["action"] == "lookup") {
		// if the zip code has a value AND is not set = to empty:

		if (isset($_POST['tf_zip']) && !empty($_POST['tf_zip'])) {

			$zipcode = $_POST['tf_zip']; // then, store the zipcode in a variable
	
		}	else 	{		
	
	
			$zipcode = '32792'; // then, store the default zip code in a variable
	}

$data = $api->get_weather_by_zip($zipcode);
$views->getView("views/header.php");
$views->getView("views/weather.php", $data);
$views->getView("views/footer.php");
}

}	else 	{

	// if the 'action' is not specified, send them home!
	header("Location: ?action=home");
}
?>

<pre>
	<?php print_r(get_defined_vars()); 
	?>
</pre><br />