<?php

$test = $argv;

$datas = array();

foreach($test as $info) {
    
    if ($info != "ranger.php") {
        array_push($datas, $info);
    }      
}

echo json_encode($datas);