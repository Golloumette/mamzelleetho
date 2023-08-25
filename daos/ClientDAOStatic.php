<?php

class ClientDAOStatic {



    public static function selectAll(PDO $pdo): array {
        
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
    }




?>