<?php 
	
	///////////////////////////
	// Input get from jquery //
	///////////////////////////
	$city = $_GET['city'];


	/////////////////////////////////////////
	// replace if city name has space Char //
	/////////////////////////////////////////
	str_replace(" ","",$_GET['city']);

	 $contents = file_get_contents("http://weather-forecast.com/locations/".$city."/forecasts/latest");

	 //////////////////////////////////////////////////////////////////////////////
	 // search for pattern and by RegularExpression (.*?) will take all of data  //
 	 // between RegularExpression and will save in $matches                      //
	 //////////////////////////////////////////////////////////////////////////////

	 preg_match('/3 Day Weather Forecast Summary:<\/b>(.*?)<\/span>/s' , $contents, $matches);

	print_r($matches[1]);


 ?>