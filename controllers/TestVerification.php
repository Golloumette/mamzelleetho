<?php

require_once 'Verification.php';

$mdp = "chien";
$verifMdp = "chien";
$message = "test fonction1";
$array = [];
$mail = "bob@gmail.com";
$verifMail = "bob@gmail.com";

$retour = checkMdp($mdp, $verifMdp);
if ($retour != "") {
    array_push($array, $retour);
}
$retour = checkMail($mail, $verifMail);
if ($retour != "") {
    array_push($array, $retour);
}


if (empty($array)) {
    echo "tout va bien on continue";
} else {
    echo "on s'arrête";
}
var_dump($array);
