<?php

// declare (strict_type = 1);


// On charge le script de l'objet
require_once'../models/Client.php';

class ClientDAO{

    // On déclare l'attribut
    private PDO $pdo;

    // Déclare le constructeur, il aura une execution auto à l'initialisation de l'objet
    function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }
 
    // Fonction Insert avec l'objet client 
    public function insertClient (Client $client):int {
        $affected = 0;

        try {
            $cmd = $this->pdo->prepare ("INSERT INTO client(nom,prenom,date_de_naissance,id_ville,adresse,pseudo,mdp,mail,tel,date_inscription) VALUES(?,?,?,?,?,?,?,?,?,?)");
        $cmd->bindValue(1, $client->getNom());
        $cmd->bindValue(2, $client->getPrenom());
        $cmd->bindValue(3, $client->getDateDeNaissance());
        $cmd->bindValue(4, $client->getIdVille());
        $cmd->bindValue(5, $client->getAdresse());
        $cmd->bindValue(6, $client->getPseudo());
        $cmd->bindValue(7, $client->getMdp());
        $cmd->bindValue(8, $client->getMail());
        $cmd->bindValue(9, $client->getTel());
        $cmd->bindValue(10, $client->getDateInscription());
        $cmd->execute();
        $affected = $cmd->rowCount();

        
           
        } catch (PDOException $e) {
            $affected = -1;
        }
        return $affected;

    }
     /** 
    * function pour le mot de passe oublié
    * @param $mail
    * @return objet client
     */
    // recherche à partir du mail 
    function selectByMail (string $mail) : client {
       
        // On instancie un nouvelle objet 
        $client = new Client();

        //  requete à partir du mail donc mail unique 
        $sql = "SELECT * FROM client WHERE mail=?";

        try {
           $cursor = $this->pdo->prepare($sql);
           $cursor->bindValue(1,$mail);
           $cursor->execute();
           $record = $cursor->fetch();

        //    on vérifie si on trouve une enregistrement 
           if ($record === FALSE) {
                $client->setIdClient(0);
                $client->setNom("Votre Mail n'est pas dans notre base merci de recommencer");
           } else {
                $client->setIdClient($record["id_client"]);
                $client->setMail($mail);
                $client->setNom("Un mail vient de vous être envoyé !!!");
           }
        } catch (PDOException $e) {
            $client->setIdClient(-1);
            $client->setNom($e->getMessage());

        }
        return $client;

    }
    /**
     * fonction pour mise à jout mot de passe
     * @param objet client
     * @return int 
     */

    public function updateMdpById (Client $client): int {
        $affected = 0;
        try {
         $sql = "UPDATE client SET mdp = ? WHERE id_client= ?";
         $cmd = $this->pdo->prepare($sql);
         $cmd->bindValue(1, $client->getMdp()); 
        $cmd->bindValue(2, $client->getIdClient());
            
         // On exécute la requête
        $cmd->execute();
        $affected = $cmd->rowCount();
        } catch (PDOException $e) {
           $affected = -1;
        }    
        return $affected;
    }


    /**
     * function selectone à partir de la PK
     * @param pk id_client
     * @return le client
     */
    public function SelectOneById ($id_client): client {
        $client = new Client();
        // je recup le client par l'id
        $sql = "SELECT * FROM client WHERE id_client=?";

        try {
            $cursor = $this->pdo->prepare($sql);
            $cursor->bindValue(1,$id_client);
            $cursor->execute();
            $record = $cursor->fetch();
 
         //    on vérifie si on trouve une enregistrement 
            if ($record === FALSE) {
                // 
                 $client->setNom("Pas de client trouvé");
            } else {
                // je récup les infos de la bd et je défini les valeurs de mes attributs 
                 $client->setIdClient($id_client);
                 $client->setNom($record["nom"]);
                 $client->setPrenom($record["prenom"]);
                 $client->setDateDeNaissance($record["date_de_naissance"]);
                 $client->setIdVille($record["id_ville"]);
                 $client->setAdresse($record["adresse"]);
                 $client->setPseudo($record["pseudo"]);
                 $client->setMdp($record["mdp"]);
                 $client->setMail($record["mail"]);
                 $client->setTel($record["tel"]);
                 $client->setPhoto($record["photo"]);
            }
         } catch (PDOException $e) {
             $client->setIdClient(-1);
             $client->setNom($e->getMessage());
 
         }

        //  je retourne le client
        return $client;
    }
    
    function selectByPseudoAndMdp (string $pseudo , string $mdp):client{ 
    $client = new client();

    // on prépare la requete sql que l'on a vérifié au préalable
    $sql = "SELECT * FROM client WHERE pseudo=? AND mdp=?";
    try {
        $cursor= $this->pdo->prepare($sql);
        // on affecte les paramètres
        $cursor->bindValue(1, $pseudo); 
        $cursor->bindValue(2, $mdp);

           
        // On exécute la requête
       $cursor->execute();
       $record = $cursor->fetch();
       if ($record == false){
        $client->setIdClient(0);
       $client->setNom("Authentification refusée"); 
       } else {
        // je récup les infos de la bd et je défini les valeurs de mes attributs 
        $client->setIdClient($record["id_client"]);
        $client->setNom($record["nom"]);
        $client->setPrenom($record["prenom"]);
        $client->setDateDeNaissance($record["date_de_naissance"]);
        $client->setIdVille($record["id_ville"]);
        $client->setAdresse($record["adresse"]);
        $client->setPseudo($pseudo);
        $client->setMdp($mdp);
        $client->setMail($record["mail"]);
        $client->setTel($record["tel"]);
        $client->setPhoto($record["photo"]);
       }
       
    } catch (\Throwable $th) {
        //throw $th;
    }
    
    
    return $client;
    }
      
    
        
       
        
    
    
}
