<?php

# Un tableau est beaucoup plus pratique, il permet de sauvegarder une liste de valeurs.

# Ceci est le premier format d'un tableau, considéré comme une simple liste de valeurs.

$notes = [10, 20, 15, 9, 14];

echo $notes[1]; # J'affiche la valeur qui correspond à 20, donc la deuxieme "case".

# Ceci est un tableu avec plusieurs listes.

$eleves = [
    'nom' => 'Bidot',
    'prenom' => 'Léo',
    'notes' => [10, 18, 14]
];

echo $eleves['prenom'] . ' ' . $eleves['nom']; # J'affiche le nom et prénom

# Si je veux changer une valeur alors je fais :

$eleves['prenom'] = 'Albert'; # Je viens de remplacer "Léo" par "Albert".

# Si je veux rajouter une note, alors je fais :

$eleves['notes'][3] = 16; # J'ai rajouté 16 à l'index 3.

# Si je veux afficher la liste des notes, je ne peux pas passer par echo.

print_r($eleves['notes']);

# Ceci est un tableau masterclass, il comporte plusieurs listes avec plusieurs valeurs :o 

$classe = [
    [
        'nom' => 'Wheatley',
        'prenom' => 'Ella',
        'notes' => [19, 15, 16, 18, 12]
    ],
    [
        'nom' => 'Bidot',
        'prenom' => 'Léo',
        'notes' = [12, 10, 14, 9, 4]
    ],
];

# Si je veux la deuxieme note du deuxieme élève alors : 

echo $classe[1]['notes'][1];
