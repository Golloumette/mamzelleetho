<?php


require_once '../libs/Connexion.php';
//require_once '../lib/Transaxion.php';
require_once 'VilleDAO.php';
require_once 'VilleBisDAO.php';

$pdo = seConnecter("../conf/mamzelle.ini");


 echo "<hr>Fonction insert Test <hr>";
//  Fonction testée et fonctionnelle
$tAttributesValues = array();
$tAttributesValues['code_commune_INSEE'] = "59299";
$tAttributesValues['code_postal'] = "59510";
$tAttributesValues['latitude'] = ",50.2528760846";
$tAttributesValues['longitude'] = "3.22719072906";
$tAttributesValues['nom_commune'] = "Hem";
$tAttributesValues['code_departement'] = "59";
$tAttributesValues['nom_departement'] = "Nord";

// $affected = insert($pdo, $tAttributesValues);
// echo "Insertion : $affected";
// //$pdo->commit();



// echo"<hr>Test Fonction SelectAll <hr>";
// $content = "";
// $lines = selectAll($pdo);
// foreach ($lines as $line) {
//      foreach ($line as $field ) {
//          $content .= $field . ":" . $value . ";";
//         $content .= "<option value='$field[0]'>$field</option>\n";
//     }
//      $content .= "\n";
//  }
//  echo nl2br($content);
// ?>
// <html>
//     <form action="" method="get">
//         <label >Liste deroulante</label>
//         <select>
//             <?php 
//             echo $content;
//             ?>
//         </select>
//     </form>
// </html>
// <?php
// echo "<hr>selectOne<hr>";
// $content = "";
// $line = selectOne($pdo, 8);
// if ($line != null) {
//     foreach ($line as $field => $value) {
//         $content .= $value;
//     }
//     $content .= "\n";
//     echo nl2br($content);
// } else {
//     echo "Une erreur s'est produite, veuillez téléphoner à votre administrateur de BD, madame Caroline ";
// }

echo "<hr>Test Fonction Delete <hr>";
// Fonction testé et fonctionnelle
// $affected = delete($pdo,51);
//  echo "Suppression : $affected";

echo"<hr>Test  fonction update<hr>";

// $id= 52;
// $tAttributesValues = array();
// $tAttributesValues['code_commune_INSEE'] = "59299";
// $tAttributesValues['code_postal'] = "59510";
// $tAttributesValues['latitude'] = "50.2528760846";
// $tAttributesValues['longitude'] = "3.22719072906";
// $tAttributesValues['nom_commune'] = "Hem";
// $tAttributesValues['code_departement'] = "59";
// $tAttributesValues['nom_departement'] = "Nord";
// $affected = update($pdo,$id, $tAttributesValues);

// echo  "Modification : $affected";

echo "<hr>Test Fonction Select By CP et return list <hr> ";
$cp= "24200";
$contenuListe="";
$cursor = selectByCp($pdo ,$cp);
foreach($cursor as $enregistrement){
    // $contenuListe .="<option>";
    // $contenuListe .= $enregistrement["nom_commune"];
    // $contenuListe .= "</option>\n";
    echo "<br>$enregistrement[0]";
}
//  echo"<select>";
//  echo "$contenuListe";
//  echo "</select>";

?>

<!-- <select name="id_ville">
                    <option value=0>Choisissez votre ville</option>
                    
    
                    // echo $contenuListe;
//                  </select> -->