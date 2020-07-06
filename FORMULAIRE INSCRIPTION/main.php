<?php

# Ceci est la partie accueil, elle présente le programme à l'utilisateur.
echo "
███████╗░█████╗░██████╗░███╗░░░███╗██╗░░░██╗██╗░░░░░███████╗░█████╗░  ██╗░░░██╗░░███╗░░
██╔════╝██╔══██╗██╔══██╗████╗░████║██║░░░██║██║░░░░░██╔════╝██╔══██╗  ██║░░░██║░████║░░
█████╗░░██║░░██║██████╔╝██╔████╔██║██║░░░██║██║░░░░░█████╗░░██║░░██║  ╚██╗░██╔╝██╔██║░░
██╔══╝░░██║░░██║██╔══██╗██║╚██╔╝██║██║░░░██║██║░░░░░██╔══╝░░██║░░██║  ░╚████╔╝░╚═╝██║░░
██║░░░░░╚█████╔╝██║░░██║██║░╚═╝░██║╚██████╔╝███████╗███████╗╚█████╔╝  ░░╚██╔╝░░███████╗
╚═╝░░░░░░╚════╝░╚═╝░░╚═╝╚═╝░░░░░╚═╝░╚═════╝░╚══════╝╚══════╝░╚════╝░  ░░░╚═╝░░░╚══════╝ 
\n\n\nBienvenue dans le formulaire d'inscription formuleo !\n";

sleep(1);
echo "Nous allons vous demander d'entrer vos informations personnelles.\n";
sleep(1);

# Partie du renseignement des informations personnelles.

$nom = readline("Merci de renseigner votre nom : ");
$prenom = readline("Merci de renseigner votre prénom : ");
$age = readline("Merci de renseigner votre âge : ");
$commune_de_naissance = readline("Merci de renseigner votre commune de naissance : ");
$lieu_de_residence = readline("Merci de renseigner votre lieu de residence : ");

# Partie de création du tableau qui rassemble les données utilisateur.

$renseignements = json_encode([$nom, $prenom, $age, $commune_de_naissance, $lieu_de_residence]);

# Partie creation du fichier de l'utilisateur.

$id = rand(0, 10000);
$nom_fichier = './utilisateurs/'.$id.".json";
$contenu_fichier = "$renseignements";

file_put_contents($nom_fichier, $contenu_fichier);

# J'informe l'utilisateur de la création de son fichier.

echo "Utilisateur enregistré sous l'ID : ($id)";