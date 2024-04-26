<?php
    header("Access-Control-Allow-Origin: *");
    $context  = stream_context_create(array('http' => array('header' => 'Accept: application/json')));
    $url = "https://data.moenv.gov.tw/api/v2/aqx_p_432?api_key=e8dd42e6-9b8b-43f8-991e-b3dee723a52d&limit=1000&sort=ImportDate%20desc&format=JSON";
    //$url = 'https://opendata.epa.gov.tw/api/v1/AQXSite?format=json';
    $data = file_get_contents($url, false, $context);
    print $data;
?>