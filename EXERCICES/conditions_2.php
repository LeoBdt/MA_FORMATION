<?php


$temp = (int)readline("Entrez votre temperature : ");

if ($temp > 38) {
    echo "Tu as de la fièvre.";
} else {
    echo "Tu n'as pas de fièvre.";
}
