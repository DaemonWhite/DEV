<?php


$SCORE_j1=0;
$SCORE_j2=0;


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

function demande_joueur() {
    
}

score(
    gagnant(0,1),
    $SCORE_j1,
    $SCORE_j2
);


echo "SCORE 1 : $SCORE_j1 " . PHP_EOL . "SCORE 2 : $SCORE_j2";
