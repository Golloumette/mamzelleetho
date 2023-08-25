<?php

require_once '../daos/VilleBisDAO.php';
require_once '../daos/Connexion.php';

//  on se connecte à la BD
$cnx = new Connexion();
$pdo = $cnx->seConnecter("../conf/mamzelle.ini");

$refVille = filter_input(INPUT_GET, "refVille");
if ($refVille != NULL) {
    $liste = selectByCp($pdo, $cp);
    echo json_encode($liste);
    die();

}
?>