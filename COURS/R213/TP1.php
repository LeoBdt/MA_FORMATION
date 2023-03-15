<?php

# Exercice I
$b = 46;
$a = "une variable en PHP";

if (isset ($c)) {
    echo "La variable existe";
} else {
    $c = 42;
}

#Exercice 2

echo "j'affiche la variable \$b $b et la variable \$c $c";

$machaine2="\" test \" 'test'";

echo $machaine2;

#Exercice 3

$montab = [1,2,3,4,5]; 
$montab[2] = 8;
print_r($montab);

#Exercice 4

$exo4 = [2,5,4,7,9,16];

for($i=0;$i<count($exo4);$i++)
{
    if ($exo4[$i] % 2 == 0) {
        print($exo4[$i]." est pair, ");
      }
}

#Exercice 5

$tablol = [-25, 34, 58, 97, 12, -95, 13, 8];

for($i=0;$i<count($tablol);$i++)
{
        if ($tablol[$i] > 20) {
           $tablol[$i] = 20;
        } elseif ($tablol[$i]< 0) {
            $tablol[$i] = 0;
        }
}
print_r($tablol);


#Exercice 6


function AfficheLesPairs(array $tab) {
    for($i=0;$i<count($tab);$i++)
    {
        if ($tab[$i] % 2 == 0) {
            print($tab[$i]." est pair ");
          }
    } 
}

$tab1 = [2,5,4,7,9,16];
$tab2 = [2,1,11,7,4,13];

AfficheLesPairs($tab1);

#Exercice 9



