<?php
$recupphrase = "";

    $recupphrase = readline("Entrez votre phrase :");

    function returnMot($separemot)
    {
        return strrev($separemot);
    }


function phrasetab($phrase)
{
    return explode(" ", $phrase);
}

$listemots = $recupphrase;
$listemots = phrasetab($listemots);
$retournelistemots = array();

foreach ($listemots as $separemot) {
    array_push($retournelistemots, returnMot($separemot));
}

echo implode(" ", $retournelistemots);