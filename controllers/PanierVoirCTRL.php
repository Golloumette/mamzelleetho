<?php

$panier = filter_input(INPUT_COOKIE, "panier");
if ($panier == "") {
    $message = "Votre Panier est vide";
} else {
    $message = "Votre panier contient";
}
$table = "";

$t = explode(" et ", $panier);

for ($i = 0; $i < count($t); $i++) {
    $table .= "<tr>";
    //  $t est un tableau 2d
    // $t2 est un tableau 1d
    $t2 = explode("#", $t[$i]);

    for ($j = 0; $j < count($t2); $j++) {
        $table .= "<td>$t2[$j]</td>";
    }
    $id_prestation = $t2[0];
    $nom = $t2[1];
    $prix = $t2[2];
    $table .= "<td><a href='../controllers/PanierSupprSelectionCTRL.php?id_prestation=$id_prestation&nom=$nom&prix=$prix'>Supprimer</a></td>";
    $table .= "</tr>";
}
   


include "../views/Panier.php";
