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
		$useragent = $list[array_rand($list)];
		$res_page = crawley($link, $useragent);

		// Get rid of all the extra crap on these pages
		$res_page = scrape_between($res_page, 'mn-members1col">', '<div id="mn-footer-navigation"');
		// echo $res_page;
		// die();
		$res = explode('<div class="mn-clear"></div>', $res_page);

		foreach ($res as $r) {
			//echo $r;

			$get_url = explode('itemprop="name">', $r);
			// print_r($get_url);
			// die();

			foreach ($get_url as $url) {
				
				$u = scrape_between($url, '<a href="', '" target');
				echo $u;
				
				if ($u !== '') {
					$useragent = $list[array_rand($list)];
					$get_individual_page = crawley($u, $useragent);
					$get_individual_data = scrape_between($get_individual_page, '<div class="mn-member-sidebar">', '<div id="mn-member-tab-content-container" class="">'); 
					
					echo $get_individual_data;
				}
			}
			
			
			
			
		}
	}
	
	
}




?>

</div>

</body>
</html>