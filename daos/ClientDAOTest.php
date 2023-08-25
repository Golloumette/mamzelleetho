<?php


require_once '../libs/Connexion.php';
//require_once '../lib/Transaxion.php';
require_once 'ClientDAO.php';

$pdo = seConnecter("../conf/mamzelle.ini");


 echo "<hr>insert Test <hr>";
// // $pdo->beginTransaction();
$tAttributesValues = array();
$tAttributesValues['nom'] = "Demory";
$tAttributesValues['prenom'] = "Anne-Sophie";
$tAttributesValues['date_de_naissance'] = "25/05/1986";
$tAttributesValues['id_ville'] = "3";
$tAttributesValues['adresse'] = "87 rue jules Guesde";
$tAttributesValues['pseudo'] = "TestInsert4";
$tAttributesValues['mdp'] = "Teemo";
$tAttributesValues['mail'] = "anneso@gmail.com";
$tAttributesValues['tel'] = "06.00.00.00.00";
$tAttributesValues['date_inscription'] = date("Y-m-d");
// $affected = insert($pdo, $tAttributesValues);
echo "Insertion : $affected";
// //$pdo->commit();



echo"<hr>Test Fonction SelectAll <hr>";
$content = "";
// $lines = selectAll($pdo);
foreach ($lines as $line) {
     foreach ($line as $field ) {
        //  $content .= $field . ":" . $value . ";";
        $content .= "<option value='$field[0]'>$field</option>\n";
    }
    // $content .= "\n";
 }
// echo nl2br($content);
?>
<html>
    <form action="" method="get">
        <label >Liste deroulante</label>
        <select>
            <?php 
            echo $content;
            ?>
        </select>
    </form>
</html>
<?php
echo "<hr>selectOne<hr>";
$content = "";
$line = selectOne($pdo, 8);
if ($line != null) {
    foreach ($line as $field => $value) {
        $content .= $value;
    }
    $content .= "\n";
    echo nl2br($content);
} else {
    echo "Une erreur s'est produite, veuillez téléphoner à votre administrateur de BD, madame Caroline ";
}

echo "<hr>Test Fonction Delete <hr>";
// $affected = delete($pdo,1);
// echo "Suppression : $affected";

echo"<hr>Test  fonction update<hr>";
$tAttributesValues = array();
$id= 2;
$tAttributesValues = array();
$tAttributesValues['nom'] = "Demory2";
$tAttributesValues['prenom'] = "Anne-Soph";
$tAttributesValues['date_de_naissance'] = "25/05/1900";
$tAttributesValues['adresse'] = "87 rue jules ";
$tAttributesValues['cp'] = "59800";
$tAttributesValues['ville'] = "roubaix";
$tAttributesValues['pseudo'] = "ouioui";
$tAttributesValues['mdp'] = "Tanguy";
$tAttributesValues['mail'] = "anneso@hotmail.com";
$tAttributesValues['tel'] = "07.00.00.00.00";
// $affected = update($pdo,$id, $tAttributesValues);

// echo  "Modification : $affected";

echo "<hr> Test Fonction SelectOne Pseudo et Mot de passe<hr>";
$pseudo="DIDI";
$mdp="Teemo";
// $count = selectPseudoAndMdp($pdo,$pseudo,$mdp);
// echo " le resultat de la recherche est : $count"; 

?>