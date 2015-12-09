<?php
/*
* 	======================================
*	PROJECT:  	SSL - LAB 09 PREP
*	FILE: 		views/weather.php
*	AUTHOR:		Jana Nash-Siegle
*	CREATED: 	12/8/2015
*	======================================
*/
?>
<?

if(is_string($data)) {

	?>
		<br /><br /><h2>ERROR - Sorry, that zip code doesn't exist!</h2>
		<p><? echo $data ?><br /><br /><a href = "?action=home"><h3>Try another Zip Code?</h3></a></p>

	<?
}	else 	{

	?>

	<h1>Weather for <? echo $data['location'][0]['city'] ?>, <? echo $data['location'][0]['region'] ?></h1>
	Current Date: <? echo $data['current']['date'] ?>

	<hr />

<p>Temperature: <?echo $data['current']['temp'] ?>&deg;F</p>

<div class = "center">
	<center><img src = "http://l.yimg.com/a/i/us/we/52/<? echo $data['current']['code'] ?>.gif" width = "200" height = "200" />

	<p><? echo $data['current']['text'] ?></p></center>
</div>

<p><b>Forecast:</b></p>
<p><? echo $data['forecast'][0]['day'] ?> - <? echo $data['forecast'][0]['text'] ?>. High: <? echo $data['forecast'][0]['high'] ?> Low: <? echo $data['forecast'][0]['low'] ?></p>

<?
echo "<p><a href = ?action=home'>Try Another Zip Code?</a></p>";
}
?>