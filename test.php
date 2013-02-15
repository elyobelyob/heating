<?php

function callcurl($location) {

    $ch = curl_init();
    // set URL and other appropriate options
    curl_setopt($ch, CURLOPT_URL, $location);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_FRESH_CONNECT, true);
    curl_setopt($ch, CURLOPT_TIMEOUT_MS, 1);
    // grab URL and pass it to the browser
    curl_exec($ch);
    // close cURL resource, and free up system resources
    curl_close($ch);
}

callcurl('http://192.168.1.90/heating/heatingon.php');
sleep(1);
callcurl('http://192.168.1.90/heating/heatingoff.php');
sleep(1);
callcurl('http://192.168.1.90/heating/heatingon.php');
sleep(1);
callcurl('http://192.168.1.90/heating/heatingoff.php');
sleep(1);
callcurl('http://192.168.1.90/heating/heatingon.php');
sleep(1);
callcurl('http://192.168.1.90/heating/control2drayton.php');

