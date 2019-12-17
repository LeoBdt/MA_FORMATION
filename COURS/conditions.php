<?php

# Les conditions permettent de vérifier si une variable $ possède une valeur X.

# Ici, je vais vérifier si l'élève a au dessous ou en dessous de la moyenne.

$note = 9;

if ($note >= 10) {
    echo 'Bravo vous avez la moyenne.';
} else {
    echo 'Dommage, vous avez en dessous de la moyenne.';
}

# Bon, là, je vais demander à l'humain d'entrer une note, puis après, je fais pareil qu'en haut.

$notes = readline('Entrez votre note :');

if (ctype_digit($notes)) { # Je vérifie si la note est un chiffre.
if ($notes >= 10) {
    echo 'Bravo vous avez la moyenne.';
} else {
    echo 'Dommage, vous avez en dessous de la moyenne.';
}
} else {
    echo 'Merci d\'entrer une note valide.';
}

# STOP A 6:30
