<?php

# IL Y A TROIS TYPE DE BOUCLE : FOR, WHILE ET FOREACH.

# Nous allons en premier voir while.

$chiffre = null;

while ($chiffre !== 10) {
    $chiffre = (int)readline("Entrez un chiffre :");
}

echo "Bravo, vous avez gagné.";


# Ok, maintenant passons au for.

for ($i = 0; $i <= 10; $i++) {
    echo "- $i \n";
}

# Ok, maintenant, passons à l'élite de la boucle, le foreach.

$notes = [10, 14, 17];

foreach ($notes as $note) {
    echo "- $note \n";
}

# STOP A 6:52