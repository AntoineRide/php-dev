<?php
$min = 0;
$max = 50;

// Fonctione récupère nombre aléatoire

$aleatoire = rand($min, $max);
    // echo $aleatoire . PHP_EOL;

// Choisi le nombre de vie
$vies = 5;

$vieperdu = $vies - 1;

for ($i = 0; $i < $vies; $i++) {
    
// Choisi ton chiffre 

$chiffrechoisi = readline("Choisi ton nombre : ");

// Si le nombre est supérieur

    if ($chiffrechoisi < $aleatoire) {
        echo ("C'est plus ! Tu viens de perdre une vie. Il t'en reste $vieperdu.") . PHP_EOL . PHP_EOL;
    }

// Si le nombre est inférieur

    elseif ($chiffrechoisi > $aleatoire) {
        echo ("C'est moins ! Tu viens de perdre une vie. Il t'en reste $vieperdu.") . PHP_EOL . PHP_EOL;
    }

// Si l'utilisateur a trouvé le nombre

    else  {
        echo ("Bravo ! Tu as trouvé le nombre");
        exit;
    }

}