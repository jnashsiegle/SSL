<?php
	//Jana Nash-Siegle
	//Server Side Languages
	//Novemeber 30, 2015


// Our original image
$filename = 'xmass-tree.jpg';
$percent = .5;

// Change our heder
header('Content-Type: image/jpeg');

// Let's get the new dimensions
list($width, $height) = getimagesize($filename);
$new_width = $width * $percent;
$new_height = $height * $percent;

// Resize and resample
$image_p = imagecreatetruecolor($new_width, $new_height);
$image = imagecreatefromjpeg($filename);
imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

//let's save it as a png
imagepng($image_p);

//Let's save some memory
$imagedestroy($image_p);

// Output
imagepng($image_p, null, 100);
?>