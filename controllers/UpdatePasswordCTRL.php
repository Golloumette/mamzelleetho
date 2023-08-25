<?php

require_once '../models/Client.php';
require_once '../daos/ClientDAO.php';
require_once '../daos/Connexion.php';

// On récup l'id_client des paramètres de l'url
$id_client = filter_input(INPUT_GET,"id_client");

// Action si bouton valider activer
$btUpdateMdp =filter_input(INPUT_POST,"btUpdateMdp");
if ($btUpdateMdp!=null){
    $cnx = new Connexion();
    $pdo = $cnx->seConnecter("../conf/mamzelle.ini");
    
    // $mail = filter_input(INPUT_GET,"mail") ;
    try {
        $client = new Client();
        $dao = new ClientDAO($pdo);
        $client->setIdClient(filter_input(INPUT_POST,"id_client"));
        $client->setMdp(filter_input(INPUT_POST,"updateMdp"));
       
        $result = $dao->updateMdpById($client);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
if ($result == 1 ){
    $message = "Le mot de passe a été modifié";
} else if ($result == 0) {
    $message = "Le mot de passe n'a pas été modifié";
} else {
    $message = "Erreur serveur dans la modification du mot de passe";
}

}

include '../views/UpdatePasswordView.php';
?>