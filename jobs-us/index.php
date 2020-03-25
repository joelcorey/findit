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

require('../inc/config-common.php');
require('../inc/config-us.php');
require('../inc/util.php');
require('../inc/filter.php');

date_default_timezone_set('America/Los_Angeles');
// un-needed example:
// $date = date('Y-m-d');

// get current month for date comparisons later
$month = date('m');
$day = date('d');

// Yay nested foreach loops! So efficient! /sarcasm ..
foreach ($cities as $city) {

	foreach ($categories as $cat) {
		
		// Define random user agent from included user agent array PHP file
		$userAgent = $list[array_rand($list)];

		// Define the URL to scrape
		$url = $city . '.' . $domain . '/search/' . $cat;
		
		// Actually start scraping using the PHP cURL library
		$responsePage = crawley($url, $userAgent);

		// List the city and category everytime we switch cities:
		$catTitle = scrapeBetween($responsePage, 'class="reset">', '</a>');
		echo "<pre>" . $city . ' / ' . $catTitle . "</pre>";

		$responseTitle = explode('class="result-row"', $responsePage);

		foreach ($responseTitle as $response) {

			$dateOfPost = scrapeBetween($response, 'datetime="',' ');
			if ($dateOfPost) {
				$explodeDateOfPost = explode('-', $dateOfPost);
				$monthOfPost = $explodeDateOfPost[1];
				$dayOfPost = $explodeDateOfPost[2];
			}

			//echo '$dateOfPost: ' . $dateOfPost . ' dayOfPost: ' . $dayOfPost . ' actual date day: ' . $day . '<br />';
			//die();
	
			//echo $monthOfPost . '<br />';
			$href = scrapeBetween($response, 'href="', '"'); //need to be before title
			$title = scrapeBetween($response, 'hdrlnk">', '<');
			// used to prevent duplicate matches
			$previousTitle = '';
			
			// for now just check if post is within the same month of current date
			// if ($month == $monthOfPost && $day == $dayOfPost) {
			if ($month == $monthOfPost) {

				//match_keywords($title, $keywords);
				foreach ($keywords as $key) {

					if (
						stripos($title, $key) !== false 
						&& stripos($title, $previousTitle) !== true 
						&& !in_array($title, $filter)) {

						// prevent duplicate matches
						$previousTitle = $title;

						//Filter between local and surrounding area matches so that links are formatted correctly:
						if (strpos($href, '//') !== false) {
							// if ($day == $dayOfPost) {
								$hrefz = explode("//", $href);
								$href = $hrefz[1];
					
								echo '<pre>' .  $dateOfPost . ' <a href="http://' . $href . '" target="_blank">' . $title . '</a></pre>';
							//}
							
						}

						// deprecated?
						// if (strpos($href, '//') !== true){
						// 	echo '<pre>' . $dateOfPost . ' Other match: <a href="https://' . $href . '" target="_blank">' . $title . '</a></pre>';
						// }

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