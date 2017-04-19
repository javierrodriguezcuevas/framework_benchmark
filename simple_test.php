<?php

$array = [
    'Symfony' =>  'http://127.0.0.1:8000/',
];

foreach ($array as $name => $url) {
        
    $start = microtime(true);
    echo sprintf('Calculating %s', $name);
    
    for ($i = 0; $i < 1; $i++) {
        $handler = curl_init($url);
        $response = curl_exec($handler);
        curl_close($handler);
    }

    $timeElapsed = microtime(true) - $start;
    echo sprintf(
        'Results %s = %g miliseconds %s',
        $name,
        $timeElapsed, 
        PHP_EOL
    );
}


