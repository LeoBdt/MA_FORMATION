<?php

# Présentation du script ainsi que choix de l'action souhaitée.

echo "Bienvenue sur le programme de gestion d'une boutique. \n";

$choix_menu = (int)readline("
Vous souhaitez accéder au menu :\n
- Clients (1)
- Produits (2) 
- Ventes (3)");

switch ($choix_menu) {
    case '1':
        $choix_client = (int)readline('
        Quelle action voulez-vous faire ? 
        - Enregister un nouveau client (1)
        - Consulter un fichier client via son ID (2)
        - Afficher la liste complète des clients (3)');
        
        switch ($choix_client) {
            case '1':
                echo "Merci d'entrer les informations du nouveau client. \n";
                $nom = readline("Nom : ");
                $prenom = readline("Prénom : ");
                $age = (int)readline("Age : ");
                $mail = readline("Mail :");
                $telephone = readline("Téléphone :");
                $adresse = readline("Adresse :");
                $ville = readline("Ville :");
                $code_postal = readline("Code postal :");
                $client_id = hexdec(uniqid());
        
                $fiche_client = json_encode(
                [
                    "nom" => $nom,
                    "prenom" => $prenom,
                    "age" => $age,
                    "mail" => $mail,
                    "telephone" => $telephone,
                    "adresse" => $adresse,
                    "ville" => $ville,
                    "code_postal" => $code_postal,
                    "transactions" => []
                ],
                    JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
                );
        
                file_put_contents("./clients/".$client_id.".json", $fiche_client);
                echo "Le client est bien enregistré, son identifiant est $client_id.";
                break;
            case '2':
                $extraction =  json_decode(file_get_contents("./clients/".$id.".json"), true);
                foreach($extraction as $key => $value){
                    if($key == "Transactions"){
                        echo "- $key : " . join(", ", $value);
                    } else {
                        echo "- $key : $value \n ";
                    };
                }
            break;
            case '3':
                $liste_clients = scandir("./clients/");
                unset($liste_clients[0], $liste_clients[1]);
                foreach ($liste_clients as $liste_client) {
                    json_decode(file_get_contents("./clients/*.json"));
                    echo "- $liste_client";
                }
            default:
                echo "sortie 1...";
                break;
        case '2': 
            $choix_produit = (int)readline('
            Quelle action voulez-vous faire ? 
            - Enregister un nouveau produit (1)
            - Consulter la fiche d\' produit (2)
            - Afficher la liste complète des produits (3)');
            switch ($choix_produit) {
                case '1':
                    echo "Merci d'entrer les informations sur le produit.";
                    $nom_produit = readline("Nom du produit : ");
                    $description_produit = readline("Description du produit : ");
                    break;
                
                default:
                    # code...
                    break;
            }

        }
}