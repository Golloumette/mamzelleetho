<?php

/**
 * Verification.php
 */

// on créé un tableau qui va retourner toutes les anomalies
function checkMdp($mdp, $verifMdp)
{
    $retour = "";
    if ($mdp == "" || $verifMdp == "") {

        $retour = "merci de compléter tous les éléments";
    } else {

        if ($mdp === $verifMdp) {
        } else {
            $retour = "mots de passe non identiques";
        }
    }
    return $retour;
}

function checkMail($mail, $verifMail)
{
    $retour = "";
    if ($mail == "" || $verifMail == "") {

        $retour = "merci de compléter tous les éléments";
    } else {

        if ($mail === $verifMail) {
        } else {
            $retour = "e-mails non identiques";
        }
    }
    return $retour;
}
