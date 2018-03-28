<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<title>jobMaker</title>

</head>
<body>

<div id="wrapper">
	<div id="browse">

	</div>

<?php

require('inc/config.php');

function crawley($url, $agent) {

	$ch = curl_init();

	$options = array(
		CURLOPT_URL => $url,
		CURLOPT_RETURNTRANSFER => TRUE,
		CURLOPT_FOLLOWLOCATION => TRUE,
		CURLOPT_AUTOREFERER => TRUE,
		CURLOPT_USERAGENT => $agent,
		CURLOPT_TIMEOUT => 1800
	);

	curl_setopt_array($ch, $options);

	$data = curl_exec($ch);

	if(!$data){
		echo "<br />cURL error number: " . curl_errno($ch);
		echo "<br />cURL error: " . curl_error($ch) . " on URL - " . $url;
		var_dump(curl_getinfo($ch));
		var_dump(curl_error($ch));
		exit;
	}

	curl_close($ch);

	return $data;
}

function scrape_between($data, $start, $end){
  $data = stristr($data, $start); // Stripping all data from before $start
  $data = substr($data, strlen($start));  // Stripping $start
  $stop = stripos($data, $end);   // Getting the position of the $end of the data to scrape
  $data = substr($data, 0, $stop);    // Stripping all data from after and including the $end of the data to scrape
  return $data;   // Returning the scraped data from the function
}

function match_keywords(/*array &*/$search, /*array &*/$keys) { 	// A function to replace the foreach keyword search
	$datamatch = NULL;
	foreach ($keys as $key) {	
		if (stripos($search, $key) !== false) {
			$datamatch = $search;
		}
	}
return $datamatch;
}





for ($i=0; $i < count($master); $i++) 
{ 
	$state = $master[$i][0];
	echo '<h1>' . $state . '</h1>';

	for ($j=1; $j < count($master[$i]); $j++)
	{

		for ($k=0; $k < count($categories); $k++)
		{

			$useragent = $list[array_rand($list)];

			//$url_readable = '<a href="' . $master[$i][$j] . $categories[$k] . '>link<a><br>';
			$url = $master[$i][$j] . $categories[$k];
			//echo $url;

			$city = scrape_between($categories[$k], '//','.');

			$response_page = crawley($url, $useragent);

			//echo $response_page;
			
			//sleep(rand(0, 10));
			
			$cat_title = scrape_between($response_page, 'class="reset">', '</a>');
			echo "<pre>" . $state . ' --- ' . $city . ' --- ' . $cat_title . "</pre>";

			$response_title = explode('class="result-row"', $response_page);

			foreach ($response_title as $response) {
				
				$date = scrape_between($response, 'datetime="',' ');
				$href = scrape_between($response, 'href="', '"'); //need to be before title
				$title = scrape_between($response, 'hdrlnk">', '<');
				$previous_title = '';

				foreach ($keywords as $key) {
						
					if (stripos($title, $key) !== false && stripos($title, $previous_title) !== true ) {

						$previous_title = $title;

						if (strpos($href, '//') !== false) {
							
							$hrefz = explode("//", $href);
							$href = $hrefz[1];
					
							echo '<pre>' .  $date . ' <a href="https://' . $href . '" target="_blank">' . $title . '</a></pre>';
						}

					}

				}
				

			}
			

		}

	}

}





?>


</div>
</body>
</html>