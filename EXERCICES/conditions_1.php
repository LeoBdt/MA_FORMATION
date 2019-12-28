<?php

$profils = [
    [
        'id' => 19763,
        'nom' => 'Bidot',
        'prenom' => 'Léo',
        'age' => 17,
        'taille' => 1.78,
        'ville' => 'Béziers'
    ],
    [
        'id' => 53864,
        'nom' => 'Affre',
        'prenom' => 'Jean',
        'age' => 25,
        'taille' => 2.47,
        'ville' =>  'Paris'
    ],
    [
        'id' => 40925,
        'nom' => 'Batanemo',
        'prenom' => 'Emilien',
        'age' => 12,
        'taille' => 1.54,
        'ville' => 'Montpellier'
    ],
];

echo "Bienvenue dans votre espace, merci d'attendre...\n";

sleep(1.5);

$demande = (int)readline("Veuillez entrer votre id de connexion: ");

echo "Chargement en cours... \n";

sleep(1.5);

switch ($demande) {
    case 19763:
        print_r ($profils[0]);
    break;
    case 53864:
        print_r ($profils[1]);
    break;
    case 40925:
        print_r ($profils[2]);
    break;
    default:
        echo "\e[31mERREUR : ID INVALIDE ! \e[39m";
    break;
}

# Bon ok, je compte améliorer cet exercice, mais pour l'instant je ne sais faire que ça lol. 