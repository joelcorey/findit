<?php

function crawley($url, $agent) {

$ch = curl_init();

$options = array(
  CURLOPT_URL => $url,
  CURLOPT_RETURNTRANSFER => TRUE,
  CURLOPT_FOLLOWLOCATION => TRUE,
  CURLOPT_AUTOREFERER => TRUE,
  CURLOPT_USERAGENT => $agent,
  CURLOPT_TIMEOUT => 50000
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

function scrapeBetween($data, $start, $end){
$data = stristr($data, $start); // Stripping all data from before $start
$data = substr($data, strlen($start));  // Stripping $start
$stop = stripos($data, $end);   // Getting the position of the $end of the data to scrape
$data = substr($data, 0, $stop);    // Stripping all data from after and including the $end of the data to scrape
return $data;   // Returning the scraped data from the function
}

function match_keywords(/*array &*/$search, /*array &*/$keys) { 	// A function to replace the foreach keyword search
$datamatch = NULL;
foreach ($keys as $key) {	
  if (stripos($search, $key) !== false) {
    $datamatch = $search;
  }
}
return $datamatch;
}