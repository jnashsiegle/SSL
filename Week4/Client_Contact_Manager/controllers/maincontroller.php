<?php
/*
* 	======================================
*	PROJECT:  	SSL - LAB 03 PREP
*	FILE: 		controllers/maincontroller.php
*	AUTHOR:		Jana Nash-Siegle
*	CREATED: 	12/2/2015
*	======================================
*/

session_start();

include("models/model.php");
$views = new Views();

// If Browser URL (form action) is NOT empty, keep going...
if(!empty($_GET["action"])){
	// if URL (form action = captchaForm
	if($_GET["action"] == "captchaForm"){
		//Display only the default layout
		$views->getView("views/header.php");
		$views->getView("views/form.php");
		$views->getView("views/footer.php");
	// Else if $_GET form action = captchaVerify
	}	else if($_GET["action"] == "captchaVerify") {
		//Display layout & results
		$views->getView("views/header.php");
		$views->getView("views/results.php");
		$views->getView("views/footer.php");
	//Else (assuming action says "anything else"0, give the user the default layout)
	}	else 	{
		$views->getView("views/header.php");
		$views->getView("views/form.php");
		$views->getView("views/footer.php");
	}
	//Else if action (browser/url) is EMPTY, redirect user/header to ?action=captchaForm
}	else 	{  //else to the very first if on line 17
	header("location:?action=captchaForm"); // Redirect user to CaptchaForm
}
?>

<pre>
	<?php print_r(get_defined_vars()); 
	?>
</pre><br />