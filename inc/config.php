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
  "albuquerque",
  "bellingham",
  "bend",
  "butte",
  "bismarck",
  "boise",
  "corvallis",
  "csd",
  "dallas",
  "denver",
  "desmoines",
  "eastoregon",
  "elko",
  "eugene",
  "humboldt",
  "kalispell",
  "kansascity",
  "klamath",
  "kpr",
  "lewiston",
  "losangeles",
  "phoenix",
  "portland",
  "medford",
  "milwaukee",
  "minneapolis",
  "missoula",
  "oklahomacity",
  "olympic",
  "oregoncoast",
  "rapidcity",
  "reno",
  "roseburg",
  "salem",
  "sandiego",
  "saltlakecity",
  "siskiyou",
  "skagit",
  "seattle",
  "spokane",
  "stlouis",
  "susanville",
  "twinfalls",
  "victoria",
  "wenatchee",
  "wyoming",
  "yakima",
  "yuma"
  );

$domain = "craigslist.org";

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