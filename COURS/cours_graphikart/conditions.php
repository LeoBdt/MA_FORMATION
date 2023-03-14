<?php

# Les conditions permettent de vérifier si une variable $ possède une valeur X.

# Ici, je vais vérifier si l'élève a au dessous ou en dessous de la moyenne.

 $note = 9;

if ($note >= 10) {
    echo "Bravo vous avez la moyenne.";
} else {
    echo "Dommage, vous avez en dessous de la moyenne.";
}

# Bon, là, je vais demander à l'humain d'entrer une note, puis après, je fais pareil qu'en haut.

$note1 = readline("Entrez votre note :");

if (ctype_digit($note1)) { # Je vérifie si la note est un chiffre.
if ($note1 >= 10) {
    echo "Bravo vous avez la moyenne.";
} else {
    echo "Dommage, vous avez en dessous de la moyenne.";
}
} else {
    echo "Merci d'entrer une note valide.";
}

# Ok, maintenant je vais aussi check si l'humain n'a QUE la moyenne (en plus du reste).

$note2 = (int)readline("Merci d'entrer une note :"); # JE CONVERTI LA VALEUR EN ENTIER.

if (ctype_digit($note1)) {
if ($note2 > 10) {
    echo "Bravo, vous avez au dessus de la moyenne.";
} elseif ($note2 === 10) {
    echo "Vous avez juste la moyenne.";
} else {
    echo "Dommage, vous n'avez même pas la moyenne";
}} else {
    echo "Merci d\'entrer une note valide.";
}

# Maintenant, je vais voir les conditions dans un autre cas, avec switch case.

$action = (int)readline("Entrez votre action : (1: attaquer, 2 défendre, 3: passer mon tour)");

switch ($action) {
    case 1: 
        echo "J'attaque !";
        break;
    case 2:
        echo "Ok, je vais défendre.";
        break;
    case 3:
        echo "Flemme, je passe mon tour.";
        break;
    default:
        echo "Je crois que... tu t'es trompé Garry.";
        break; 
}   

# Voyons les opérateurs logiques.

# Nous utilisons le cas des horaires d'ouvertures.

$heure = (int)readline("Entrez une heure : ");

if ((9 <= $heure and $heure <= 12) or (14 <= $heure and $heure <= 17)) {
    echo "Le magasin sera ouvert !";
} else {
    echo "Le magasin sera fermé.";
}

?>