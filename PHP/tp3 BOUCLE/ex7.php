<?php
$tab = [];

for ($i=0; $i < 100; $i++) { 
    $tab[$i] = rand(0, 200);
}

$tab_max = $tab[0];
$tab_min = $tab[0];

$tab_max_key = 0;
$tab_min_key = 0;

$total = 0; 

foreach($tab as $key => $value) {
    $total += $value;
    
    if ($tab_max < $value) {
    	$tab_max = $value;
    	$tab_max_key = $key;
    }
    
    if ($tab_min > $value) {
    	$tab_min = $value;
    	$tab_min_key = $key;
    }
}

echo "La valeurs maximal est -> $tab_max" . " ce trouvant à l'indice $tab_max_key" .PHP_EOL;
echo "La valeur minimal est -> $tab_min" . " ce trouvant à l'indice $tab_min_key" . PHP_EOL;

echo "La moyenne est de  -> " . $total / 100 . PHP_EOL; 

print_r($tab);