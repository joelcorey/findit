<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<title>findit - salem chamber</title>

</head>
<body>

<div id="wrapper">
	<div id="browse">

	</div>

<?php

require('../inc/config.php');
require('../inc/util.php');

// basic setup and initial content grab
$useragent = $list[array_rand($list)];
$url = 'https://business.salemchamber.org/list';
$response_page = crawley($url, $useragent);
$link_master = [];

// get master list of links
$split_alpha_numeric = scrape_between($response_page, '<div id="mn-alphanumeric">', '</div>');
$split_alpha_numeric_links = explode('<a href=', $split_alpha_numeric);

// build master list of links from exploded content
foreach ($split_alpha_numeric_links as $link) {
	array_push($link_master, scrape_between($link, '"', '">'));
}

// itterate over each master list and start grabbing specific content
foreach ($link_master as $link) {

	// account for whitespace / blank links
	if ($link !== '') {
		$res_page = crawley($link, $useragent);

		// Get rid of all the extra crap on these pages
		$res_page = scrape_between($res_page, 'mn-directory-searchresults', '<div id="mn-footer-navigation"');
		// echo $res_page;
		// die();
		$res = explode('mn-list-item-', $res_page);

		foreach ($res as $r) {
			$mn_listingcontent = explode('mn-listingcontent', $r);

			foreach ($mn_listingcontent as $list_item) {
				//echo $list_item . '<br />';
				$item_url = scrape_between($r, 'href="', '"');
				$item_name = scrape_between($r, '>', '</a>');
				$item_phone = scrape_between($r, 'Phone">', '</li>');
				echo $item_name . ' - ' . $item_phone . ' ' . $item_url . '<br />';
			}
			
			
		}
	}
	
	
}




?>

</div>

</body>
</html>