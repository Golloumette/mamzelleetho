
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
        $sql = "INSERT INTO ville(code_commune_INSEE,code_postal,latitude,
        longitude,nom_commune,code_departement,nom_departement) VALUES(?,?,?,?,?,?,?)";

        $statement = $pdo->prepare($sql);

        $statement->bindValue(1, $tAttributesValues["code_commune_INSEE"]);
        $statement->bindValue(2, $tAttributesValues["code_postal"]);
        $statement->bindValue(3, $tAttributesValues["latitude"]);
        $statement->bindValue(4, $tAttributesValues["longitude"]);
        $statement->bindValue(5, $tAttributesValues["nom_commune"]);
        $statement->bindValue(6, $tAttributesValues["code_departement"]);
        $statement->bindValue(7, $tAttributesValues["nom_departement"]);



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
    $list = array();
    try {
        $sql="SELECT * FROM ville" ;
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
        $sql = "SELECT * FROM ville WHERE id_ville = ?";
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
        $sql = "DELETE FROM ville WHERE id_ville = ?";

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
        $sql ="UPDATE ville SET code_commune_INSEE=?,code_postal=?,latitude=?,
        longitude=?,nom_commune=?,code_departement=?,nom_departement=? WHERE id_ville=?";

        $statement = $pdo->prepare($sql);
        $statement->bindValue(1, $tAttributesValues["code_commune_INSEE"]);
        $statement->bindValue(2, $tAttributesValues["code_postal"]);
        $statement->bindValue(3, $tAttributesValues["latitude"]);
        $statement->bindValue(4, $tAttributesValues["longitude"]);
        $statement->bindValue(5, $tAttributesValues["nom_commune"]);
        $statement->bindValue(6, $tAttributesValues["code_departement"]);
        $statement->bindValue(7, $tAttributesValues["nom_departement"]);
        $statement ->bindValue(8,$id);
        $statement ->execute();
        $affected = $statement ->rowcount();
        } catch (Exception $e) {
         echo $e->getTraceAsString();
         $affected = -1;
        }
            return $affected;
         } /** fin de fonction update**/
?>
