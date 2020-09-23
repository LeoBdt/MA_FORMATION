<?php

# Présentation du script ainsi que choix de l'action souhaitée.

echo "Bienvenue sur le programme de gestion d'une boutique. \n";

$choix_principal = (int)readline("
Que voulez-vous faire ? \n
- Enregister un nouveau client (1)
- Consulter la fiche d'un client (2)
- Afficher la liste des clients (3) 
- Enregister un produit (4) 
- Consulter une fiche produit (5)
- Afficher la liste des produits (6)
");

switch ($choix_principal) {
    case '1':
        echo "test";
        break;
    
    default:
        # code...
        break;
}