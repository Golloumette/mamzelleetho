<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<?php


require_once '../models/Client.php';
require_once '../daos/ClientDAO.php';
require_once '../daos/Connexion.php';

$btValider = filter_input(INPUT_POST, "btValider");
$cnx = new Connexion();
$pdo = $cnx->seConnecter("../conf/mamzelle.ini");
$canal=fopen("logs.log","a+");


if ($btValider != null) {
fwrite($canal,"btValider!=null\n");

    try {
        $client = new Client();
        $dao = new ClientDAO($pdo);
        $mail = filter_input(INPUT_POST, "user_mail");
        $result = $dao->selectByMail($mail);
        if ($result != null) {
            // fwrite($canal,"entre dans IF RESULT et valeur mail: $mail\n");
           
            // valeur serveur smtp
            ini_set("SMTP", "smtp-gollou.alwaysdata.net");
            ini_set("sendmail_from", "caroline.boucau59@gmail.com");
            $id_client=$result->getIdClient(); 
            // destinaire et forme du mail
           
            $objet = "Votre demande : Mot de passe oublié";
            $texte = "Merci de cliquer sur le lien <a href='https://gollou.alwaysdata.net/ProjetMamzelleOuiOui/controllers/UpdatePassword.php?id_client=$id_client&mail=$mail'>cliquez-ici</a>";
            $entetes = "Content-Type: text/html; charset=UTF-8\r\n";
            $entetes .= 'Content-Transfer-Encoding: 8bit' . "\n";
            $message = "";
            $bOk = mail($mail, $objet, $texte, $entetes);
            if ($bOk) {
               
                $message = "Mail 1 envoy&eacute; avec succ&egrave;s";
            } else {
                $message = "Erreur d'envoi du mail 1";
            }
        }
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

}
fclose($canal);
include '../views/MotDePasseOublieView.php';
?>
</body>
</html>