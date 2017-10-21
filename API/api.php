
<?php
    $request = 'http://api.openweathermap.org/data/2.5/forecast?id=4140963&APPID=6dda62a111242c0a8a93428164914861';
    $response  = file_get_contents($request);
    $jsonobj  = json_decode($response);
    print_r($jsonobj);
?>

<?php
    $request = 'http://api.openweathermap.org/data/2.5/weather?zip=22180,us&appid=6dda62a111242c0a8a93428164914861';
    $response  = file_get_contents($request);
    $jsonobj  = json_decode($response);
    print_r($jsonobj);
?>