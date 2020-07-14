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
$age = (int)readline("Merci de renseigner votre âge : ");
$lieu_de_naissance = readline("Merci de renseigner votre lieu de naissance : ");
$lieu_de_residence = readline("Merci de renseigner votre lieu de residence : ");

# Partie de création du tableau qui rassemble les données utilisateur.

$renseignements = json_encode([ "date de création "=> date("j-n-y"), "nom" => $nom, "prenom" => $prenom, "age" => $age, "lieu de naissance" => $lieu_de_naissance, "lieu de residence" => $lieu_de_residence], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);

# Partie creation du fichier de l'utilisateur.

$dossier = "./utilisateurs/";
$nb_utilisateurs = 0;
$fichier = glob($dossier . "*");
$nb_utilisateurs = count($fichier) + 1;

file_put_contents("./utilisateurs/".$nb_utilisateurs.".json", $renseignements);

# J'informe l'utilisateur de la création de son fichier.

echo "Utilisateur enregistré sous l'ID : ($nb_utilisateurs)";