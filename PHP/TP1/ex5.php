<?php

$age = 2024 - readline("Donner votre anner de naissance : ");
$price = 0;

if ( $age >= 20 ) {
    $price = 10;
} elseif ($age >= 5 AND $age <= 19) {
    $price = 7.5;
}

echo "Le prix de votre forfait est : ";
echo $price;