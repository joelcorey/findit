<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'useragentlist.php';


$categories = array(
  'd/internet-engineering/search/eng', // internet engineering
  'd/software-qa-dba-etc/search/sof', // software/qa/dba/etc
  'd/systems-networking/search/sad', // systems/networking
  'd/web-html-info-design/search/web', // web/html/info design
  'd/computer-gigs/search/cpg' // computer gigs
  );

$keywords = array(
  "api",
  "associate",
  "automation",
  "bash",
  "bolt",
  "cms",
  "css",
  "drupal",
  "gis",
  "html",
  "javascript",
  "lemp",
  "linux",
  "nginx",
  "php",
  "script",
  "symfony",
  "wordpress"
);

$filters = array(
  "NO CREDIT CARD REQUIRED!!!",
  "Part Time - Work from Home - Social Media Evaluator"
);

$master = array(
  array(
    'Alabama',
    'auburn.craigslist.org/',
    'bham.craigslist.org/',
    'dothan.craigslist.org/',
    'shoals.craigslist.org/',
    'gadsden.craigslist.org/',
    'huntsville.craigslist.org/',
    'mobile.craigslist.org/',
    'montgomery.craigslist.org/',
    'tuscaloosa.craigslist.org/'
  ),
  array(
    'Alaska',
    'anchorage.craigslist.org/',
    'fairbanks.craigslist.org/',
    'kenai.craigslist.org/',
    'juneau.craigslist.org/'
    ),
  array(
    'Arizona',
    'flagstaff.craigslist.org/',
    'mohave.craigslist.org/',
    'phoenix.craigslist.org/',
    'prescott.craigslist.org/',
    'showlow.craigslist.org/',
    'sierravista.craigslist.org/',
    'tucson.craigslist.org/',
    'yuma.craigslist.org/'
    ),
  array(
    'Arkansas',
    'bakersfield.craigslist.org/',
    'chico.craigslist.org/',
    'fresno.craigslist.org/',
    'goldcountry.craigslist.org/',
    'hanford.craigslist.org/',
    'humboldt.craigslist.org/',
    'imperial.craigslist.org/',
    'inlandempire.craigslist.org/',
    'losangeles.craigslist.org/',
    'mendocino.craigslist.org/',
    'merced.craigslist.org/',
    'modesto.craigslist.org/',
    'monterey.craigslist.org/',
    'orangecounty.craigslist.org/',
    'palmsprings.craigslist.org/',
    'redding.craigslist.org/',
    'sacramento.craigslist.org/',
    'sandiego.craigslist.org/',
    'sfbay.craigslist.org/',
    'slo.craigslist.org/',
    'santabarbara.craigslist.org/',
    'santamaria.craigslist.org/',
    'siskiyou.craigslist.org/',
    'stockton.craigslist.org/',
    'susanville.craigslist.org/',
    'ventura.craigslist.org/',
    'visalia.craigslist.org/',
    'yubasutter.craigslist.org/'
    ),
  array(
    'Colorado',
    'boulder.craigslist.org/',
    'cosprings.craigslist.org/',
    'denver.craigslist.org/',
    'eastco.craigslist.org/',
    'fortcollins.craigslist.org/',
    'rockies.craigslist.org/',
    'pueblo.craigslist.org/',
    'westslope.craigslist.org/'
    ),
  array(
    'Connecticut',
    'newlondon.craigslist.org/',
    'hartford.craigslist.org/',
    'newhaven.craigslist.org/',
    'nwct.craigslist.org/'
    ), 
  array(
    'Delaware',
    'delaware.craigslist.org/'
    ),
  array(
    'District of Columbia',
    'washingtondc.craigslist.org/'
    ),
  array(
    'Florida',
    'http://miami.craigslist.org/brw/',
    'daytona.craigslist.org/',
    'keys.craigslist.org/',
    'fortlauderdale.craigslist.org/',
    'fortmyers.craigslist.org/',
    'gainesville.craigslist.org/',
    'cfl.craigslist.org/',
    'jacksonville.craigslist.org/',
    'lakeland.craigslist.org/',
    'http://miami.craigslist.org/mdc/',
    'lakecity.craigslist.org/',
    'ocala.craigslist.org/',
    'okaloosa.craigslist.org/',
    'orlando.craigslist.org/',
    'panamacity.craigslist.org/',
    'pensacola.craigslist.org/',
    'sarasota.craigslist.org/',
    'miami.craigslist.org/',
    'spacecoast.craigslist.org/',
    'staugustine.craigslist.org/',
    'tallahassee.craigslist.org/',
    'tampa.craigslist.org/',
    'treasure.craigslist.org/',
    'http://miami.craigslist.org/pbc/'
    ),
  array(
    'Georgia',
    'albanyga.craigslist.org/',
    'athensga.craigslist.org/',
    'atlanta.craigslist.org/',
    'augusta.craigslist.org/',
    'brunswick.craigslist.org/',
    'columbusga.craigslist.org/',
    'macon.craigslist.org/',
    'nwga.craigslist.org/',
    'savannah.craigslist.org/',
    'statesboro.craigslist.org/',
    'valdosta.craigslist.org/'
    ),  
  array(
    'Hawaii',
    'honolulu.craigslist.org/'
    ),
  array(
    'Idaho',
    'boise.craigslist.org/',
    'eastidaho.craigslist.org/',
    'lewiston.craigslist.org/',
    'twinfalls.craigslist.org/'
    ),
  array(
    'Illinois',
    'bn.craigslist.org/',
    'chambana.craigslist.org/',
    'chicago.craigslist.org/',
    'decatur.craigslist.org/',
    'lasalle.craigslist.org/',
    'mattoon.craigslist.org/',
    'peoria.craigslist.org/',
    'rockford.craigslist.org/',
    'carbondale.craigslist.org/',
    'springfieldil.craigslist.org/',
    'quincy.craigslist.org/'
    ),
  array(
    'Indiana',
    'bloomington.craigslist.org/',
    'evansville.craigslist.org/',
    'fortwayne.craigslist.org/',
    'indianapolis.craigslist.org/',
    'kokomo.craigslist.org/',
    'tippecanoe.craigslist.org/',
    'muncie.craigslist.org/',
    'richmondin.craigslist.org/',
    'southbend.craigslist.org/',
    'terrehaute.craigslist.org/'
    ),  
  array(
    'Iowa',
    'ames.craigslist.org/',
    'cedarrapids.craigslist.org/',
    'desmoines.craigslist.org/',
    'dubuque.craigslist.org/',
    'fortdodge.craigslist.org/',
    'iowacity.craigslist.org/',
    'masoncity.craigslist.org/',
    'quadcities.craigslist.org/',
    'siouxcity.craigslist.org/',
    'ottumwa.craigslist.org/',
    'waterloo.craigslist.org/'
    ),
  array(
    'Kansas',
    'lawrence.craigslist.org/',
    'ksu.craigslist.org/',
    'nwks.craigslist.org/',
    'salina.craigslist.org/',
    'seks.craigslist.org/',
    'swks.craigslist.org/',
    'topeka.craigslist.org/',
    'wichita.craigslist.org/'
    ),
  array(
    'Kentucky',
    'bgky.craigslist.org/',
    'eastky.craigslist.org/',
    'lexington.craigslist.org/',
    'louisville.craigslist.org/',
    'owensboro.craigslist.org/',
    'westky.craigslist.org/'
    ),
  array(
    'Louisiana',
    'batonrouge.craigslist.org/',
    'cenla.craigslist.org/',
    'houma.craigslist.org/',
    'lafayette.craigslist.org/',
    'lakecharles.craigslist.org/',
    'monroe.craigslist.org/',
    'neworleans.craigslist.org/',
    'shreveport.craigslist.org/'
    ),  
  array(
    'Maine',
    'maine.craigslist.org/'
    ),
  array(
    'Maryland',
    'annapolis.craigslist.org/',
    'baltimore.craigslist.org/',
    'easternshore.craigslist.org/',
    'frederick.craigslist.org/',
    'smd.craigslist.org/',
    'westmd.craigslist.org/'
    ),
  array(
    'Massachusetts',
    'boston.craigslist.org/',
    'capecod.craigslist.org/'.
    'southcoast.craigslist.org/',
    'westernmass.craigslist.org/',
    'worcester.craigslist.org/'
    ),
  array(
    'Michigan',
    'annarbor.craigslist.org/',
    'battlecreek.craigslist.org/',
    'centralmich.craigslist.org/',
    'detroit.craigslist.org/',
    'flint.craigslist.org/',
    'grandrapids.craigslist.org/',
    'holland.craigslist.org/',
    'jxn.craigslist.org/',
    'kalamazoo.craigslist.org/',
    'lansing.craigslist.org/',
    'monroemi.craigslist.org/',
    'muskegon.craigslist.org/',
    'nmi.craigslist.org/',
    'porthuron.craigslist.org/',
    'saginaw.craigslist.org/',
    'swmi.craigslist.org/',
    'thumb.craigslist.org/',
    'up.craigslist.org/'
    ),  
  array(
    'Minnesota',
    'bemidji.craigslist.org/',
    'brainerd.craigslist.org/',
    'duluth.craigslist.org/',
    'mankato.craigslist.org/',
    'minneapolis.craigslist.org/',
    'rmn.craigslist.org/',
    'marshall.craigslist.org/',
    'stcloud.craigslist.org/'
    ),
  array(
    'Mississippi',
    'gulfport.craigslist.org/',
    'hattiesburg.craigslist.org/',
    'jackson.craigslist.org/',
    'meridian.craigslist.org/',
    'northmiss.craigslist.org/',
    'natchez.craigslist.org/'
    ),
  array(
    'Missouri',
    'columbiamo.craigslist.org/',
    'joplin.craigslist.org/',
    'kansascity.craigslist.org/',
    'kirksville.craigslist.org/',
    'loz.craigslist.org/',
    'semo.craigslist.org/',
    'springfield.craigslist.org/',
    'stjoseph.craigslist.org/',
    'stlouis.craigslist.org/'
    ),
  array(
    'Montana',
    'billings.craigslist.org/',
    'bozeman.craigslist.org/',
    'butte.craigslist.org/',
    'greatfalls.craigslist.org/',
    'helena.craigslist.org/',
    'kalispell.craigslist.org/',
    'missoula.craigslist.org/',
    'montana.craigslist.org/'
    ),  
  array(
    'Nebraska',
    'grandisland.craigslist.org/',
    'lincoln.craigslist.org/',
    'northplatte.craigslist.org/',
    'omaha.craigslist.org/',
    'scottsbluff.craigslist.org/'
    ),
  array(
    'Nevada',
    'elko.craigslist.org/',
    'lasvegas.craigslist.org/',
    'reno.craigslist.org/'
    ),
  array(
    'New Hampshire',
    'nh.craigslist.org/'
    ),
  array(
    'New Jersey',
    'cnj.craigslist.org/',
    'jerseyshore.craigslist.org/',
    'newjersey.craigslist.org/',
    'southjersey.craigslist.org/'
    ),  
  array(
    'New Mexico',
    'albuquerque.craigslist.org/',
    'clovis.craigslist.org/',
    'farmington.craigslist.org/',
    'lascruces.craigslist.org/',
    'roswell.craigslist.org/',
    'santafe.craigslist.org/'
    ),
  array(
    'New York',
    'albany.craigslist.org/',
    'binghamton.craigslist.org/',
    'buffalo.craigslist.org/',
    'catskills.craigslist.org/',
    'chautauqua.craigslist.org/',
    'elmira.craigslist.org/',
    'fingerlakes.craigslist.org/',
    'glensfalls.craigslist.org/',
    'hudsonvalley.craigslist.org/',
    'ithaca.craigslist.org/',
    'longisland.craigslist.org/',
    'newyork.craigslist.org/',
    'oneonta.craigslist.org/',
    'plattsburgh.craigslist.org/',
    'potsdam.craigslist.org/',
    'rochester.craigslist.org/',
    'syracuse.craigslist.org/',
    'twintiers.craigslist.org/',
    'utica.craigslist.org/',
    'watertown.craigslist.org/'
    ),
  array(
    'North Carolina',
    'asheville.craigslist.org/',
    'boone.craigslist.org/',
    'charlotte.craigslist.org/',
    'eastnc.craigslist.org/',
    'fayetteville.craigslist.org/',
    'greensboro.craigslist.org/',
    'hickory.craigslist.org/',
    'onslow.craigslist.org/',
    'outerbanks.craigslist.org/',
    'raleigh.craigslist.org/',
    'wilmington.craigslist.org/',
    'winstonsalem.craigslist.org/'
    ),
  array(
    'North Dakota',
    'bismarck.craigslist.org/',
    'fargo.craigslist.org/',
    'grandforks.craigslist.org/',
    'nd.craigslist.org/'
    ),
  array(
    'Ohio',
    'akroncanton.craigslist.org/',
    'ashtabula.craigslist.org/',
    'athensohio.craigslist.org/',
    'chillicothe.craigslist.org/',
    'cincinnati.craigslist.org/',
    'cleveland.craigslist.org/',
    'columbus.craigslist.org/',
    'dayton.craigslist.org/',
    'limaohio.craigslist.org/',
    'mansfield.craigslist.org/',
    'sandusky.craigslist.org/',
    'toledo.craigslist.org/',
    'tuscarawas.craigslist.org/',
    'youngstown.craigslist.org/',
    'zanesville.craigslist.org/'
    ),  
  array(
    'Oklahoma',
    'lawton.craigslist.org/',
    'enid.craigslist.org/',
    'oklahomacity.craigslist.org/',
    'stillwater.craigslist.org/',
    'tulsa.craigslist.org/'
    ),
  array(
    'Oregon',
    'bend.craigslist.org/',
    'corvallis.craigslist.org/',
    'eastoregon.craigslist.org/',
    'eugene.craigslist.org/',
    'klamath.craigslist.org/',
    'medford.craigslist.org/',
    'oregoncoast.craigslist.org/',
    'portland.craigslist.org/',
    'roseburg.craigslist.org/',
    'salem.craigslist.org/'
    ),
  array(
    'Pennsylvania',
    'altoona.craigslist.org/',
    'chambersburg.craigslist.org/',
    'erie.craigslist.org/',
    'harrisburg.craigslist.org/',
    'lancaster.craigslist.org/',
    'allentown.craigslist.org/',
    'meadville.craigslist.org/',
    'philadelphia.craigslist.org/',
    'pittsburgh.craigslist.org/',
    'poconos.craigslist.org/',
    'reading.craigslist.org/',
    'scranton.craigslist.org/',
    'pennstate.craigslist.org/',
    'williamsport.craigslist.org/',
    'york.craigslist.org/'
    ),
  array(
    'Rhode Island',
    'providence.craigslist.org/'
    ),  
  array(
    'South Carolina',
    'charleston.craigslist.org/',
    'columbia.craigslist.org/',
    'florencesc.craigslist.org/',
    'greenville.craigslist.org/',
    'hiltonhead.craigslist.org/',
    'myrtlebeach.craigslist.org/'
    ),  
  array(
    'South Dakota',
    'nesd.craigslist.org/',
    'csd.craigslist.org/',
    'rapidcity.craigslist.org/',
    'siouxfalls.craigslist.org/',
    'sd.craigslist.org/'
    ),
  array(
    'Tennessee',
    'chattanooga.craigslist.org/',
    'clarksville.craigslist.org/',
    'cookeville.craigslist.org/',
    'jacksontn.craigslist.org/',
    'knoxville.craigslist.org/',
    'memphis.craigslist.org/',
    'nashville.craigslist.org/',
    'tricities.craigslist.org/'
    ),
  array(
    'Texas',
    'abilene.craigslist.org/',
    'amarillo.craigslist.org/',
    'austin.craigslist.org/',
    'beaumont.craigslist.org/',
    'brownsville.craigslist.org/',
    'collegestation.craigslist.org/',
    'corpuschristi.craigslist.org/',
    'dallas.craigslist.org/',
    'nacogdoches.craigslist.org/',
    'delrio.craigslist.org/',
    'elpaso.craigslist.org/',
    'galveston.craigslist.org/',
    'houston.craigslist.org/',
    'killeen.craigslist.org/',
    'laredo.craigslist.org/',
    'lubbock.craigslist.org/',
    'mcallen.craigslist.org/',
    'odessa.craigslist.org/',
    'sanangelo.craigslist.org/',
    'sanantonio.craigslist.org/',
    'sanmarcos.craigslist.org/',
    'bigbend.craigslist.org/',
    'texoma.craigslist.org/',
    'easttexas.craigslist.org/',
    'victoriatx.craigslist.org/',
    'waco.craigslist.org/',
    'wichitafalls.craigslist.org/'
    ),
  array(
    'Utah',
    'logan.craigslist.org/',
    'ogden.craigslist.org/',
    'provo.craigslist.org/',
    'saltlakecity.craigslist.org/',
    'stgeorge.craigslist.org/'
    ),
  array(
    'Vermont',
    'vermont.craigslist.org/'
    ),
  array(
    'Virginia',
    'charlottesville.craigslist.org/',
    'danville.craigslist.org/',
    'fredericksburg.craigslist.org/',
    'norfolk.craigslist.org/',
    'harrisonburg.craigslist.org/',
    'lynchburg.craigslist.org/',
    'blacksburg.craigslist.org/',
    'richmond.craigslist.org/',
    'roanoke.craigslist.org/',
    'swva.craigslist.org/',
    'winchester.craigslist.org/'
    ),
  array(
    'Washington',
    'bellingham.craigslist.org/',
    'kpr.craigslist.org/',
    'moseslake.craigslist.org/',
    'olympic.craigslist.org/',
    'pullman.craigslist.org/',
    'seattle.craigslist.org/',
    'skagit.craigslist.org/',
    'spokane.craigslist.org/',
    'wenatchee.craigslist.org/',
    'yakima.craigslist.org/'
    ),
  array(
    'West Virginia',
    'charlestonwv.craigslist.org/',
    'martinsburg.craigslist.org/',
    'huntington.craigslist.org/',
    'morgantown.craigslist.org/',
    'wheeling.craigslist.org/',
    'parkersburg.craigslist.org/',
    'swv.craigslist.org/',
    'wv.craigslist.org/'
    ), 
  array(
    'Wisconsin',
    'appleton.craigslist.org/',
    'eauclaire.craigslist.org/',
    'greenbay.craigslist.org/',
    'janesville.craigslist.org/',
    'racine.craigslist.org/',
    'lacrosse.craigslist.org/',
    'madison.craigslist.org/',
    'milwaukee.craigslist.org/',
    'northernwi.craigslist.org/',
    'sheboygan.craigslist.org/',
    'wausau.craigslist.org/'
    ),
  array(
    'Wyoming',
    'wyoming.craigslist.org/'
    ),
  array(
    'Territories',
    'micronesia.craigslist.org/',
    'puertorico.craigslist.org/',
    'virgin.craigslist.org/'
    ),
  );


