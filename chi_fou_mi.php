<?php

/**
 * Chi Fou Mi
 * 
 * On code les choix des joueurs:
 * 0: Pierre
 * 1: Feuille
 * 2: Ciseaux
 */

/**
 * Renvoie le résultat d'une manche de Chi Fou Mi
 *
 * On code le résultat:
 * 0: égalité
 * 1: victoire joueur 1
 * 2: victoire joueur 2
 * 
 * @param int $joueur_1 choix du joueur 1
 * @param int $joueur_2 choix du joueur 2
 * @return int résultat de la manche
 */
function resultat(int $joueur_1, $joueur_2): int
{
    switch($joueur_1){
        // Le joueur 1 à joué Pierre
        case 0:{
            switch ($joueur_2){
                case 0: return 0; // Pierre vs Pierre
                case 1: return 2;// Pierre vs Feuille
                case 2: return 1;// Pierre vs Ciseaux
            }
        }
        // Le joueur 1 à joué Feuille
        case 1:{
            switch ($joueur_2){
                case 0: return 1; // Feuille vs Pierre
                case 1: return 0;// Feuille vs Feuille
                case 2: return 2;// Feuille vs Ciseaux
            }
        }
        // Le joueur 1 à joué Ciseaux
        case 2:{
            switch ($joueur_2){
                case 0: return 2; // Ciseaux vs Pierre
                case 1: return 1; // Ciseaux vs Feuille
                case 2: return 0; // Ciseaux vs Ciseaux
            }
        }
    }
}

/**
 * Demande au joueur de choisir et renvoie son choix
 * 
 * On valide l'entrée pour avoir un entier entre 0 et 2.
 * @return int le choix du joueur
 */

 function demande_joueur():int
 {
    echo '0: Pierre' . PHP_EOL . '1: Feuille' . PHP_EOL . '2: Ciseaux'. PHP_EOL;
    $choix = readline('Que choisissez vous:');
    while ($choix !=0 and $choix != 1 and $choix != 2){
        echo PHP_EOL . 'Merci de rentrer un entier entre 0 et 2!'. PHP_EOL;
        echo '0: Pierre' . PHP_EOL . '1: Feuille' . PHP_EOL . '2: Ciseaux'. PHP_EOL;
        $choix = readline('Que choisissez vous:');
    }
    return $choix;
 }

 demande_joueur();