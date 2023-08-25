<?php


/* 
 * PanierSupprSelectionCTRL.php
 */
 // je récup la  valeur du cookie 
 $panier=filter_input(INPUT_COOKIE,"panier");

 // on récup les éléments
$idPrestation = filter_input(INPUT_GET,"id_prestation");
$nom = filter_input(INPUT_GET,"nom");
$prix = filter_input(INPUT_GET,"prix");
$poubelle="$idPrestation#$nom#$prix";
$table = "";
echo "Valeur variable poubelle : $poubelle";
 
   

    $t = explode(" et ", $panier);
//    while ($t = $poubelle) {
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
    }
// }


echo"<pre>"; 
var_dump($t[0]);
echo"</pre>";
echo $panier;
include '../views/Panier.php'

?>