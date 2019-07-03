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
		// Non-unique at front so explode on back html elements
		$res = explode('<div class="mn-clear"></div>', $res_page);

		foreach ($res as $r) {
			$get_url = explode('itemprop="name">', $r);
			
			foreach ($get_url as $url) {
				$u = scrape_between($url, '<a href="', '" target');
				
				if ($u !== '') {
					$useragent = $list[array_rand($list)];
					$get_individual_page = crawley($u, $useragent);
					$get_individual_data = scrape_between($get_individual_page, '<div class="mn-member-sidebar">', '<div id="mn-member-tab-content-container" class="">'); 
					
					echo $get_individual_data;

					// this is to inefficent and leads to a 504 / timeout 
					// even with an EXTREMELY obscene cURL set timeout
					// threading? then pass to google sheets
					// .. ?
					//$name = scrape_between($get_individual_data, '<div id="mn-member-name-nologo">', '</div>');
					//$link = scrape_between($get_individual_data, '<a itemprop="url" href="', ' class="mn-print-url">');
					//$number = scrape_between($get_individual_data, '<div itemprop="telephone" class="mn-member-phone1">', '</div>');
					// echo $name . ' - ' . $link . '<br />';
					echo '<hr />';
				}
			}
			
			
			
			
		}
	}
	
	
}




?>

</div>

</body>
</html>