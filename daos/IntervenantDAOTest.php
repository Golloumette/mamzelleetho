<?php


require_once '../libs/Connexion.php';
//require_once '../lib/Transaxion.php';
require_once 'IntervenantDAO.php';

$pdo = seConnecter("../conf/mamzelle.ini");


 echo "<hr>insert Test  Test ok <hr>";
// // $pdo->beginTransaction();
$tAttributesValues = array();
$tAttributesValues['nom'] = "Demory";
$tAttributesValues['prenom'] = "Anne-Sophie";
$tAttributesValues['tel'] = "06.00.00.00.00";
$tAttributesValues['mail'] = "anneso@gmail.com";
$tAttributesValues['adresse'] = "87 rue jules Guesde";
$tAttributesValues['cp'] = "59510";
$tAttributesValues['ville'] = "hem";
$tAttributesValues['site_internet'] = "https://www.facebook.com/profile.php?id=100083347142281";
 $affected = insert($pdo, $tAttributesValues);
echo "Insertion : $affected";
// //$pdo->commit();



echo"<hr>Test Fonction SelectAll Test ok <hr>";
$content = "";
$lines = selectAll($pdo);
foreach ($lines as $line) {
    foreach ($line as $field => $value) {
        $content .= $field . ":" . $value . ";";
    }
    $content .= "\n";
}
echo nl2br($content);

echo "<hr>selectOne<hr>";
$content = "";
$line = selectOne($pdo, 5);
if ($line != null) {
    foreach ($line as $field => $value) {
        $content .= $value;
    }
    $content .= "\n";
    echo nl2br($content);
} else {
    echo "Une erreur s'est produite, veuillez téléphoner à votre administrateur de BD, madame Caroline ";
}

echo "<hr>Test Fonction Delete test ok <hr>";
// $affected = delete($pdo,1);
echo "Suppression : $affected";

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

echo  "Modification : $affected";

?>