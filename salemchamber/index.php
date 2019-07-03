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
		echo $res_page;
		// $res = explode($response_page, 'mn-listingcontent');
		// foreach ($res as $r) {
		// 	$res_list_url = scrape_between($r, 'href="', '"');
		// 	$res_list_name = scrape_between($r, '>', '</a>');
		// 	$res_list_phone = scrape_between($r, 'Phone">', '</li>');
		// 	echo $res_list_name . ' - ' . $res_list_phone . ' ' . $res_list_url;
		// }
	}
	
	
}




?>

</div>

</body>
</html>