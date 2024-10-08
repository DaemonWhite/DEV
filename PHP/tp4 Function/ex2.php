<?php 

$adn1= "GAGCCTACTAACGGGAT";
$adn2= "CATCGTAATGACGGCCT";

/**
 * Donne une lettre alléatoire par rapport à une chaîne
 * 
 * @param string Donne une chaine de charactère contenant toutes les lettres
 * @param string retourne un charactère qui à étais définie par la liste précédante
 */
function rand_letters(string $letters): string {
    $i = rand(0, strlen($letters)-1); // Donne un index de 0 au nombre de charactère;
    return $letters[$i];
}

/**
 * Génère un brin d'adn aléatoirement avec une taille définie par l'utilisateur
 * 
 * @param int $size donne la taille de l'adn
 * @return string retourne l'adn 
 */
function rand_adn(int $size) {
    $adn = "";
    $letters_adn = "CAGT";
    for ($i=0; $i < $size ; $i++) { 
        $adn = $adn . rand_letters($letters_adn);
    }
    return $adn;
}

$adn1= "GAGCCTACTAACGGGAT";
$adn2= "CATCGTAATGACGGCCT";
/**
 * Donne la différence entre deux adn;
 * Les adn n'ont pas besoins d'etres de la même taille
 * 
 * @param string $adn1 premier adn
 * @param string $adn2 deuxième adn
 * @return int Retourne un entier qui donne la différence entre les deux adn
 */
function correspondance(string $adn1, string $adn2): int {
    $diff = 0;

    // Inverse les chaines si le plus grand et plus petit
    if (strlen($adn1) > strlen($adn2) ){
        $tmp = $adn1;
        $adn1=$adn2;
        $adn2=$tmp;
    }

    for ($i=0; $i < strlen($adn1); $i++) { 
        if ($adn1[$i] != $adn2[$i]) {
            $diff++;
        }
    }
    return $diff;
}

echo correspondance(
    $adn1,
    $adn2
);

$total_diff = 0;

for ($i=0; $i < 100; $i++) { 
        
    $total_diff += correspondance(
        rand_adn(18),
        rand_adn(18)
    );
}

echo "il y'a une moyenne de : " . $total_diff/100;