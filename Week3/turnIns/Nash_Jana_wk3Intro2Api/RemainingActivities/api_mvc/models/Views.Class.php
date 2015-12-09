<?php
/*
* 	======================================
*	PROJECT:  	SSL - LAB 09 PREP
*	FILE: 		models/Views.Class.php
*	AUTHOR:		Jana Nash-Siegle
*	CREATED: 	12/8/2015
*	======================================
*/

//create a class called views that grabs each of gthe views (footer, header, form, weather)

class Views{
	
	//create a method called getView

	function getView($filename = "", $data = array()){

	// include the file name that was passed

	include $filename;
	}
}
?>