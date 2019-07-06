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

require('../inc/config-eu.php');
require('../inc/util.php');

$stateCities = [];

$url = 'https://www.' . $domain . '/about/sites';
$userAgent = $list[array_rand($list)];
$responsePage = crawley($url, $userAgent);
$seperateEU = scrapeBetween($responsePage, '<a name="EU"></a>', '<a name="ASIA"></a>');
$seperateColumns = scrapeBetween($seperateEU, '</h1>', '<h1>');

$explodeColumns = explode('class="box', $seperateColumns);
foreach ($explodeColumns as $col) {
	$explodeCountries = explode('<h4', $col);

	foreach ($explodeCountries as $country) {
		$countryName = scrapeBetween($country, '>', '</h4>');
		echo $countryName;

		$explodeCities = explode('<li', $country);
		foreach ($explodeCities as $city) {
			//echo $city;

			$cityHref = scrapeBetween($city, 'href="', '/">');
			echo "'" . $cityHref . "'," . '<br />';

		}

		echo '<br />';
	}
}

?>

</div>

</body>
</html>