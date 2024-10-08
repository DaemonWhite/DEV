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

echo <<<EOT
La météo prise à : $position
Prise le : $date

temperature actuelle : $actuelle_temperature
Temperature Max : $max_temperature
Temperature Min : $min_temperature

Precipitation : $precipitation
Vent : $vent
EOT;