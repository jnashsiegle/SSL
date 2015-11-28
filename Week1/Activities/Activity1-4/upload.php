<?php
	$uploaddir = 'uploads/';
	$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
	$uploadOk = 1;
	$imageFileType = pathinfo($uploadfile,PATHINFO_EXTENSION);

	// Allow certain file formats
	if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
	    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	    $uploadOk = 0;
	}	else 	{	
	if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
	    echo "'<img src = $uploadfile>' \n<br />  File is valid, and was successfully uploaded.<br /><br />";
	    $uploadOk = 1;
	}
}
?>
	
	
	
<pre> 
	<?php echo print_r($_FILES); ?> 
</pre> 