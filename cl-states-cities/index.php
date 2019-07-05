<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<title>findit - states / cities</title>

</head>
<body>

<div id="wrapper">
	<div id="browse">

	</div>

<?php

require('../inc/config.php');
require('../inc/util.php');

$stateCities = [];

$url = 'https://www.' . $domain . '/about/sites';
$userAgent = $list[array_rand($list)];
$responsePage = crawley($url, $userAgent);
$seperateUS = scrapeBetween($responsePage, '<a name="US"></a>', '<a name="CA"></a>');
$seperateColumns = scrapeBetween($seperateUS, '</h1>', '<h1>');

$explodeColumns = explode('class="box', $seperateColumns);
foreach ($explodeColumns as $col) {
	$explodeStates = explode('<h4', $col);

	foreach ($explodeStates as $state) {
		$stateName = scrapeBetween($state, '>', '</h4>');
		echo $stateName;

		$explodeCities = explode('<li', $state);
		foreach ($explodeCities as $city) {
			//echo $city;

			$cityDomainName = scrapeBetween($city, 'https://', '.craigslist');
			echo "'" . $cityDomainName . "'," . '<br />';

		}

		echo '<br />';
	}
}

?>

</div>

</body>
</html>