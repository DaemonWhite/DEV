<?php
$url = "https://data.rennesmetropole.fr/api/records/1.0/search/?dataset=prevision-meteo-rennes-arome&rows=1";

$brut_json_weather = json_decode(file_get_contents($url), true);

$position = $brut_json_weather['records'][0]['datasetid'];
$vent = $brut_json_weather['records'][0]['fields']['10m_wind_speed'];
$precipitation = $brut_json_weather['records'][0]['fields']['total_precipitation'];
$max_temperature = $brut_json_weather['records'][0]['fields']['maximum_temperature_at_2_metres'];
$min_temperature = $brut_json_weather['records'][0]['fields']['minimum_temperature_at_2_metres'];
$actuelle_temperature = $brut_json_weather['records'][0]['fields']['2_metre_temperature'];

$date =  $brut_json_weather['records'][0]['record_timestamp'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <span>Localisaiton <?= $position ?></span><br>
    <span>Vitesse vent : <?= $vent?></span><br>
    <span>Precipitation : <?= $precipitation?></span><br>
    <span>Max temperature : <?=$max_temperature?></span><br>
    <span>Min Temperature <?= $min_temperature ?></span><br>
    <span>Temperature courante <?= $actuelle_temperature?></span><br>
    <span>date : <?= $date ?></span><br>
</body>
</html>