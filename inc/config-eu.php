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
  //'Austria',
  'https://vienna.craigslist.at',
  //'Belgium',
  'https://brussels.craigslist.org',
  //'Bulgaria',
  'https://bulgaria.craigslist.org',
  //'Croatia',
  'https://zagreb.craigslist.org',
  //'Czech Republic',
  'https://prague.craigslist.cz',
  //'Denmark',
  'https://copenhagen.craigslist.org',
  //'Finland',
  'https://helsinki.craigslist.fi',
  //'France',
  'https://bordeaux.craigslist.org',
  'https://rennes.craigslist.org',
  'https://grenoble.craigslist.org',
  'https://lille.craigslist.org',
  'https://loire.craigslist.org',
  'https://lyon.craigslist.org',
  'https://marseilles.craigslist.org',
  'https://montpellier.craigslist.org',
  'https://cotedazur.craigslist.org',
  'https://rouen.craigslist.org',
  'https://paris.craigslist.org',
  'https://strasbourg.craigslist.org',
  'https://toulouse.craigslist.org',
  //'Germany',
  'https://berlin.craigslist.de',
  'https://bremen.craigslist.de',
  'https://cologne.craigslist.de',
  'https://dresden.craigslist.de',
  'https://dusseldorf.craigslist.de',
  'https://essen.craigslist.de',
  'https://frankfurt.craigslist.de',
  'https://hamburg.craigslist.de',
  'https://hannover.craigslist.de',
  'https://heidelberg.craigslist.de',
  'https://kaiserslautern.craigslist.de',
  'https://leipzig.craigslist.de',
  'https://munich.craigslist.de',
  'https://nuremberg.craigslist.de',
  'https://stuttgart.craigslist.de',
  //'Greece',
  'https://athens.craigslist.gr',
  //'Hungary',
  'https://budapest.craigslist.org',
  //'Iceland',
  'https://reykjavik.craigslist.org',
  //'Ireland',
  'https://dublin.craigslist.org',
  //'Italy',
  'https://bologna.craigslist.it',
  'https://florence.craigslist.it',
  'https://genoa.craigslist.it',
  'https://milan.craigslist.it',
  'https://naples.craigslist.it',
  'https://perugia.craigslist.it',
  'https://rome.craigslist.it',
  'https://sardinia.craigslist.it',
  'https://sicily.craigslist.it',
  'https://torino.craigslist.it',
  'https://venice.craigslist.it',
  //'Luxembourg',
  'https://luxembourg.craigslist.org',
  //'Netherlands',
  'https://amsterdam.craigslist.org',
  //'Norway',
  'https://oslo.craigslist.org',
  //'Poland',
  'https://warsaw.craigslist.pl',
  //'Portugal',
  'https://faro.craigslist.pt',
  'https://lisbon.craigslist.pt',
  'https://porto.craigslist.pt',
  //'Romania',
  'https://bucharest.craigslist.org',
  //'Russian Federation',
  'https://moscow.craigslist.org',
  'https://stpetersburg.craigslist.org',
  //'Spain',
  'https://alicante.craigslist.es',
  'https://baleares.craigslist.es',
  'https://barcelona.craigslist.es',
  'https://bilbao.craigslist.es',
  'https://cadiz.craigslist.es',
  'https://canarias.craigslist.es',
  'https://granada.craigslist.es',
  'https://madrid.craigslist.es',
  'https://malaga.craigslist.es',
  'https://sevilla.craigslist.es',
  'https://valencia.craigslist.es',
  //'Sweden'',
  'https://stockholm.craigslist.se',
  //'Switzerland',
  'https://basel.craigslist.ch',
  'https://bern.craigslist.ch',
  'https://geneva.craigslist.ch',
  'https://lausanne.craigslist.ch',
  'https://zurich.craigslist.ch',
  //'Turkey',
  'https://istanbul.craigslist.com.tr',
  //'Ukraine',
  'https://ukraine.craigslist.org',
  //'United Kingdom',
  'https://aberdeen.craigslist.co.uk',
  'https://bath.craigslist.co.uk',
  'https://belfast.craigslist.co.uk',
  'https://birmingham.craigslist.co.uk',
  'https://brighton.craigslist.co.uk',
  'https://bristol.craigslist.co.uk',
  'https://cambridge.craigslist.co.uk',
  'https://cardiff.craigslist.co.uk',
  'https://coventry.craigslist.co.uk',
  'https://derby.craigslist.co.uk',
  'https://devon.craigslist.co.uk',
  'https://dundee.craigslist.co.uk',
  'https://norwich.craigslist.co.uk',
  'https://eastmids.craigslist.co.uk',
  'https://edinburgh.craigslist.co.uk',
  'https://essex.craigslist.co.uk',
  'https://glasgow.craigslist.co.uk',
  'https://hampshire.craigslist.co.uk',
  'https://kent.craigslist.co.uk',
  'https://leeds.craigslist.co.uk',
  'https://liverpool.craigslist.co.uk',
  'https://london.craigslist.co.uk',
  'https://manchester.craigslist.co.uk',
  'https://newcastle.craigslist.co.uk',
  'https://nottingham.craigslist.co.uk',
  'https://oxford.craigslist.co.uk',
  'https://sheffield.craigslist.co.uk'
);

// useless for this way of doing it ..
// $domain = "craigslist.ca";

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