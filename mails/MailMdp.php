<?php
// envoie_mail_1.php
ini_set("SMTP","smtp.orange.fr");
ini_set("smtp_port","25");
//ini_set("sendmail_from","emetteur@fournisseur.fr"); // --- Remplace le FROM dans les entêtes

$destinataire = "golloumette59@gmail.com";
// --- utf8_decode() : UTF8 vers ISO 8859-1
$objet = utf8_decode("Envoi de texte brut à partir de PHP");
$message = "ça réussit !!!";

$entetes = "Content-Type: text/plain; charset=UTF-8\r\n";
// $entetes .= "Cc: copie@laposte.net\r\n";
$entetes .= "From: caroline.boucau59@gmail.fr\r\n";

$bOk = mail($destinataire, $objet, $message, $entetes);
if($bOk) {
    echo "Mail 1 envoy&eacute; avec succ&egrave;s";
}
else {
    echo "Erreur d'envoi du Mail 1";
}
?>