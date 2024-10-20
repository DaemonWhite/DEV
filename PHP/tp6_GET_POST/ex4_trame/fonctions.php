<?php

/**
* Fonction retournant le gagnant d'une manche.
* Le gagnant est codé comme suit:
* 0: égalité
* 1: Joueur_1 a gagné
* 2: Joueur_2 a gagné
*
* @param int $joueur_1 Choix du joueur 1
* @param int $joueur_2 Choix du joueur 2
* @return int Gagnant (voir ci-dessus)
*/

function gagnant (int $joueur_1, int $joueur_2): int
{
    if ($joueur_1 == 0){
        // Joueur 1 a joué Pierre
        switch($joueur_2){
            case 0: return 0; // Pierre - Pierre
            case 1: return 2; // Pierre - Feuille
            case 2: return 1; // Pierre - Ciseaux
        }
    }
    if ($joueur_1 == 1){
        // Joueur 1 a joué Feuille
        switch($joueur_2){
            case 0: return 1; // Feuille - Pierre
            case 1: return 0; // Feuille - Feuille
            case 2: return 2; // Feuille - Ciseaux
        }
    }
    if ($joueur_1 == 2){
        // Joueur 1 a joué Ciseaux
        switch($joueur_2){
            case 0: return 2; // Ciseaux - Pierre
            case 1: return 1; // Ciseaux - Feuille
            case 2: return 0; // Ciseaux - Ciseaux
        }
    }
}

/**
 * La correspondance string du choix du joueur
 * 
 * 0 Pierre
 * 1 Ciseau
 * 2 Feuille
 * 
 * @param int $choix choix du joueur 
 * @param string chaine de charactére corestpondante à l'entier
 */
function choix_str(int $choix): string {
    $choix_str = ["Pierre", "Feuille", "Ciseaux"];
    return $choix_str[$choix];
}

/**
 * Retourne le choix de l'ordinateur
 * 
 * @return int choix de l'ia
 */
function ia_choix(): int {
    return random_int(0, 2);
}