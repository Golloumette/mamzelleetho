<?php
/* 
 * InscriptionAddCTRL.php
 */
// On appel la  bibliotèque Connexion
require_once '../libs/Connexion.php';

// On appel les fonctions du DAO
require_once '../daos/ClientDAO.php';
require_once '../daos/VilleBisDao.php';


$message = "";

$btValider = filter_input(INPUT_POST,"btValider");
if($btValider!=null){

    
// je récupère mes valeurs depuis mon formulaire
$nom = filter_input(INPUT_POST,"user_nom");
$prenom = filter_input(INPUT_POST,"user_prenom");
$anniv = filter_input(INPUT_POST,"user_anniv");
$mail = filter_input(INPUT_POST, "user_mail");
$verifmail = filter_input(INPUT_POST, "verif_mail");
$pseudo = filter_input(INPUT_POST, "user_pseudo");
$mdp = filter_input(INPUT_POST, "user_mdp");
$verifMdp = filter_input(INPUT_POST, "verif_mdp");
$adresse = filter_input(INPUT_POST, "user_adresse");
$id_ville = filter_input(INPUT_POST, "id_ville");


$tel = filter_input(INPUT_POST, "user_tel");

//Tester les saisies
if (
    $nom != null && $prenom != null && $anniv != null && $mail != null && $verifmail != null && $pseudo != null && $mdp != null && $verifMdp != null &&
    $adresse != null && $id_ville != null && $tel != null){
       
    // on verifie le mail et le mot de passe
    if ($mail == $verifmail && $mdp == $verifMdp) {
        try {
            $pdo = seConnecter("../conf/mamzelle.ini");

            $tAttributesValues = array();
            $tAttributesValues['nom'] = $nom;
            $tAttributesValues['prenom'] = $prenom;
            $tAttributesValues['date_de_naissance'] = $anniv;
            $tAttributesValues['adresse'] = $adresse;
            $tAttributesValues['id_ville'] = $id_ville;
            $tAttributesValues['pseudo'] = $pseudo;
            $tAttributesValues['mdp'] = $mdp;
            $tAttributesValues['mail'] = $mail;
            $tAttributesValues['tel'] = $tel;
            $tAttributesValues['date_inscription'] = date("Y-m-d");

            $affected = insert($pdo,$tAttributesValues);
            if ($affected === 1) {
                //$pdo->commit();
                $message = "Bienvenue sur le site, vous avez été correctement enregistré !!!";
            } else {
                //$pdo->rollback();
                $message = "Problème d'insertion, veuillez contacter votre administrateur (Madame Caroline) !!!";
            } /**fin du else */

        } catch (PDOException $e) {
            $affected = $e->getMessage();
        }
    }else {
        
        $message = "Merci de vérifier que votre mail et votre mot de passe sont identiques";
    } /** Fin du if verif mail et mdp */

   /**Fermeture if sur verif de saisies */
} else {
    $message = "Toutes les saisies sont obligatoires";
} /** fin de la fonction insert */
}

$btSelectByCp= filter_input(INPUT_POST,"btSelectByCp");
if($btSelectByCp!=NULL){
$cp = filter_input(INPUT_POST,"user_cp");
$pdo = seConnecter("../conf/mamzelle.ini");
$contenuListe="";
$cursor = selectByCp($pdo ,$cp);
foreach($cursor as $enregistrement){
    $contenuListe .="<option value=$enregistrement[id_ville]>";
    $contenuListe .= $enregistrement["nom_commune"];
    $contenuListe .= "</option>\n";
    
}

}

   
    include '../views/InscriptionView.php';
