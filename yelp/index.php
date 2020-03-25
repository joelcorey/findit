<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<title>findit - yelp</title>

</head>
<body>

<div id="wrapper">
	<div id="browse">

	</div>

<?php

require('../inc/util.php');
require('../inc/useragentlist.php');
require('./inc/config-common.php');

$searchTerm = "search?find_desc=mechanic";
$location = "&find_loc=Salem%2C%OR";
$startFrom = "&ns=1&start=0";
$url = "https://www.yelp.com/$searchTerm$location$startFrom";

$seperateResults = scrapeBetween(
		$responsePage, 
		'heading--no-spacing__373c0__1PzQP', 
		'<div class="lemon--div__373c0__1mboc u-space-t4 u-space-b4 u-padding-b4 border--bottom__373c0__1iWrz border-color--default__373c0__2xHhl">');
// Define random user agent from included user agent array PHP file
$userAgent = $list[array_rand($list)];

// Actually start scraping using the PHP cURL library
$responsePage = crawley($url, $userAgent);

$seperateResults = scrapeBetween(
		$responsePage, 
		'heading--no-spacing__373c0__1PzQP', 
		'<div class="lemon--div__373c0__1mboc u-space-t4 u-space-b4 u-padding-b4 border--bottom__373c0__1iWrz border-color--default__373c0__2xHhl">');

echo $seperateResults;
die();

// List the city and category everytime we switch cities:
$catTitle = scrapeBetween($responsePage, 'class="reset">', '</a>');
//echo "<pre>" . $city . ' / ' . $cat . "</pre>";
echo "<pre>" . $city . ' / ' . $catTitle . "</pre>";

$responseTitle = explode('class="result-row"', $responsePage);

foreach ($responseTitle as $response) {

	$dateOfPost = scrapeBetween($response, 'datetime="',' ');
	if ($dateOfPost) {
		$explodeDateOfPost = explode('-', $dateOfPost);
		$monthOfPost = $explodeDateOfPost[1];
		$dayOfPost = $explodeDateOfPost[2];
	}
	
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
					
					$hrefz = explode("//", $href);
					$href = $hrefz[1];
			
					echo '<pre>' .  $dateOfPost . ' <a href="http://' . $href . '" target="_blank">' . $title . '</a></pre>';
				}

				// deprecated?
				// if (strpos($href, '//') !== true){
				// 	echo '<pre>' . $date . ' Other match: <a href="https://' . $href . '" target="_blank">' . $title . '</a></pre>';
				// }

			}

		}

	}

}


?>

</div>

</body>
</html>