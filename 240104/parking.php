<?php
    header("Access-Control-Allow-Origin: *");
    $district = $_POST["district"];
    $district = strtolower($district);
    $context  = stream_context_create(array('http' => array('header' => 'Accept: application/json')));
    $url = "https://data.tycg.gov.tw/opendata/datalist/datasetMeta/download?id=f4cc0b12-86ac-40f9-8745-885bddc18f79&rid=0daad6e6-0632-44f5-bd25-5e1de1e9146f";
    $data = file_get_contents($url, false, $context);
    $data = json_decode($data);
    print ("<p>District: $district");
    print ("<table><tr><td>行政區</td><td>停車場名稱</td><td>地址</td></tr>");
    foreach ($data->parkingLots as $key)
    {
        $i_district = $key->{"areaName"};
        if(strcmp($district, $i_district)== 0){

            $parkName = $key->{"parkName"};
            $address = $key->{"address"};
            print ("<tr><td>$district</td><td>$parkName</td><td>$address</td></tr>");
        }
    }
    print ("</table>");
?>
