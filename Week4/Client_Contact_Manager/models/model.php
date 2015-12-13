<?php
/*
* 	======================================
*	PROJECT:  	SSL - LAB 03 PREP
*	FILE: 		models/model.php
*	AUTHOR:		Jana Nash-Siegle
*	CREATED: 	12/2/2015
*	======================================
*/
class Views{
	function getView($filename = "", $arrayInput = array()){
		include $filename;
	}
}
?>