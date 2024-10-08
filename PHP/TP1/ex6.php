<?php

$AGE_LEGAL = 18;

$day = readline("Donner votre jours de naissance : ");
$month = readline("Mois de naissance : ");
$year = readline("Anner de naissance : ");

$day_to_day = date('d');
$month_to_day = date('m');
$year_to_day = date('Y');

$major = "Vous êtes mineur";

if ( ($year_to_day - $year) >= $AGE_LEGAL ) {
    if ( $month_to_day >=  $month ) {
        if ($day_to_day > $day) {
            $major = "Vous êtes majeur";
        } elseif ($day_to_day == $day) {
            $major = "Bonne aniversair";
        }
    }
}

echo $major;

/*
Solution orienter objet pour après pas toucher
$birthday = date_timestamp_set(date_create() ,mktime(0,0,0, $month, $day, $year));
$today = date_create("now");
$existance_year = (int)date_diff($birthday, $today)->format("%y");
*/