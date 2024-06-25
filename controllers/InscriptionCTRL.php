<?php

header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, X-Requested-With");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
/**
 * InscriptionCTRL.php
 */

require_once '../models/Client.php';
require_once '../daos/ClientDAO.php';
require_once '../daos/Connexion.php';
require_once 'Verification.php';

//  on se connecte à la BD
$cnx = new Connexion();
$pdo = $cnx->seConnecter("../conf/mamzelle.ini");
$mdp = filter_input(INPUT_POST, "user_mdp");
$verifMdp = filter_input(INPUT_POST, "verif_mdp");
$verifMail = filter_input(INPUT_POST, "verif_mail");
$mail = filter_input(INPUT_POST, "user_mail");

$affected = checkMdp($mdp, $verifMdp);
if ($affected === 1) {
    $Cryptmdp = crypt($mdp, "123456");
    //    on créé un nouveau objet client vierge
    $client = new Client();
    $client->setNom(filter_input(INPUT_POST, "user_nom"));
    $client->setPrenom(filter_input(INPUT_POST, "user_prenom"));
    $client->setDateDeNaissance(filter_input(INPUT_POST, "user_anniv"));
    $client->setMail($mail);
    $client->setPseudo(filter_input(INPUT_POST, "user_pseudo"));
    $client->setMdp($Cryptmdp);
    $client->setAdresse(filter_input(INPUT_POST, "user_adresse"));
    $client->setTel(filter_input(INPUT_POST, "user_tel"));
    $client->setDateInscription(date("Y-m-d"));
    $client->setIdVille(filter_input(INPUT_POST, "id_ville"));
    $dao = new ClientDAO($pdo);
    $affected = $dao->insertClient($client);
}
echo json_encode($affected);
