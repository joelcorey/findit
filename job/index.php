<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<title>findit - job</title>

</head>
<body>

<div id="wrapper">
	<div id="browse">

	</div>

<?php

require('../inc/config.php');
require('../inc/util.php');

foreach ($cities as $city) {

	foreach ($categories as $cat) {
		
		// Define random user agent from included user agent array PHP file
		$useragent = $list[array_rand($list)];
		//echo "<pre>Useragent: " . $useragent . "</pre>";

		// Define the URL to scrape
		$url = 'http://' . $city . '.' . $domain . '/search/' . $cat;
		
		// Actually start scraping using the PHP cURL library
		$response_page = crawley($url, $useragent);
		//echo $response_page;
		//die();

		// List the city and category everytime we switch cities:
		$cat_title = scrape_between($response_page, 'class="reset">', '</a>');
		//echo "<pre>" . $city . ' / ' . $cat . "</pre>";
		echo "<pre>" . $city . ' / ' . $cat_title . "</pre>";

		$response_title = explode('class="result-row"', $response_page);

		foreach ($response_title as $response) {
			
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
				
						//echo '<pre>' . $date . ' Other match: <a href="https://' . $href . '" target="_blank">' . $title . '</a></pre>';
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