<?php

# IL Y A TROIS TYPE DE BOUCLE : FOR, WHILE ET FOREACH.

# Nous allons en premier voir while.

$chiffre = null;

while ($chiffre !== 10) {
    $chiffre = (int)readline("Entrez un chiffre :");
}

echo "Bravo, vous avez gagné.";

# Ok, passons au for.

for ($i = 0; $i <= 10; $i++) {
    echo "- $i \n";
}

# Ok, maintenant, passons à l'élite de la boucle, le foreach.

$notes = [10, 14, 17];

foreach ($notes as $note) {
    echo "- $note \n";
}

#  Un autre exemple :

$eleves = [
    'cm2' => 'Jean',
    'cm1' => 'Albert'
];

foreach ($eleves as $classe => $eleve) {
    echo "$eleve est dans la classe $classe \n";
}

# Je vais maintenant faire pareil qu'en haut mais avec plus d'élèves.

$eleves = [
    'cm2' => ['Jean', 'Marina', 'Albert'],
    'cm1' => ['Gabriel', 'Milane', 'Constance']
];

foreach ($eleves as $classe => $listEleves) {
    echo "La classe $classe:\n";
    foreach ($listEleves as $eleve) {
        echo "- $eleve \n";
    }
}

# Exemple suivant, nous allons demander a un élève de rentrer une note, note qui sera sauvegardée dans un tableau $notes1 et à la fin on affiche la liste.

$notes1 = [];
$action = null;

while ($action !== 'fin') {
    $action = readline("Entrez une nouvelle note ou \"fin\" pour terminer la saisie :");
    if ($action !== 'fin') {
        $notes1[] = (int)$action;
    }
}

foreach ($notes1 as $note2); {
    echo "- $note2 \n";
}

# STOP A 17