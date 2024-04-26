<?php
    header("Access-Control-Allow-Origin: *");
    $context  = stream_context_create(array('http' => array('header' => 'Accept: application/json')));
    $url = "https://data.tycg.gov.tw/opendata/datalist/datasetMeta/download?id=bed8a800-be39-4750-89a6-324b71f5d5fa&rid=bd906b29-9006-40ed-8bd7-67597c2577fc";
    $data = file_get_contents($url, false, $context);
    print $data;
?>
