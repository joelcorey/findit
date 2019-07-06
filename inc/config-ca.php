<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// require 'core/init.php'; A useless autoinclude file, currently missing

require_once 'useragentlist.php';

$categories = array(
  //"acc",  // accounting
  //"bus",  // business / management
  //"etc",  // et cetera
  "cpg",  // gigs - computer
  //"crg",  // gigs - creative
  //"med",  // art / media / design
  //"npo",  // non profit
  //"rej",  // real estate
  //"sad",  // sys admin and network
  //"tch",  // tech support
  //"sls",  // sales
  "sof",  // software
  "web" // web / info design
  //"wri" // writing editing and translation
  );

$cities = array(
  //'Alberta',
  'calgary',
  'edmonton',
  'ftmcmurray',
  'lethbridge',
  'hat',
  'peace',
  'reddeer',
  //'British Columbia',
  'cariboo',
  'comoxvalley',
  'abbotsford',
  'kamloops',
  'kelowna',
  'kootenays',
  'nanaimo',
  'princegeorge',
  'skeena',
  'sunshine',
  'vancouver',
  'victoria',
  'whistler',
  //'Manitoba',
  'winnipeg',
  //'New Brunswick',
  'newbrunswick',
  //'Newfoundland and Labrador',
  'newfoundland',
  //'Northwest Territories',
  'territories',
  'yellowknife',
  //'Nova Scotia',
  'halifax',
  //'Ontario',
  'barrie',
  'belleville',
  'brantford',
  'chatham',
  'cornwall',
  'guelph',
  'hamilton',
  'kingston',
  'kitchener',
  'londonon',
  'niagara',
  'ottawa',
  'owensound',
  'peterborough',
  'sarnia',
  'soo',
  'sudbury',
  'thunderbay',
  'toronto',
  'windsor',
  //'Prince Edward Island',
  'pei',
  //'Quebec',
  'montreal',
  'quebec',
  'saguenay',
  'sherbrooke',
  'troisrivieres',
  //'Saskatchewan',
  'regina',
  'saskatoon',
  //'Yukon Territory',
  'whitehorse',
);

$domain = "craigslist.ca";

$keywords = array(
  "api",
  "associate",
  "automation",
  "component",
  "dev",
  "gatsby",
  "html",
  "javascript",
  "linux",
  "node",
  "php",
  "pwa",
  "react",
  "react.js",
  "remote",
  "script",
  "spa",
  "telecommute",
  "ubuntu",
  "vue",
  "web"
);

$filters = array();