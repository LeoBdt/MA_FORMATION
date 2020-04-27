<?php

$eleves = [
    'cm2' => ['Jean', 'Marina', 'Albert'],
    'cm1' => ['Gabriel', 'Milane', 'Constance']
];

foreach ($eleves as $classe => $listEleves) {
    echo "La classe $classes:\n";
    foreach ($listEleves as $eleve) {
        echo "- $eleve \n";
    }
}