<?php

# Pour savoir comment utiliser une fonction la solution la plus simple est d'aller voir la documentation : https://www.php.net/manual/fr/funcref.php

# Ici, je vais vérifier si un mot donné par l'utilisateur est un palindrome.

$mot_origine = strtolower(readline("Merci d'entrer un mot qui est susceptible d'être un palindrome.\n")); # La fonction strlolower me sert a enlever les majuscules.
$mot_inverse = strrev($mot_origine); # J'inverse ma chaîne de caractères.
$taille_min = strlen($mot_origine); # Je compte le nombre de caractères dans le mot entré.


if ($taille_min <= 1) {
    echo "Votre mot est trop court.";
} else { 
    if ($mot_origine === $mot_inverse) {
        echo "Votre mot est un palindrome";
    } else {
        echo "Votre mot n'est pas un palindrome.";
    }
}

# Maintenant, je vais utiliser des fonction pour faire la moyenne d'un élève.

$notes = [10, 20, 13];

$res_addition = array_sum($notes); # Je fais la somme de mes valeurs dans le tableau.
$nb_notes = count($notes); # Je regarde mon nombre de notes présentes dans le tableau.

echo "Votre moyenne est de " . round($res_addition / $nb_notes, 2) . " !"; # J'utilise la fonction round pour arrondir ma moyenne et je paramètre 2 pour préciser combien de chiffres après la virgule.

# Hop, maintenant je fais un filtre anti gros-mots ! 

$insultes = ["merde", "con", "fdp"];

$phrase_test = readline("Merci d'entrer une phrase contenant un gros mot : \n");

foreach($insultes as $insulte) {
    $nb_etoile = str_repeat("*", strlen($insulte));
    $phrase_test = str_replace($insulte, $nb_etoile, $phrase_test);
}

echo $phrase_test;


# Ce cours est terminé, le filtre est pas parfait mais il suffit.