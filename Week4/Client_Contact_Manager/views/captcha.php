<?php
/*
* 	======================================
*	PROJECT:  	SSL - LAB 03 PREP
*	FILE: 		views/captcha.php
*	AUTHOR:		Jana Nash-Siegle
*	CREATED: 	12/2/2015
*	======================================
*/
?>
<?php
	// Optional:  set on the fly... how long session should last
	// ini_set('session.gc_maxlifetime', 5 * 60);
	session_start();

	//Update the current session id with a newly generated one
	session_regenerate_id();

	// store content of dictionary into variablde
	// FILE_IGNORE_NEW_LINES:  Do not add newline at the end of each array element
	$file = file('../public/files/dictionary.txt', FILE_IGNORE_NEW_LINES);

	// Set Length of Dictionary File & create Random Number to select from file
	$length = count($file)-1;
	$random = rand(0, $length);

	// Create session variable called captcha and store randomly selected word
	// Only writes one word at a time;
	$_SESSION['captcha'] = $file[$random];
	session_write_close();

/* Create function to format CAPTCHA Display to User;

In order to do so, you will need to learn to compile PHP ;with the GDLibrary of image
functions for this to work.  What is the GD Library?
- The GD Library is a graphics and image manipulation library that is accessible through PHP.
- Image Resources (references to objects) are passed to/from PRE-BUILT PHP functions.
- The GD Graphics Library is a graphics software library which was developed by Thomas Boutell
	and other developers for dynamically maniulating images. */

function msg($msg){
	$container = imagecreate(250, 170); //SET SIZE OF IMAGE
	$black = imagecolorallocate($container, 0, 0, 0); //set RGB for black
	$white = imagecolorallocate($container, 255, 255, 255); //set RGB for white
	$font = '/Library/Fonts/Arial.ttf'; //grab the font from my harddrive
	imagefilledrectangle($container, 0, 0, 250, 170, $black); // crate rectangle graphic

	$px = (imagesx($container) / (strlen($msg)/1.15)); // x axis position
	$py = (imagesy($container) / 3.5); // ;y axis position

	// Write text to the image using fonts using FreeType 2
	imagefttext($container, 28, -27, $px, $py, $white, $font, $msg);
	header("Content-type: image/png"); // Change header type
	imagepng($container, null); // Output a png image to either the browser or a file
	imagedestroy($container); // Frees any memory associated with the image
}

msg($file[$random]); // Invoke msg function & display random selection to user


?>