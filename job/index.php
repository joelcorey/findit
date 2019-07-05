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

date_default_timezone_set('America/Los_Angeles');
// un-needed example:
// $date = date('Y-m-d');

// get current month for date comparisons later
$month = date('m');
// if ($month[0] == 0) {
// 	$month = substr($month, 1);
// }

// Yay nested foreach loops! So efficient! /sarcasm ..
foreach ($cities as $city) {

	foreach ($categories as $cat) {
		
		// Define random user agent from included user agent array PHP file
		$userAgent = $list[array_rand($list)];
		//echo "<pre>userAgent: " . $userAgent . "</pre>";

		// Define the URL to scrape
		$url = 'http://' . $city . '.' . $domain . '/search/' . $cat;
		
		// Actually start scraping using the PHP cURL library
		$responsePage = crawley($url, $userAgent);
		//echo $responsePage;
		//die();

		// List the city and category everytime we switch cities:
		$catTitle = scrapeBetween($responsePage, 'class="reset">', '</a>');
		//echo "<pre>" . $city . ' / ' . $cat . "</pre>";
		echo "<pre>" . $city . ' / ' . $catTitle . "</pre>";

		$responseTitle = explode('class="result-row"', $responsePage);

		foreach ($responseTitle as $response) {
			
			$dateOfPost = scrapeBetween($response, 'datetime="',' ');
			if ($dateOfPost) {
				$monthOfPost = explode('-', $dateOfPost);
				$monthOfPost = $monthOfPost[1];
			}
			
			//echo $monthOfPost . '<br />';
			$href = scrapeBetween($response, 'href="', '"'); //need to be before title
			$title = scrapeBetween($response, 'hdrlnk">', '<');
			// used to prevent duplicate matches
			$previousTitle = '';
			
			// for now just check if post is within the same month of current date
			if ($month == $monthOfPost) {
				//match_keywords($title, $keywords);
				foreach ($keywords as $key) {

					if (stripos($title, $key) !== false && stripos($title, $previousTitle) !== true ) {

						// prevent duplicate matches
						$previousTitle = $title;

						//Filter between local and surrounding area matches so that links are formatted correctly:
						if (strpos($href, '//') !== false) {
							
							$hrefz = explode("//", $href);
							$href = $hrefz[1];
					
							echo '<pre>' .  $dateOfPost . ' <a href="https://' . $href . '" target="_blank">' . $title . '</a></pre>';
						}

						// deprecated?
						// if (strpos($href, '//') !== true){
						// 	echo '<pre>' . $date . ' Other match: <a href="https://' . $href . '" target="_blank">' . $title . '</a></pre>';
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