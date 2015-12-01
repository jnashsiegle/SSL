<?php
	//Jana Nash-Siegle
	//Server Side Languages
	//SSL 151201
	//November 30, 2015

// Set the content-type
session_start();
header('Content-Type: image/png');

// Create the image
$im = imagecreatefromjpeg("xmass-tree.jpg");

// The text to draw
$text = 'Merry Christmas';

// Set the enviroment variable for GD
putenv('GDFONTPATH=' . realpath('.'));

// Name the font to be used (note the lack of the .ttf extension)
$font = 'GatsbyFLF';

// Create some colors
$white = imagecolorallocate($im, 255, 255, 255);
// Add the text
imagettftext($im, 170, 0, 80, 420, $white, $font, $text);

// Using imagepng() results in clearer text compared with imagejpeg()
imagepng($im);
imagedestroy($im);
?>
