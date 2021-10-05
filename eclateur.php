<?php
if (empty($argv[1])) {
    echo "Pour continuer vous devez renseigner un mot";
    exit;
}
function coupermot($splitmot)
{
    return str_split($splitmot);
}

$tbl = coupermot($argv[1]);
$motEclate = array();

foreach (array_count_values($tbl) as $key => $splitmot) {
    $motseparer[$key] = $splitmot;
}

ksort($motseparer);

foreach ($motEclate as $key => $splitmot) {
    echo $key . ' => ' . $splitmot . PHP_EOL;
}