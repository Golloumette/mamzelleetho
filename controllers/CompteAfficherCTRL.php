<?php

session_start();

// on appel les fichiers qu'on va utiliser
require_once '../models/Client.php';
require_once '../daos/Connexion.php';

// on instancie les classes
$client = new Client();
$cnx = new Connexion ();
$pdo = $cnx->seConnecter("../conf/mamzelle.ini");


include '../views/MonCompteView.php'
?>