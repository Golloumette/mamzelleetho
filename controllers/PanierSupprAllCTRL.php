<?php
//  on créé le cookie Panier avec en valeur les variables de panier

$emptyBasket = filter_input(INPUT_GET, "emptyBasket");
$panier = "";


setcookie("panier", $panier, time());
$message = "Le panier a été vidé";


include '../views/Panier.php';
?>

