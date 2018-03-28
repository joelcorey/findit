<?php

class crawley {

	function __construct($url, &$list) {

		$agent = $list[array_rand($list)];
		$url = $url;

		$ch = curl_init();

		$options = array(
			CURLOPT_URL => $url,
			CURLOPT_RETURNTRANSFER => TRUE,
			CURLOPT_FOLLOWLOCATION => TRUE,
			CURLOPT_AUTOREFERER => TRUE,
			CURLOPT_USERAGENT => $agent,
			CURLOPT_TIMEOUT => 1800
		);

		curl_setopt_array($ch, $options);

		$data = curl_exec($ch);

		if(!$data){
			echo "<br />cURL error number: " . curl_errno($ch);
			echo "<br />cURL error: " . curl_error($ch) . " on URL - " . $url;
			var_dump(curl_getinfo($ch));
			var_dump(curl_error($ch));
			exit;
		}

		curl_close($ch);

		return $data;
	}

}