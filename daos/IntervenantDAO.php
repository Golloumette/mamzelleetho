<?php


/**
 *
 * @param PDO $pdo
 * @param array $tAttributesValues
 * @return int
 */
function insert(PDO $pdo, array $tAttributesValues): int {
    $affected = 0;
    try {
        $sql = "INSERT INTO intervenant(nom,prenom,tel,mail,adresse,cp,ville,site_internet) VALUES(?,?,?,?,?,?,?,?)";
        $statement = $pdo->prepare($sql);

        $statement->bindValue(1, $tAttributesValues["nom"]);
        $statement->bindValue(2, $tAttributesValues["prenom"]);
        $statement->bindValue(3, $tAttributesValues["tel"]);
        $statement->bindValue(4, $tAttributesValues["mail"]);
        $statement->bindValue(5, $tAttributesValues["adresse"]);
        $statement->bindValue(6, $tAttributesValues["cp"]);
        $statement->bindValue(7, $tAttributesValues["ville"]);
        $statement->bindValue(8, $tAttributesValues["site_internet"]);
        // $statement->bindValue(9, $tAttributesValues["photo"]);
       
       
      

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
        $cursor = $pdo->query("SELECT * FROM intervenant");
        // Renvoie un tableau ordinal de tableaux associatifs
        $list = $cursor->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        $message = array("message" => $e->getMessage());
        $list[] = $message;
    }
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
        $sql = "SELECT * FROM intervenant WHERE id_intervenant = ?";
        $cursor = $pdo->prepare($sql);
        $cursor->bindValue(1, $id);
        $cursor->execute();
        // Renvoie un tableau associatif
        $line = $cursor->fetch(PDO::FETCH_ASSOC);
        if ($line === FALSE) {
            $line["message"] = "Pas d'intervenant enregistré !";
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
        $sql = "DELETE FROM intervenant WHERE id_intervenant = ?";

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
        $sql ="UPDATE intervenant SET nom=?, prenom=?,tel=?,mail=?adresse=?,cp=?,ville=?,site_internet=? WHERE id_intervenant=?";
        
        $statement = $pdo->prepare($sql);
        $statement->bindValue(1, $tAttributesValues["nom"]);
        $statement->bindValue(2, $tAttributesValues["prenom"]);
        $statement->bindValue(3, $tAttributesValues["tel"]);
        $statement->bindValue(4, $tAttributesValues["mail"]);
        $statement->bindValue(5, $tAttributesValues["adresse"]);
        $statement->bindValue(6, $tAttributesValues["cp"]);
        $statement->bindValue(7, $tAttributesValues["ville"]);
        $statement->bindValue(8, $tAttributesValues["site_internet"]);
        $statement ->bindValue(10,$id);
        $statement ->execute(); 

        $affected = $statement ->rowcount();

    
        } catch (Exception $e) {
         echo $e->getTraceAsString();
         $affected = -1;
        }


            return $affected;


         } /** fin de fonction update**/


?>