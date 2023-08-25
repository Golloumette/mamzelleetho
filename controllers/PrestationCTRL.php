<?php

/* 
 * PrestationCTRL.php
 */
// On appel la  bibliotèque Connexion
require_once '../libs/Connexion.php';

// On appel les fonctions du DAO
require_once '../daos/PrestationDAO.php';

$pdo = seConnecter("../conf/mamzelle.ini");
$tbody="";
$array = selectAll($pdo);

// création du tableau avec les prestations
for ($i = 0; $i < count($array); $i++) {
    $id_prestation = $array[$i][0];
    $nom = $array[$i][1];
    $prix = $array[$i][2];
    $tbody .= "<tr>";
    $tbody .= "<td>";
    $tbody .= $array[$i][0];
    $tbody .= "</td>";
    $tbody .= "<td>";
    $tbody .= $array[$i][1];
    $tbody .= "</td>";
    $tbody .= "<td>";
    $tbody .= $array[$i][2];
    $tbody .= "€</td>";
    $tbody .= "<td>";
    $tbody .= "<a href='../controllers/PanierCTRL.php?id_prestation=$id_prestation&nom=$nom&prix=$prix'><img src='../images/chevalPanier.JPG' width='70' alt='ajouter au panier'></a>";
    $tbody .= "</td>";
    $tbody .= "</tr>";
}






include '../views/PrestationView.php';
?>