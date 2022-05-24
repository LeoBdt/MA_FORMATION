<?php

echo("Bienvenue dans guess the number ! \nLa règle est simple, trouver le chiffre.");

$chiffre = rand(0, 100); 

$reponse = (int)readline("Entrez un chiffre.");

if ($reponse = $chiffre) {
    echo "Bravo !";
} else {
    
}