$master_https = array(
  array(
    'Alabama',
    'https://auburn.craigslist.org/',
    'https://bham.craigslist.org/',
    'https://dothan.craigslist.org/',
    'https://shoals.craigslist.org/',
    'https://gadsden.craigslist.org/',
    'https://huntsville.craigslist.org/',
    'https://mobile.craigslist.org/',
    'https://montgomery.craigslist.org/',
    'https://tuscaloosa.craigslist.org/'
  ),
  array(
    'Alaska',
    'https://anchorage.craigslist.org/',
    'https://fairbanks.craigslist.org/',
    'https://kenai.craigslist.org/',
    'https://juneau.craigslist.org/'
    ),
  array(
    'Arizona',
    'https://flagstaff.craigslist.org/',
    'https://mohave.craigslist.org/',
    'https://phoenix.craigslist.org/',
    'https://prescott.craigslist.org/',
    'https://showlow.craigslist.org/',
    'https://sierravista.craigslist.org/',
    'https://tucson.craigslist.org/',
    'https://yuma.craigslist.org/'
    ),
  array(
    'Arkansas',
    'https://bakersfield.craigslist.org/',
    'https://chico.craigslist.org/',
    'https://fresno.craigslist.org/',
    'https://goldcountry.craigslist.org/',
    'https://hanford.craigslist.org/',
    'https://humboldt.craigslist.org/',
    'https://imperial.craigslist.org/',
    'https://inlandempire.craigslist.org/',
    'https://losangeles.craigslist.org/',
    'https://mendocino.craigslist.org/',
    'https://merced.craigslist.org/',
    'https://modesto.craigslist.org/',
    'https://monterey.craigslist.org/',
    'https://orangecounty.craigslist.org/',
    'https://palmsprings.craigslist.org/',
    'https://redding.craigslist.org/',
    'https://sacramento.craigslist.org/',
    'https://sandiego.craigslist.org/',
    'https://sfbay.craigslist.org/',
    'https://slo.craigslist.org/',
    'https://santabarbara.craigslist.org/',
    'https://santamaria.craigslist.org/',
    'https://siskiyou.craigslist.org/',
    'https://stockton.craigslist.org/',
    'https://susanville.craigslist.org/',
    'https://ventura.craigslist.org/',
    'https://visalia.craigslist.org/',
    'https://yubasutter.craigslist.org/'
    ),
  array(
    'Colorado',
    'https://boulder.craigslist.org/',
    'https://cosprings.craigslist.org/',
    'https://denver.craigslist.org/',
    'https://eastco.craigslist.org/',
    'https://fortcollins.craigslist.org/',
    'https://rockies.craigslist.org/',
    'https://pueblo.craigslist.org/',
    'https://westslope.craigslist.org/'
    ),
  array(
    'Connecticut',
    'https://newlondon.craigslist.org/',
    'https://hartford.craigslist.org/',
    'https://newhaven.craigslist.org/',
    'https://nwct.craigslist.org/'
    ), 
  array(
    'Delaware',
    'https://delaware.craigslist.org/'
    ),
  array(
    'District of Columbia',
    'https://washingtondc.craigslist.org/'
    ),
  array(
    'Florida',
    'http://miami.craigslist.org/brw/',
    'https://daytona.craigslist.org/',
    'https://keys.craigslist.org/',
    'https://fortlauderdale.craigslist.org/',
    'https://fortmyers.craigslist.org/',
    'https://gainesville.craigslist.org/',
    'https://cfl.craigslist.org/',
    'https://jacksonville.craigslist.org/',
    'https://lakeland.craigslist.org/',
    'http://miami.craigslist.org/mdc/',
    'https://lakecity.craigslist.org/',
    'https://ocala.craigslist.org/',
    'https://okaloosa.craigslist.org/',
    'https://orlando.craigslist.org/',
    'https://panamacity.craigslist.org/',
    'https://pensacola.craigslist.org/',
    'https://sarasota.craigslist.org/',
    'https://miami.craigslist.org/',
    'https://spacecoast.craigslist.org/',
    'https://staugustine.craigslist.org/',
    'https://tallahassee.craigslist.org/',
    'https://tampa.craigslist.org/',
    'https://treasure.craigslist.org/',
    'http://miami.craigslist.org/pbc/'
    ),
  array(
    'Georgia',
    'https://albanyga.craigslist.org/',
    'https://athensga.craigslist.org/',
    'https://atlanta.craigslist.org/',
    'https://augusta.craigslist.org/',
    'https://brunswick.craigslist.org/',
    'https://columbusga.craigslist.org/',
    'https://macon.craigslist.org/',
    'https://nwga.craigslist.org/',
    'https://savannah.craigslist.org/',
    'https://statesboro.craigslist.org/',
    'https://valdosta.craigslist.org/'
    ),  
  array(
    'Hawaii',
    'https://honolulu.craigslist.org/'
    ),
  array(
    'Idaho',
    'https://boise.craigslist.org/',
    'https://eastidaho.craigslist.org/',
    'https://lewiston.craigslist.org/',
    'https://twinfalls.craigslist.org/'
    ),
  array(
    'Illinois',
    'https://bn.craigslist.org/',
    'https://chambana.craigslist.org/',
    'https://chicago.craigslist.org/',
    'https://decatur.craigslist.org/',
    'https://lasalle.craigslist.org/',
    'https://mattoon.craigslist.org/',
    'https://peoria.craigslist.org/',
    'https://rockford.craigslist.org/',
    'https://carbondale.craigslist.org/',
    'https://springfieldil.craigslist.org/',
    'https://quincy.craigslist.org/'
    ),
  array(
    'Indiana',
    'https://bloomington.craigslist.org/',
    'https://evansville.craigslist.org/',
    'https://fortwayne.craigslist.org/',
    'https://indianapolis.craigslist.org/',
    'https://kokomo.craigslist.org/',
    'https://tippecanoe.craigslist.org/',
    'https://muncie.craigslist.org/',
    'https://richmondin.craigslist.org/',
    'https://southbend.craigslist.org/',
    'https://terrehaute.craigslist.org/'
    ),  
  array(
    'Iowa',
    'https://ames.craigslist.org/',
    'https://cedarrapids.craigslist.org/',
    'https://desmoines.craigslist.org/',
    'https://dubuque.craigslist.org/',
    'https://fortdodge.craigslist.org/',
    'https://iowacity.craigslist.org/',
    'https://masoncity.craigslist.org/',
    'https://quadcities.craigslist.org/',
    'https://siouxcity.craigslist.org/',
    'https://ottumwa.craigslist.org/',
    'https://waterloo.craigslist.org/'
    ),
  array(
    'Kansas',
    'https://lawrence.craigslist.org/',
    'https://ksu.craigslist.org/',
    'https://nwks.craigslist.org/',
    'https://salina.craigslist.org/',
    'https://seks.craigslist.org/',
    'https://swks.craigslist.org/',
    'https://topeka.craigslist.org/',
    'https://wichita.craigslist.org/'
    ),
  array(
    'Kentucky',
    'https://bgky.craigslist.org/',
    'https://eastky.craigslist.org/',
    'https://lexington.craigslist.org/',
    'https://louisville.craigslist.org/',
    'https://owensboro.craigslist.org/',
    'https://westky.craigslist.org/'
    ),
  array(
    'Louisiana',
    'https://batonrouge.craigslist.org/',
    'https://cenla.craigslist.org/',
    'https://houma.craigslist.org/',
    'https://lafayette.craigslist.org/',
    'https://lakecharles.craigslist.org/',
    'https://monroe.craigslist.org/',
    'https://neworleans.craigslist.org/',
    'https://shreveport.craigslist.org/'
    ),  
  array(
    'Maine',
    'https://maine.craigslist.org/'
    ),
  array(
    'Maryland',
    'https://annapolis.craigslist.org/',
    'https://baltimore.craigslist.org/',
    'https://easternshore.craigslist.org/',
    'https://frederick.craigslist.org/',
    'https://smd.craigslist.org/',
    'https://westmd.craigslist.org/'
    ),
  array(
    'Massachusetts',
    'https://boston.craigslist.org/',
    'https://capecod.craigslist.org/'.
    'https://southcoast.craigslist.org/',
    'https://westernmass.craigslist.org/',
    'https://worcester.craigslist.org/'
    ),
  array(
    'Michigan',
    'https://annarbor.craigslist.org/',
    'https://battlecreek.craigslist.org/',
    'https://centralmich.craigslist.org/',
    'https://detroit.craigslist.org/',
    'https://flint.craigslist.org/',
    'https://grandrapids.craigslist.org/',
    'https://holland.craigslist.org/',
    'https://jxn.craigslist.org/',
    'https://kalamazoo.craigslist.org/',
    'https://lansing.craigslist.org/',
    'https://monroemi.craigslist.org/',
    'https://muskegon.craigslist.org/',
    'https://nmi.craigslist.org/',
    'https://porthuron.craigslist.org/',
    'https://saginaw.craigslist.org/',
    'https://swmi.craigslist.org/',
    'https://thumb.craigslist.org/',
    'https://up.craigslist.org/'
    ),  
  array(
    'Minnesota',
    'https://bemidji.craigslist.org/',
    'https://brainerd.craigslist.org/',
    'https://duluth.craigslist.org/',
    'https://mankato.craigslist.org/',
    'https://minneapolis.craigslist.org/',
    'https://rmn.craigslist.org/',
    'https://marshall.craigslist.org/',
    'https://stcloud.craigslist.org/'
    ),
  array(
    'Mississippi',
    'https://gulfport.craigslist.org/',
    'https://hattiesburg.craigslist.org/',
    'https://jackson.craigslist.org/',
    'https://meridian.craigslist.org/',
    'https://northmiss.craigslist.org/',
    'https://natchez.craigslist.org/'
    ),
  array(
    'Missouri',
    'https://columbiamo.craigslist.org/',
    'https://joplin.craigslist.org/',
    'https://kansascity.craigslist.org/',
    'https://kirksville.craigslist.org/',
    'https://loz.craigslist.org/',
    'https://semo.craigslist.org/',
    'https://springfield.craigslist.org/',
    'https://stjoseph.craigslist.org/',
    'https://stlouis.craigslist.org/'
    ),
  array(
    'Montana',
    'https://billings.craigslist.org/',
    'https://bozeman.craigslist.org/',
    'https://butte.craigslist.org/',
    'https://greatfalls.craigslist.org/',
    'https://helena.craigslist.org/',
    'https://kalispell.craigslist.org/',
    'https://missoula.craigslist.org/',
    'https://montana.craigslist.org/'
    ),  
  array(
    'Nebraska',
    'https://grandisland.craigslist.org/',
    'https://lincoln.craigslist.org/',
    'https://northplatte.craigslist.org/',
    'https://omaha.craigslist.org/',
    'https://scottsbluff.craigslist.org/'
    ),
  array(
    'Nevada',
    'https://elko.craigslist.org/',
    'https://lasvegas.craigslist.org/',
    'https://reno.craigslist.org/'
    ),
  array(
    'New Hampshire',
    'https://nh.craigslist.org/'
    ),
  array(
    'New Jersey',
    'https://cnj.craigslist.org/',
    'https://jerseyshore.craigslist.org/',
    'https://newjersey.craigslist.org/',
    'https://southjersey.craigslist.org/'
    ),  
  array(
    'New Mexico',
    'https://albuquerque.craigslist.org/',
    'https://clovis.craigslist.org/',
    'https://farmington.craigslist.org/',
    'https://lascruces.craigslist.org/',
    'https://roswell.craigslist.org/',
    'https://santafe.craigslist.org/'
    ),
  array(
    'New York',
    'https://albany.craigslist.org/',
    'https://binghamton.craigslist.org/',
    'https://buffalo.craigslist.org/',
    'https://catskills.craigslist.org/',
    'https://chautauqua.craigslist.org/',
    'https://elmira.craigslist.org/',
    'https://fingerlakes.craigslist.org/',
    'https://glensfalls.craigslist.org/',
    'https://hudsonvalley.craigslist.org/',
    'https://ithaca.craigslist.org/',
    'https://longisland.craigslist.org/',
    'https://newyork.craigslist.org/',
    'https://oneonta.craigslist.org/',
    'https://plattsburgh.craigslist.org/',
    'https://potsdam.craigslist.org/',
    'https://rochester.craigslist.org/',
    'https://syracuse.craigslist.org/',
    'https://twintiers.craigslist.org/',
    'https://utica.craigslist.org/',
    'https://watertown.craigslist.org/'
    ),
  array(
    'North Carolina',
    'https://asheville.craigslist.org/',
    'https://boone.craigslist.org/',
    'https://charlotte.craigslist.org/',
    'https://eastnc.craigslist.org/',
    'https://fayetteville.craigslist.org/',
    'https://greensboro.craigslist.org/',
    'https://hickory.craigslist.org/',
    'https://onslow.craigslist.org/',
    'https://outerbanks.craigslist.org/',
    'https://raleigh.craigslist.org/',
    'https://wilmington.craigslist.org/',
    'https://winstonsalem.craigslist.org/'
    ),
  array(
    'North Dakota',
    'https://bismarck.craigslist.org/',
    'https://fargo.craigslist.org/',
    'https://grandforks.craigslist.org/',
    'https://nd.craigslist.org/'
    ),
  array(
    'Ohio',
    'https://akroncanton.craigslist.org/',
    'https://ashtabula.craigslist.org/',
    'https://athensohio.craigslist.org/',
    'https://chillicothe.craigslist.org/',
    'https://cincinnati.craigslist.org/',
    'https://cleveland.craigslist.org/',
    'https://columbus.craigslist.org/',
    'https://dayton.craigslist.org/',
    'https://limaohio.craigslist.org/',
    'https://mansfield.craigslist.org/',
    'https://sandusky.craigslist.org/',
    'https://toledo.craigslist.org/',
    'https://tuscarawas.craigslist.org/',
    'https://youngstown.craigslist.org/',
    'https://zanesville.craigslist.org/'
    ),  
  array(
    'Oklahoma',
    'https://lawton.craigslist.org/',
    'https://enid.craigslist.org/',
    'https://oklahomacity.craigslist.org/',
    'https://stillwater.craigslist.org/',
    'https://tulsa.craigslist.org/'
    ),
  array(
    'Oregon',
    'https://bend.craigslist.org/',
    'https://corvallis.craigslist.org/',
    'https://eastoregon.craigslist.org/',
    'https://eugene.craigslist.org/',
    'https://klamath.craigslist.org/',
    'https://medford.craigslist.org/',
    'https://oregoncoast.craigslist.org/',
    'https://portland.craigslist.org/',
    'https://roseburg.craigslist.org/',
    'https://salem.craigslist.org/'
    ),
  array(
    'Pennsylvania',
    'https://altoona.craigslist.org/',
    'https://chambersburg.craigslist.org/',
    'https://erie.craigslist.org/',
    'https://harrisburg.craigslist.org/',
    'https://lancaster.craigslist.org/',
    'https://allentown.craigslist.org/',
    'https://meadville.craigslist.org/',
    'https://philadelphia.craigslist.org/',
    'https://pittsburgh.craigslist.org/',
    'https://poconos.craigslist.org/',
    'https://reading.craigslist.org/',
    'https://scranton.craigslist.org/',
    'https://pennstate.craigslist.org/',
    'https://williamsport.craigslist.org/',
    'https://york.craigslist.org/'
    ),
  array(
    'Rhode Island',
    'https://providence.craigslist.org/'
    ),  
  array(
    'South Carolina',
    'https://charleston.craigslist.org/',
    'https://columbia.craigslist.org/',
    'https://florencesc.craigslist.org/',
    'https://greenville.craigslist.org/',
    'https://hiltonhead.craigslist.org/',
    'https://myrtlebeach.craigslist.org/'
    ),  
  array(
    'South Dakota',
    'https://nesd.craigslist.org/',
    'https://csd.craigslist.org/',
    'https://rapidcity.craigslist.org/',
    'https://siouxfalls.craigslist.org/',
    'https://sd.craigslist.org/'
    ),
  array(
    'Tennessee',
    'https://chattanooga.craigslist.org/',
    'https://clarksville.craigslist.org/',
    'https://cookeville.craigslist.org/',
    'https://jacksontn.craigslist.org/',
    'https://knoxville.craigslist.org/',
    'https://memphis.craigslist.org/',
    'https://nashville.craigslist.org/',
    'https://tricities.craigslist.org/'
    ),
  array(
    'Texas',
    'https://abilene.craigslist.org/',
    'https://amarillo.craigslist.org/',
    'https://austin.craigslist.org/',
    'https://beaumont.craigslist.org/',
    'https://brownsville.craigslist.org/',
    'https://collegestation.craigslist.org/',
    'https://corpuschristi.craigslist.org/',
    'https://dallas.craigslist.org/',
    'https://nacogdoches.craigslist.org/',
    'https://delrio.craigslist.org/',
    'https://elpaso.craigslist.org/',
    'https://galveston.craigslist.org/',
    'https://houston.craigslist.org/',
    'https://killeen.craigslist.org/',
    'https://laredo.craigslist.org/',
    'https://lubbock.craigslist.org/',
    'https://mcallen.craigslist.org/',
    'https://odessa.craigslist.org/',
    'https://sanangelo.craigslist.org/',
    'https://sanantonio.craigslist.org/',
    'https://sanmarcos.craigslist.org/',
    'https://bigbend.craigslist.org/',
    'https://texoma.craigslist.org/',
    'https://easttexas.craigslist.org/',
    'https://victoriatx.craigslist.org/',
    'https://waco.craigslist.org/',
    'https://wichitafalls.craigslist.org/'
    ),
  array(
    'Utah',
    'https://logan.craigslist.org/',
    'https://ogden.craigslist.org/',
    'https://provo.craigslist.org/',
    'https://saltlakecity.craigslist.org/',
    'https://stgeorge.craigslist.org/'
    ),
  array(
    'Vermont',
    'https://vermont.craigslist.org/'
    ),
  array(
    'Virginia',
    'https://charlottesville.craigslist.org/',
    'https://danville.craigslist.org/',
    'https://fredericksburg.craigslist.org/',
    'https://norfolk.craigslist.org/',
    'https://harrisonburg.craigslist.org/',
    'https://lynchburg.craigslist.org/',
    'https://blacksburg.craigslist.org/',
    'https://richmond.craigslist.org/',
    'https://roanoke.craigslist.org/',
    'https://swva.craigslist.org/',
    'https://winchester.craigslist.org/'
    ),
  array(
    'Washington',
    'https://bellingham.craigslist.org/',
    'https://kpr.craigslist.org/',
    'https://moseslake.craigslist.org/',
    'https://olympic.craigslist.org/',
    'https://pullman.craigslist.org/',
    'https://seattle.craigslist.org/',
    'https://skagit.craigslist.org/',
    'https://spokane.craigslist.org/',
    'https://wenatchee.craigslist.org/',
    'https://yakima.craigslist.org/'
    ),
  array(
    'West Virginia',
    'https://charlestonwv.craigslist.org/',
    'https://martinsburg.craigslist.org/',
    'https://huntington.craigslist.org/',
    'https://morgantown.craigslist.org/',
    'https://wheeling.craigslist.org/',
    'https://parkersburg.craigslist.org/',
    'https://swv.craigslist.org/',
    'https://wv.craigslist.org/'
    ), 
  array(
    'Wisconsin',
    'https://appleton.craigslist.org/',
    'https://eauclaire.craigslist.org/',
    'https://greenbay.craigslist.org/',
    'https://janesville.craigslist.org/',
    'https://racine.craigslist.org/',
    'https://lacrosse.craigslist.org/',
    'https://madison.craigslist.org/',
    'https://milwaukee.craigslist.org/',
    'https://northernwi.craigslist.org/',
    'https://sheboygan.craigslist.org/',
    'https://wausau.craigslist.org/'
    ),
  array(
    'Wyoming',
    'https://wyoming.craigslist.org/'
    ),
  array(
    'Territories',
    'https://micronesia.craigslist.org/',
    'https://puertorico.craigslist.org/',
    'https://virgin.craigslist.org/'
    ),
  );


