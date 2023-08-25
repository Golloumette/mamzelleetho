<?php


require_once '../models/Client.php';
require_once 'ClientDAO.php';

try {
    $pdo = new PDO("mysql:host=127.0.0.1;port=3306;dbname=mamzelleetho;","root","");
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $pdo->exec("SET NAMES 'UTF8'");

    // $client = new Client(1,"boucau","caroline","1986-05-21",5,"jules guesde","golloudto","mdp","golloumette59@gmail.com","06.00.00.00.00","2023-05-10","photo");

    // $dao = new ClientDAO($pdo);
    // $affected = $dao->insertObjet($client);

    // if($affected === -1) {
    //     echo "Erreur lors de l'ajout";
    // } else {
    //     echo $affected."enregistrement(s) ajouté(s)";
    // }

//     $client = new Client();
//     $dao = new ClientDAO($pdo);

//     $result = $dao->selectByMail("golloumette59@gmail.com");

//     echo "Id du client : ".$result->getIdClient()."Mail du client : ".$result->getMail()."Nom du client : ".$client->getNom();

// } catch (PDOException $e) {
//     echo $e->getMessage();
// }
    // echo "<hr>TEST FONCTION UDPTATE <hr>";
    // $client = new Client();
    // $client->setMdp("newmdp2");
    // $client->setIdClient(1);
    // $dao = new ClientDAO($pdo);  
    //  $result = $dao->updateMail($client) ;
    // echo " il y a eu $result de modifié";

    echo "<hr> TEST FONCTION SELECTBYPSEUDOANDMDP <hr>";
    $client = new client();
    $pseudo = "Trois";
    $mdp = "trois";
    $dao = new ClientDAO($pdo);
    $client = $dao->selectByPseudoAndMdp($pseudo,$mdp);
    echo "le nom du client".$client->getNom()."l'id du client est : ".$client->getIdClient();
} catch (PDOException $e) {
        echo $e->getMessage();
    }
?>