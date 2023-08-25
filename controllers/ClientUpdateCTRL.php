<?php
/* 
 * InscriptionCTRL.php
 */
// On appel la  bibliotèque Connexion
require_once '../libs/Connexion.php';


// On appel les fonctions du DAO
require_once '../daos/ClientDAO.php';
$message = "";
$messageMAJ="";

$contenuListe = "";
$firstLine = array();
$lines = array(); 
// Je récup l'ID pour le selectOne
$id=filter_input(INPUT_POST,"id_client");



$pdo = seConnecter("../conf/mamzelle.ini");
$contents = "";
$lines = selectAll($pdo);
// on fait  le corps du tableau
// double boucle , boucle  sur les colonnes à l'interieur de la boucle sur les lignes  ce qui fait que c'est générique

foreach ($lines as $line) {
    $contents .= "<tr>";
    foreach ($line as $column) {
        $contents .= "<td>$column</td>";
    }
    $contents .= "</tr>";
}
$headers = "";
$firstLine = $lines[0];

// on  boucle sur la  première ligne et  pour chaque colonne on met  une valeur qui correspond au nom de  la colonne et sa valeur
// on utilise pas  value mais obligation de le mettre pour avoir le nom
foreach ($firstLine as $column => $value) {
    // ici  on est dans  un tableau
    $headers .= "<th>" . $column . "</th>";
}



// Appel de la fonction SelectAll pour afficher une liste déroulante
$cursor = selectAll($pdo);

foreach ($cursor as $enregistrement) {
    // Récupération des valeurs par concaténation et interpolation
    $contenuListe .= "<option value=$enregistrement[id_client]>";
    $contenuListe .= $enregistrement["nom"];
    $contenuListe .= $enregistrement["prenom"];
    $contenuListe .= "</option>\n\n";
}



// Appel de la fonction SelectOne pour selection le client à modifier
$btSelectionner = filter_input(INPUT_POST,"btSelectionner");
if($btSelectionner != null){
    $id=filter_input(INPUT_POST,"id_client"); 
$message = selectOne($pdo,$id);
} /**FIN APPEL FUINCTION SELECTONE */

//  Appel de la fonction modifier(update)
$btModifier = filter_input(INPUT_POST,"btModifier");
if ($btModifier != null){

    $id=filter_input(INPUT_POST,"id_client");

    // je récupère mes valeurs depuis mon formulaire pour l'update
$nom = filter_input(INPUT_POST,"user_nom");
$prenom = filter_input(INPUT_POST,"user_prenom");
$anniv = filter_input(INPUT_POST,"user_anniv");
$mail = filter_input(INPUT_POST, "user_mail");
$pseudo = filter_input(INPUT_POST, "user_pseudo");
$mdp = filter_input(INPUT_POST, "user_mdp");
$adresse = filter_input(INPUT_POST, "user_adresse");
$cp = filter_input(INPUT_POST, "user_cp");
$ville = filter_input(INPUT_POST, "user_ville");
$tel = filter_input(INPUT_POST, "user_tel"); 

            $id = intval($id);
            echo $id;
            $tAttributesValues = array();
            $tAttributesValues['nom'] = $nom;
            $tAttributesValues['prenom'] = $prenom;
            $tAttributesValues['date_de_naissance'] = $anniv;
            $tAttributesValues['adresse'] = $adresse;
            $tAttributesValues['cp'] = $cp;
            $tAttributesValues['ville'] = $ville;
            $tAttributesValues['pseudo'] = $pseudo;
            $tAttributesValues['mdp'] = $mdp;
            $tAttributesValues['mail'] = $mail;
            $tAttributesValues['tel'] = $tel;

 $affected = update($pdo,$id,$tAttributesValues);
    if ($affected === 1) {
        //$pdo->commit();
        $messageMAJ = "Vos informations ont été modifié !!!";
    } else {
        //$pdo->rollback();
        $messageMAJ = "Problème de mise à jour, veuillez contacter votre administrateur (Madame Caroline) !!!";
    } /**fin du else */
} else {
    $messageMAJ = "Merci de compléter tous les champs";
}


// }
// if ($nom != null && $prenom != null && $anniv != null && $mail != null &&  $pseudo != null && $mdp != null && 
// $adresse != null && $cp != null && $ville != null && $tel != null) {

           


   

include '../views/ClientView.php';
?>