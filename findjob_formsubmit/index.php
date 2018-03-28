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
require('inc/useragentlist.php');
require('inc/crawley.php');

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

$url = 'https://portland.craigslist.org/d/computer-gigs/search/grg/cpg';
$response_page = new crawley($url, $list);

var_dump($response_page);
die();

foreach ($cities as $city) {

	foreach ($categories as $cat) {		

		// Define the URL to scrape
		$url = 'http://' . $city . '.' . $domain . '/search/' . $cat;
		
		// Actually start scraping using the PHP cURL library
		$response_page = new crawley($url, $list);

		// List the city and category everytime we switch cities:
		$cat_title = scrape_between($response_page, 'class="reset">', '</a>');
		echo "<pre>" . $city . ' / ' . $cat_title . "</pre>";

		$response_title = explode('class="result-row"', $response_page);
		

		foreach ($response_title as $response) {
			
		echo $response;
		die();

			$date = scrape_between($response, 'datetime="',' ');
			
			$href = scrape_between($response, 'href="', '"'); //need to be before title

			$title = scrape_between($response, 'hdrlnk">', '<');

			$previous_title = '';

			//match_keywords($title, $keywords);
			foreach ($keywords as $key) {
					
				if (stripos($title, $key) !== false && stripos($title, $previous_title) !== true ) {

					// prevent duplicate matches
					$previous_title = $title;

					//Filter between local and surrounding area matches so that links are formatted correctly:
					if (strpos($href, '//') !== false) {
						
						$hrefz = explode("//", $href);
						$href = $hrefz[1];
				
						echo '<pre>' .  $date . ' <a href="https://' . $href . '" target="_blank">' . $title . '</a></pre>';
					}

					if (strpos($href, '//') !== true){
				
						echo '<pre>' . $date . ' Other match: <a href="https://' . $href . '" target="_blank">' . $title . '</a></pre>';
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