<?php

require_once("Client.php");

$client = new Client(1,"boucau","caroline","21/05/1986",5,"jules guesde","gollou","mdp","mail@gmail.com","06.00.00.00.00","09/05/2023","photo");

echo "id client".$client->getIdClient()."<br>";
echo "nom client ".$client ->getNom()."<br>";
echo "prenom client ".$client->getPrenom()."<br>";
echo "date de naissance".$client->getDateDeNaissance()."<br>";
echo "id de la ville".$client->getIdVille()."<br>";
echo "adresse du client ".$client->getAdresse()."<br>";
echo "pseudo du client ".$client->getPseudo()."<br>";
echo "mot de passe ".$client->getMdp()."<br>";
echo "adresse mail ".$client->getMail()."<br>";
echo "numero de tel du client ".$client->getTel()."<br>";
echo "date d'inscription ".$client->getDateInscription()."<br>";
echo "votre photo ".$client->getPhoto()."<br>";



?>