<?php

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
     $sql=" SELECT * FROM prestation" ;
        $cursor = $pdo->query($sql);     
    $list = $cursor->fetchAll();
    } catch (PDOException $e) {
        $message = array("message" => $e->getMessage());
        $list[] = $message;
    }
    // tableau en 2D
    return $list;
} /**FIN DE FONCTION SELECT ALL **/


?>