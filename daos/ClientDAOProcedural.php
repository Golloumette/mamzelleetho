<?php

// declare (strict_type = 1);



// class ClientDAO{

//     // On déclare l'attribut
//     private PDO $pdo;

//     // Déclare le constructeur, il aura une execution auto à l'initialisation de l'objet
//     function __construct(PDO $pdo){
//         $this->pdo = $pdo;
//     }
 


//     // Fonction Insert avec l'objet client
//     public function insertObjet (Client $client):int {
//         $affected = 0;

//         try {
//             $cmd = $this->pdo->prepare ("INSERT INTO client(nom,prenom,date_de_naissance,id_ville,adresse,pseudo,mdp,mail,tel,date_inscription) VALUES(?,?,?,?,?,?,?,?,?,?)");
//             $cmd->bindValue(1, $client->getNom());
//         $cmd->bindValue(2, $client->getPrenom());
//         $cmd->bindValue(3, $client->getDateDeNaissance());
//         $cmd->bindValue(4, $client->getIdVille());
//         $cmd->bindValue(5, $client->getAdresse());
//         $cmd->bindValue(6, $client->getPseudo());
//         $cmd->bindValue(7, $client->getMdp());
//         $cmd->bindValue(8, $client->getMail());
//         $cmd->bindValue(9, $client->getTel());
//         $cmd->bindValue(10, $client->getDateInscription());

//         $cmd->execute();

//         $affected = $cmd->rowCount();
//             //code...
//         } catch (PDOException $e) {
//             $affected = -1;
//             //throw $th;
//         }
//         return $affected;

//     }

// }

/**
 *
 * @param PDO $pdo
 * @param array $tAttributesValues
 * @return int
 */
  function insert(PDO $pdo, array $tAttributesValues): int {
    $affected = 0;
    try {
        $sql = "INSERT INTO client(nom,prenom,date_de_naissance,id_ville,adresse,pseudo,mdp,mail,tel,date_inscription) VALUES(?,?,?,?,?,?,?,?,?,?)";
        $statement = $pdo->prepare($sql);

        $statement->bindValue(1, $tAttributesValues["nom"]);
        $statement->bindValue(2, $tAttributesValues["prenom"]);
        $statement->bindValue(3, $tAttributesValues["date_de_naissance"]);
        $statement->bindValue(4, $tAttributesValues["id_ville"]);
        $statement->bindValue(5, $tAttributesValues["adresse"]);
        $statement->bindValue(6, $tAttributesValues["pseudo"]);
        $statement->bindValue(7, $tAttributesValues["mdp"]);
        $statement->bindValue(8, $tAttributesValues["mail"]);
        $statement->bindValue(9, $tAttributesValues["tel"]);
        $statement->bindValue(10, $tAttributesValues["date_inscription"]);
        

        $statement->execute();
        $affected = $statement->rowcount();
    } catch (PDOException $e) {
        echo $e->getMessage(); 
        $affected = -1;
    }
    return $affected;
} /**FIN DE FONCTION INSERT **/

/**
 *
 * @param PDO $pdo
 * @return array
 */
function selectAll(PDO $pdo): array {
    /*
     * Renvoie un tableau ordinal de tableaux associatifs
     */
    $list = array();
    try {
        $sql=" SELECT * FROM client c JOIN ville v ON c.id_ville = v.id_ville" ;
        $cursor = $pdo->query($sql);
        // nouvelle requete avec jointure
       
        // Renvoie un tableau ordinal de tableaux associatifs
    $list = $cursor->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        $message = array("message" => $e->getMessage());
        $list[] = $message;
    }
    // tableau en 2D
    return $list;
} /**FIN DE FONCTION SELECT ALL **/

/**
 *
 * @param PDO $pdo
 * @param int $id
 * @return array
 */
function selectOne(PDO $pdo, int $id): array {
    /*
     * Renvoie un tableau associatif
     */
    try {
        $sql = "SELECT * FROM client c JOIN ville v ON c.id_ville = v.id_ville WHERE id_client = ?";
        $cursor = $pdo->prepare($sql);
        $cursor->bindValue(1, $id);
        $cursor->execute();
        // Renvoie un tableau associatif
        $line = $cursor->fetch(PDO::FETCH_ASSOC);
        if ($line === FALSE) {
            $line["message"] = "Enregistrement inexistant !";
        }
        $cursor->closeCursor();
    } catch (PDOException $e) {
        //$line["Error"] = $e->getMessage();
        $line["Error"] = "Une erreur s'est produite, veuillez téléphoner à votre administrateur de BD, madame Caroline !!!";
    }
    return $line;
} /** FIN DE FONCTION SELECT ONE */

/**
 *
 * @param PDO $pdo
 * @param int $id
 * @return int
 */
function delete(PDO $pdo, int $id): int {
    $affected = 0;
    try {
        $sql = "DELETE FROM client WHERE id_client = ?";

        $statement = $pdo->prepare($sql);
        $statement->bindValue(1, $id);
        $statement->execute();

        $affected = $statement->rowcount();
    } catch (PDOException $e) {
        $affected = -1;
    }
    return $affected;
} /** FIN  DE FONCTION DELETE */


function update(PDO $pdo,string $id,array $tAttributesValues ): int {
    $affected=0;
    try {
        $sql ="UPDATE client SET nom=?, prenom=?,date_de_naissance=?,adresse=?,cp=?,ville=?,pseudo=?,mdp=?,mail=?,tel=? WHERE id_client=?";
        
        $statement = $pdo->prepare($sql);
        $statement ->bindValue (1,$tAttributesValues["nom"]);
        $statement ->bindValue(2,$tAttributesValues["prenom"]);
        $statement ->bindValue (3,$tAttributesValues["date_de_naissance"]);
        $statement ->bindValue(4,$tAttributesValues["adresse"]);
        $statement ->bindValue (5,$tAttributesValues["cp"]);
        $statement ->bindValue(6,$tAttributesValues["ville"]);
        $statement ->bindValue (7,$tAttributesValues["pseudo"]);
        $statement ->bindValue(8,$tAttributesValues["mdp"]);
        $statement ->bindValue (9,$tAttributesValues["mail"]);
        $statement ->bindValue(10,$tAttributesValues["tel"]);
        $statement ->bindValue(11,$id);
        $statement ->execute(); 

        $affected = $statement ->rowcount();

    
        } catch (Exception $e) {
         echo $e->getTraceAsString();
         $affected = -1;
        }


            return $affected;


         } /** fin de fonction update**/


        // fonction avec 3 paramètres et return un int
function selectPseudoAndMdp (PDO $pdo,string $pseudo, string $mdp) :int {
    //    on déclare une variable locale de type entier qui va servir pour le retour de la fonction
        $count = 0;
        // on déclare une variable locale pour stocké la requête SQL
        $sql ="SELECT COUNT(*) FROM client WHERE pseudo=? AND mdp=?";
            // Variable pour compiler (->binaire)
            $cursor = $pdo->prepare($sql);
            // Valorise le paramètre (donc le 1e ?)
            $cursor->bindValue(1, $pseudo);
            $cursor->bindValue(2, $mdp);
            // execute
            $cursor->execute();
            // Lit l'enregistrement à partir du curseur vers une nouvelle variable
            $record = $cursor->fetch();
           
            // On attribut à count la 1e case du tableau (colonne)
            $count = $record[0];        
        //  renvoie la valeur de count (0 ou 1)
        return $count;
    }


?>