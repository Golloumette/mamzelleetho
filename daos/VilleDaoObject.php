<?php
// on lie le model ville
require_once '../models/Ville.php';
class VilleDAO
{
    // On déclare l'attribut
    private PDO $pdo;
    // Déclare le constructeur, il aura une execution auto à l'initialisation de l'objet
    function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    function listeByCp(string $cp): array
    {
        $tObjetVilles = array();
        $sql = "SELECT id_ville,nom_commune FROM ville WHERE code_postal = ?";
        try {
            $cursor = $this->pdo->prepare($sql);
            $cursor->bindValue(1, $cp);
            $cursor->execute();
            $tObjetVilles =$cursor->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            $ville = new ville;
            $ville->setIdVille(-1);
            $tObjetVilles[] = $ville;
        }

        return $tObjetVilles;
    }
}
