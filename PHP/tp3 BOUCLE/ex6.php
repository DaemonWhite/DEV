<?php

$TIRAGE = 1000;
$tirer=-1;
$nb_tirage=0;


for ($i=0; $i < $TIRAGE; $i++) {
    $tirer = rand(1,100);
    $nb_tirage = $i+1;
    if ($tirer === 42 ) {
        break;
    } 
}

echo "Le nombre d'entier tirer est de " . $nb_tirage;