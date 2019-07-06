<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<title>findit - canada / cities</title>

</head>
<body>

<div id="wrapper">
	<div id="browse">
hi
	</div>

<?php

// echo 'wtf';
// die();

require('../inc/config-ca.php');
require('../inc/util.php');

$territoryCities = [];

$url = 'https://www.' . $domain . '/about/sites';
$userAgent = $list[array_rand($list)];
$responsePage = crawley($url, $userAgent);
$seperateCA = scrapeBetween($responsePage, '<a name="CA"></a>', '<a name="EU"></a>');

$seperateColumns = scrapeBetween($seperateCA, '</h1>', '<h1>');

$explodeColumns = explode('class="box', $seperateColumns);
foreach ($explodeColumns as $col) {
	$explodeTerritories = explode('<h4', $col);

	foreach ($explodeTerritories as $territory) {
		$territoryName = scrapeBetween($territory, '>', '</h4>');
		echo $territoryName;

		$explodeCities = explode('<li', $territory);
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