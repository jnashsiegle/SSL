<!DOCTYPE html>
<html>
<head lang = "en">
	<meta charset = "UTF-8">
	<title>Activity 1-2</title>
</head>
<body>


<?php
	function letterGrade($score){
		if(($score <= 100 || $score > 100) && $score >= 90){
			return 'A';
		} elseif($score <= 90 && $score >=80){
			return 'B';
		} elseif($score <= 80 && $score >= 70){
			return 'C';
		} elseif($score <= 70 && $score >= 60){
			return 'D';
		} else {
			return 'F';
		}
	}

	echo letterGrade("94");
	echo "<br />";
	echo letterGrade("54");
	echo "<br />";
	echo letterGrade("89.9");
	echo "<br />"; 
	echo letterGrade("60.01");
	echo "<br />"; 
	echo letterGrade("102.01"); 



?>

</body>
</html>