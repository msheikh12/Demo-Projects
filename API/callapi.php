<?php

//https://api.whitehouse.gov/v1/petitions/2440436.json


$json = "https://api.whitehouse.gov/v1/petitions/2440436.json";
$jsonfile = file_get_contents($json);

$json_object = json_decode($jsonfile);

print '<strong> Title: </strong> ' . $json_object -> results[0] -> title . '<br/> <br/>';
print '<strong> Body: </strong> ' . $json_object -> results[0] -> body;


//echo '<pre>';
//var_dump($json_object -> results[0] -> body);
//echo '</pre>';


/*
//FOR MULTIPLE PETITON
$json = "https://api.whitehouse.gov/v1/petitions/2440436.json";
$jsonfile = file_get_contents($json);
$json_object = json_decode($jsonfile);
foreach ($json_object -> results as $results) {
	print 'Title: ' . $results[0] -> title . '<br/> <br/>';
	print 'Body: ' . $results[0] -> body;
}

*/

