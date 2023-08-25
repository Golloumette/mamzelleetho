<?php

/* 
 * AuthentificationCTRL.php
 */
require_once '../libs/Connexion.php';
//require_once '../lib/Transaxion.php';
require_once '../daos/ClientDAO.php';

$pdo = seConnecter("../conf/mamzelle.ini");


include '../views/AuthentificationView.php'

?>