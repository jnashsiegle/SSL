<?php
/*
* 	======================================
*	PROJECT:  	SSL - LAB 09 PREP
*	FILE: 		models/WeatherApi.Class.php
*	AUTHOR:		Jana Nash-Siegle
*	CREATED: 	12/8/2015
*	======================================
*/


//Create a class called WeatherAPI

class weatherAPI {

	function get_weather_by_zip($zipcode) {

		// in order to get/setup base url, study api parameter requirements at
		//http://www.yahooapis.com/weather/archive.html
		$result = file_get_contents('http://weather.yahooapis.com/forecastrss?p=' . $zipcode . '&u=f');

		$xml = simplexml_load_string($result);

		// registerXPathNamespace will create a prefix for the associated
		//namespace, allowing one to access nodes in that namespace without the need to change
		//code to allow for the new prefixes dictated by the provider.  In particular,
		//this is helpful if the provider of the given XML document alters
		// the namespace prefixes.
		$xml->registerXPathNamespace('yweather', 'http://xml.weather.yahoo.com/ns/rss/1.0');

		// Runs XPath query on XML data
		$location = $xml->channel->xpath('yweather:location');

		if(!empty($location)){
			foreach($xml->channel->item as $item){
				$current = $item->xpath('yweather:condition');
				$forecast = $item->xpath('yweather:forecast');
				$current = $current[0];
				$data = ["current"=>$current, "location" => $location, "forecast" => $forecast];
			}
		}	else 	{
			$data = 'No results found, please try a different zip code.';

		}
		return $data;
	}
}
?>