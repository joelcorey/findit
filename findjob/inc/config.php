<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// require 'core/init.php'; A useless autoinclude file, currently missing

require_once 'useragentlist.php';

$categories = array(
  //"acc",  // accounting
  //"bus",  // business / management
  "etc",  // et cetera
  "cpg",  // gigs - computer
  "crg",  // gigs - creative
  "med",  // art / media / design
  //"npo",  // non profit
  //"rej",  // real estate
  "sad",  // sys admin and network
  //"tch",  // tech support
  //"sls",  // sales
  "sof",  // software
  "web" // web / info design
  //"wri" // writing editing and translation
  );

$cities = array(
  "milwaukee"
  );

$domain = "craigslist.org";

$keywords = array(
  "angular",
  "api",
  "associate",
  "automation",
  "C#",
  "javascript",
  "lemp",
  ".net",
  "nginx",
  "php",
  "pwa", // progressive web app
  "remote",
  "script",
  "telecommute",
  "ubuntu",
  "vue"
);

$filters = array(
  "NO CREDIT CARD REQUIRED!!!"
);