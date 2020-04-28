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

# On veut demander à l'utilisateur de rentrer les horaires d'ouverture d'un magasin, on lui demande ensuite de rentrer une heure et on lui dit si le magasin sera ouvert.

$creneaux = [];

while (true) {
    $debut = (int)readline("Heure d'ouverture : ");
    $fin = (int)readline("Heure de fermeture : ");
    if ($debut >= $fin) { // Supérieur ou égal // 
        echo "Le créneaux ne peut pas être enregistré car l'heure d'ouverture ($debut) est supérieur à l'heure de fermeture ($fin) \n";  
    } else {
        $creneaux[] = [$debut, $fin];
        $action = readline("Entrer un nouveau créneau ? (non = n) ");    
        if ($action === 'n') {
        break;
        }
    }
}

$choix = (int)readline("Que voulez-vous faire ? \n\n - Savoir si le magasin sera ouvert selon une heure donnée : tapez \"1\" \n - Avoir la liste des horaires d'ouverture du magasin : tapez \"2\" ");


switch ($choix) {
    case '1': # MODULE 1 : "Vérification ouverture du magasin"
        $heure = (int)readline("A quelle heure voulez vous venir au magasin ? ");
        $creneauTrouve = false;
                
        foreach ($creneaux as $creneau) {
            if ($heure >= $creneau[0] && $heure <= $creneau[1]) {
                $creneauTrouve = true;
            break;
            }
        }
        
        if ($creneauTrouve) {
            echo "\e[92mLe magasin sera ouvert.\e[39m";
        } else {
            echo "\e[31mDésolé, le magasin sera fermé.\e[39m";
        }
    break;
    case '2': # MODULE 2 : "Donner la liste des horaires du magasin"
        echo "Le magasin est ouvert de";
        foreach ($creneaux as $k => $creneau) {
            if ($k > 0) {
                echo " et de";
    }
    echo " $creneau[0]h à $creneau[1]h";
}
    break;
    default:
        echo "\e[31mMerci de faire un choix !\e[39m";
    break; 
}

?>
