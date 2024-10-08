<?php

$majore = "Majeur";
$age = 2024 - readline("Donner votre anner de naissance : ");
if ($age < 18) {
    $majore = "Mineur";
}
echo "Vous avez : ";
echo $age ;
echo "\nEt vous êtes : " ;
echo $majore;