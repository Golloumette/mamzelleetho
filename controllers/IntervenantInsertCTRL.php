<?php
/* 
 * IntervenantInsertCTRL.php
 */
// On appel la  bibliotèque Connexion
require_once '../libs/Connexion.php';


// On appel les fonctions du DAO
require_once '../daos/IntervenantDAO.php';



$message = "" ;

// Je récupère mes  valeurs de mon formulaire
$nom = filter_input(INPUT_POST,"nom");
$prenom = filter_input(INPUT_POST,"prenom");
$mail = filter_input(INPUT_POST, "mail");
$verifmail = filter_input(INPUT_POST, "verif_mail");
$adresse = filter_input(INPUT_POST, "adresse");
$cp = filter_input(INPUT_POST, "cp");
$ville = filter_input(INPUT_POST, "ville");
$tel = filter_input(INPUT_POST, "tel");
$site = filter_input(INPUT_POST,"site_internet");

//  On vérifie que tous les champs sont saisies
if (
    $nom != null && $prenom != null &&  $mail != null && $verifmail != null &&
    $adresse != null && $cp != null && $ville != null && $tel != null && $site != null){

        // On vérifie les  adresses mails
        if ($mail == $verifmail){
            try {
                $pdo = seConnecter("../conf/mamzelle.ini");

            $tAttributesValues = array();
            $tAttributesValues['nom'] = $nom;
            $tAttributesValues['prenom'] = $prenom;
            $tAttributesValues['tel'] = $tel;
            $tAttributesValues['mail'] = $mail;
            $tAttributesValues['adresse'] = $adresse;
            $tAttributesValues['cp'] = $cp;
            $tAttributesValues['ville'] = $ville;
            $tAttributesValues['site_internet'] = $site;            
            $affected = insert($pdo,$tAttributesValues);
            if ($affected === 1) {
                //$pdo->commit();
                $message = "L'intervenant a bien été ajouté !!!";
            } else {
                //$pdo->rollback();
                $message = "Problème d'insertion, veuillez contacter votre administrateur (Madame Caroline) !!!";
            } /**fin du else */
                //code...
            } catch (PDOException $e) {
                $affected = $e->getMessage();
                
            }


     }else {
        // echo $mail.$verifmail.$mdp.$verifMdp;
        $message = "Votre adresse mail n'est pas identique à la verification , merci de corriger";
    } /** Fin du if verif mail et mdp */

   /**Fermeture if sur verif de saisies */
} else {
    $message = "Toutes les saisies sont obligatoires";
} /** fin de la fonction insert */
     

include '../views/IntervenantInsert.php';
    ?>