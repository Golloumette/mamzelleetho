<?php
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, X-Requested-With");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

/* 
 * InscriptionAddCTRL.php
 */
// On appel la  bibliotèque Connexion
require_once '../libs/Connexion.php';
// On appel les fonctions du DAO
require_once '../daos/VilleDaoObject.php';
$pdo = seConnecter("../conf/mamzelle.ini");



$cp= filter_input(INPUT_GET,"cp");
// echo $cp;
// echo "<br>CTRL3";
if($cp!=NULL){
// je crée une nouvelle classe du DAO(VilleDaoObject) et je lui transmet l'objet pdo
$dao = new VilleDAO($pdo);

// echo "<br>CTRL4";
//  $enregistrements = $liste->listeByCp($cp);
  $liste = $dao->listeByCp($cp);
  //  var_dump($liste);
  echo json_encode($liste);
//   echo "<br>CTRL6";
//  foreach($enregistrement as $refVille){
//      $contenuListe .="<option value=".$refVille->getIdVille().">";
//     $contenuListe .= $enregistrement[$refVille->getNomCommune()];
//     $contenuListe .= "</option>\n";
    
// }

 }

//  include '../views/InscriptionView.php'

?>