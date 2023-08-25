<?php

/* 
 * AuthentificationCTRL.php
 */
require_once '../daos/Connexion.php';
//require_once '../lib/Transaxion.php';
require_once '../daos/ClientDAO.php';
session_start();
$cnx = new Connexion ();
$pdo = $cnx->seConnecter("../conf/mamzelle.ini");


//  je créé une variable NOMME $message et je lui affecte une valeur, en l'occurence chaine vide
$message = "";
// Je vérifie si la checkbox se souvenir de moi est créé
$memory = filter_input(INPUT_POST, "memory");
// je crée une variable nomme $pseudo et je lui affecte ce qui a été saisi dans le formulaire ds l'input nommé pseudo
$pseudo = filter_input(INPUT_POST, "pseudo");
$mdp = filter_input(INPUT_POST, "mdp");

// je test que les deux champs sont remplis
if ($pseudo == "" || $mdp == "") {
    $message = "Merci de saisir tous les éléments";
} else {
    $client = new Client();
    $dao = new ClientDAO($pdo);
    $client = $dao->selectByPseudoAndMdp($pseudo, $mdp);
    if ($client->getIdClient() == 0) {
         $message = "Cavalier inexistant";
        include "../views/AuthentificationView.php";
    } else {
      
         $message = "L'utilisateur a été trouvé";
        $id_client = $_SESSION['id_client']=$client->getIdClient();
        $client = $dao->SelectOneById($id_client);
        include "../views/MonCompteView.php";
    }
    if ($memory != NULL) {
        setCookie("pseudo", $pseudo);
        setcookie("mdp", $mdp);
    }
    /** fin du if Memory */
}

include '../views/AuthentificationView.php'
?>