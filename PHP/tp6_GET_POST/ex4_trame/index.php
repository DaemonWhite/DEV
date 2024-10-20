<?php
/**
* Pierre - Feuille - Ciseaux
* Dans tout le script, on va coder les choix des joueurs:
* 0: Pierre
* 1: Feuille
* 2: Ciseaux
*/
session_start();
if (!isset($_SESSION["SCORE_JOUEUR"])) {
    $_SESSION["SCORE_JOUEUR"] = 0;
    $_SESSION["SCORE_MACHINE"] = 0;
}

include('vues/header.php');
include('vues/form.php');
include('vues/footer.php');
