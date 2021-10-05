<?php
$min = 0;
$max = 50;

// Fonctione récupère nombre aléatoire

$aleatoire = rand($min, $max);
    // echo $aleatoire . PHP_EOL;

// Boucle de nombre de vie

for ($i = 1; $i < 5; $i++) {
    
// Choisi ton chiffre 

$chiffrechoisi = readline("Mon nombre est : ");

// Si le nombre est supérieur

    if ($chiffrechoisi < $aleatoire) {
        echo ("C'est plus") . PHP_EOL . PHP_EOL;
    }

// Si le nombre est inférieur

    elseif ($chiffrechoisi > $aleatoire) {
        echo ("C'est moins") . PHP_EOL . PHP_EOL;
    }

// Si l'utilisateur a trouvé le nombre

    else  {
        echo ("Bravo ! Tu as trouvé le nombre");
        exit;
    }

}