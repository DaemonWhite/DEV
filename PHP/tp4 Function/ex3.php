<?php


$SCORE_j1=0;
$SCORE_j2=0;

$RESULTAT=["pierre", "feuille", "ciseau"];


/**
 * Determine qui à gagner au pierre feuille ciseau
 * 
 * Choix joueur
 * 
 * 0 : pierre
 * 1 : feuille
 * 2 : ciseaux
 * 
 *  retour valeur
 * 
 * 0 : egaliter
 * 1 : Joueur 1 à gagner
 * 2 : Joueur 2 à gagner 
 * 
 * @param int $j1 choix du joueur 1
 * @param int $j2 choix du joueur 2
 * @return int $j3 retourn si le joueur à gagner
 */
function gagnant(int $j1, int $j2): int {
    $EGALITER = 0; // initialise vainqueur
    $VAINQUEUR_J1=1;
    $VAINQUEUR_J2=2;

    $PIERRE = 0;
    $FEUILLE = 1;
    $CISEAU = 2;

    switch ($j1) {
        case $PIERRE:
            switch ($j2) {
                case $PIERRE: return $EGALITER ;
                case $FEUILLE: return $VAINQUEUR_J2;
                case $CISEAU: return $VAINQUEUR_J1;
            }

        
        case $FEUILLE:
            switch ($j2) {
                case $PIERRE: return $VAINQUEUR_J1 ;
                case $FEUILLE: return $EGALITER;
                case $CISEAU: return $VAINQUEUR_J2;
            }

        case $CISEAU:
            switch ($j2) {
                case $PIERRE: return $VAINQUEUR_J2 ;
                case $FEUILLE: return $VAINQUEUR_J1;
                case $CISEAU: return $EGALITER;
            }
    }
}

/**
 * Incremente le score en fonction de qui gagne
 * 
 * @param int $winner valleur de qui à gagner
 * @param int &$SCORE_j1 Réference du score j1
 * @param int &$SCORE_J2 Réference du score j2
 */
function score(int $winner, int &$SCORE_j1, int &$SCORE_j2) : void {
    if ($winner == 1) {
        $SCORE_j1++;
    } elseif ($winner == 2) {
        $SCORE_j2++;
    }
}
/**
 * Demande quel main le joueur veut jouer
 * @return int retourne la main du joueur
 */
function demande_joueur() : int {
    echo "Choisissez votre main :  " . PHP_EOL . "0: PIERRE" . PHP_EOL . "1: FEUILLE" . PHP_EOL . "2: CISEAU" . PHP_EOL;
    return readline('Que voulez-vous jouer : ');
}

while ($SCORE_j1 < 3 && $SCORE_j2 < 3) {
    score(
        gagnant(demande_joueur(), rand(0,2)),
        $SCORE_j1,
        $SCORE_j2
    );
    echo PHP_EOL . "SCORE 1 : $SCORE_j1 " . PHP_EOL . "SCORE 2 : $SCORE_j2" . PHP_EOL;
}

if ($SCORE_j2 > $SCORE_j1) {
    echo "L'ordianteur à gagner";
} else {
    echo "Le joeu";
}
