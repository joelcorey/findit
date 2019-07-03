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
  "bend",
  "butte",
  "bismarck",
  "boise",
  "corvallis",
  "dallas",
  "desmoines",
  "eastoregon",
  "elko",
  "eugene",
  "kansascity",
  "kpr",
  "lewiston",
  "phoenix",
  "portland",
  "medford",
  "milwaukee",
  "minneapolis",
  "oklahomacity",
  "rapidcity",
  "reno",
  "salem",
  "saltlakecity",
  "seattle",
  "stlouis",
  "yakima"
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