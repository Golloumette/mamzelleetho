<?php

/* 
 * PanierCTRL.php
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
// on récup les éléments
$idPrestation = filter_input(INPUT_GET,"id_prestation");
$nom = filter_input(INPUT_GET,"nom");
$prix = filter_input(INPUT_GET,"prix");

//  on récup la valeur de cookie
$panier=filter_input(INPUT_COOKIE,"panier");
// On vérifie l'état du panier
 if($panier !=null){
    // On ajoute notre panier à l'ancien
   //  echo $panier;
    $panier .= " et $idPrestation#$nom#$prix";
  
 } else {

    // panier vide la variable = des champs du panier
    $panier = "$idPrestation#$nom#$prix";
 
 }


//  on créé le cookie Panier avec en valeur les variables de panier
setcookie("panier", $panier, time()+3600*24*14 ); 
$emptyBasket = filter_input(INPUT_GET,"emptyBasket");
if ($emptyBasket != null){
 
   setcookie("panier",$panier,time()); 
}

include '../views/PrestationView.php';
?>