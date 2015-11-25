<!DOCTYPE html>
<html>
<head lang = "en">
	<meta charset = "UTF-8">
	<title>continue</title>
</head>
<body>

	
<?php 
	for ($count = 0; $count <= 10; $count++){
		if ($count % 2 == 0) { continue; }
		echo $count . ", ";
	}
	
?>  
<br /><br />
//<?php //what's wrong with this?

//	$count = 0;
//	while ($count <= 10) {
//		if ($count == 5) {
//			continue;
//		}
//		echo $count . ", and ";
//		$count++;
//	}
	//no incrementer..it's a continual loop..nothing tells it to move on to 6 and beyond
?>

<br /><br />
so let's fix it<br />
<?php //what's wrong with this?

	$count = 0;
	while ($count <= 10) {
		if ($count == 5) {
			$count++; //$count was missing!
			continue;
		}
		echo $count . ", ";
		$count++;
	}
	//no incrementer..it's a continual loop..nothing tells it to move on to 6 and beyond
?>
<br /><br />nested loops<br />left side numbers from outer loop<br />right side numbers from inner loop<br />
<?php  // loop inside a loop with continue

	for ($i=0; $i<=5; $i++){
		if($i % 2 == 0) { //check for even number
			continue(1);  //continue entire loop by default
		}
		for ($k=0; $k<=5; $k++){
			if ($k ==3){
				continue(2); // continue 2 loops back
			}
			echo $i . "-" . $k . "<br />";
			}
		}
	?>


</body>
</html>