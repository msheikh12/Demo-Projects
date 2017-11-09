<?php

// https://api.whitehouse.gov/v1/petitions/2436006.json

    $request = 'https://api.whitehouse.gov/v1/petitions/2436006.json';
    $response  = file_get_contents($request);
    $jsonobj  = json_decode($response);
    
    print '<strong> Title:</strong> ' . $jsonobj -> results[0] -> title . '<br/>';
    print '<strong> Body:</strong> ' . $jsonobj -> results[0] -> body;

    //echo '<pre>';
    //print_r();
    //echo '</pre>';