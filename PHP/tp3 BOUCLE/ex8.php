<?php
$champions = array(
    2022 => array('Argentine',  'France'),
    2018 => array('France',  'Croatie'),
    2014 => array('Allemagne', 'Argentine'),
    2010 => array('Espagne', 'Pays-Bas'),
    2006 => array('Italie', 'France'),
    2002 => array('Brésil', 'Allemagne'),
    1998 => array('France', 'Brésil'),
    1994 => array('Brésil', 'Italie'),
    1990 => array('Allemagne', 'Argentine'),
    1986 => array('Argentine', 'RFA'),
    1982 => array('Italie', 'RFA'),
    1978 => array('Argentine', 'Pays-Bas'),
    1974 => array('RFA', 'Pays-Bas'),
    1970 => array('Brésil', 'Italie'),
    1966 => array('Angleterre', 'RFA'),
    1962 => array('Brésil', 'Tchécoslovaquie'),
    1958 => array('Brésil', 'Suède'),
    1954 => array('RFA', 'Hongrie'),
    1950 => array('Uruguay', 'Brésil'),
    1938 => array('Italie', 'Hongrie'),
    1934 => array('Italie', 'Tchécoslovaquie'),
    1930 => array('Uruguay', 'Argentine'),
);

$recurence_vainqueur_et_finaliste = array(); // case 0 vainqueur case 1 participation

foreach ($champions as $key => $value) {
    $recurence_vainqueur_et_finaliste[$value[0]] = array(0,0);
    $recurence_vainqueur_et_finaliste[$value[1]] = array(0,0);
}

foreach ($champions as $key => $value) {
    echo "$key : $value[0] A gagner contre $value[1]" . PHP_EOL;

    $recurence_vainqueur_et_finaliste[$value[0]][0]++;
    $recurence_vainqueur_et_finaliste[$value[1]][1]++;
};

$finaliste_index = array();
$vainquer_index = array();

foreach ($recurence_vainqueur_et_finaliste as $key => $value) {
    $nb_participation =  $value[0] +  $value[1];
    echo "$key à étais en final $nb_participation est à étais champion $value[0]" . PHP_EOL;
    $modif = false;
    for ($i=0; $i < count($finaliste_index); $i++) {
        if  ($value[0] > $recurence_vainqueur_et_finaliste[$finaliste_index[$i]][0]) {
            array_splice($finaliste_index, $i, 0, $key);
            $modif = true;
            break;
        }
        if  ( ($value[0] + $value[1]) > ($recurence_vainqueur_et_finaliste[$finaliste_index[$i]][0] + $recurence_vainqueur_et_finaliste[$finaliste_index[$i]][1] )) {
            array_splice($vainquer_index, $i, 0, $key);
            $modif = true;
            break;
        }
    }
    if (count($finaliste_index) == 0 or !$modif)  {
        array_push($finaliste_index, $key);
    }
}

echo PHP_EOL . "Liste des vainqueur en ordre décroissants : " . PHP_EOL . PHP_EOL;

$last_victory = -1;
foreach ($finaliste_index as $key => $value) {
	$victoire = $recurence_vainqueur_et_finaliste[$value][0];
	
	if (($last_victory != $victoire)) {
    	if ($last_victory > $victoire) {
			echo " victoire $last_victory" . PHP_EOL;
		} 
		echo $value;
    } elseif ($last_victory == $victoire ) {
	  echo ", $value";
	  $line=false;
    }
    $last_victory = $victoire;
}
echo " victoire $last_victory" . PHP_EOL;

echo PHP_EOL . "Liste des participants finalistes en ordre décroissants : " . PHP_EOL . PHP_EOL;

$last_victory = -1;
foreach ($finaliste_index as $key => $value) {
	$victoire = $recurence_vainqueur_et_finaliste[$value][0] + $recurence_vainqueur_et_finaliste[$value][1];
	
	if (($last_victory != $victoire)) {
    	if ($last_victory > $victoire) {
			echo " Nombre de participation $last_victory" . PHP_EOL;
		} 
		echo $value;
    } elseif ($last_victory == $victoire ) {
	  echo ", $value";
	  $line=false;
    }
    $last_victory = $victoire;
}
echo " Nombre de participation $last_victory" . PHP_EOL;