<?php

require("fonctions.php");

session_start();
if (!isset($_SESSION["SCORE_JOUEUR"])) {
    $_SESSION["SCORE_JOUEUR"] = 0;
    $_SESSION["SCORE_MACHINE"] = 0;
}

if ( isset($_POST['choix']) ) {
    $choix = $_POST['choix'];
    $ia_choix = ia_choix();
    $vainqueur = gagnant($choix, $ia_choix);

    switch ($vainqueur) {
        case 0: {
            $vainqueur_str = "Egaliter";   
        }; break;
        case 1: { 
            $vainqueur_str = "Le joueur à gagner";
            $_SESSION["SCORE_JOUEUR"]++;
        }; break;
        case 2: {
            $vainqueur_str =  "La machine à gagner";
            $_SESSION["SCORE_MACHINE"]++;
        }; break;
    }

    $choix_str = choix_str($choix);
    $ia_choix_str = choix_str($ia_choix);
    include("vues/reponse.php");
    include("vues/footer.php");
} else {
    header("Location: index.php");
}

?>