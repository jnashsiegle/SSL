<!DOCTYPE html>
<html>
<head lang = "en">
	<title>SSL Form Processing App - by Jana</title>
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href = "css/style1.css")>
</head>
<body>
<div class = "results">
<?php
	//FUNCTION TO SET UP VARIABLES AND ARRAY CREATION TO ADD USERS 
	function makeArray(){
		$pass = $_POST['password'];
		$f_name = $_POST['f_name'];
		$l_name = $_POST['l_name'];
		$username = $_POST['username'];
		$shpass = md5("janasSaltHash".$pass);
		return array('FIRST NAME' => $f_name, 'LAST NAME' => $l_name, "USERNAME" => $username, "&nbspPassword" => $shpass);
	}

	// Function 2 for image uploads
	// Allow certain file formats
	function imgDir(){
		$uploaddir = 'images/';
		$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
		$uploadOk = 1;
		$imageFileType = pathinfo($uploadfile,PATHINFO_EXTENSION);

		//IF STATEMENT TO MAKE SURE JPG OR PNG and error message if any other file type is submitted.
		if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg")
			{		 
		    echo "Sorry, only JPG, JPEG, OR PNG files are allowed. Your image did not upload.";
		    $uploadOk = 0;
		}	else 	{	
		if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
		    echo "'<img src = $uploadfile>' \n<br />  File is valid, and was successfully uploaded.<br /><br />";
		    $uploadOk = 1;
			}
		}
	}

	//END imgDir()

	//IF STATEMENT for POST insurance and SUBMIT clickage

	if(isset($_POST['submit'])){
		
		echo "<h2><font color = #fff>YES!! CONGRATULATIONS!</h2></font><h3>Your new account has been successfully created!</h3>";
		echo "<font color = #fff> Your registration details are listed below.  Thank you for visiting Jana's Registration App.</font>";
		echo "<br /><br /><a href = 'http://localhost:8888/SSL/Week1/Homework1/index.html'>Register Again?</a>";
	
	//CONVERT array into a variable
	$data = makeArray();

	// FOREACH to display Array Contents created in makeArray function

	echo "<table width = 550 align = center border = 0><tr><td>";

	foreach($data as $attribute => $data) {
		echo "<p align = left><font color = #fff>{$attribute}</font>: {$data}";
	}

		echo "</td></tr></table>"; // end table html

		//ECHO User's Image at bottom

		echo imgDir() . "<br /><br />";  //let's call the imgDir function so the avatar image will show upon submittal
} //end isset
?>
</div>
	
	
<pre> 
	
	<?php echo "<br /><br />Variables: " . print_r(get_defined_vars()); ?>
</pre>

</body>
</html>