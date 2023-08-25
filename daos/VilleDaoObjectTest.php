<?php

require_once '../models/Ville.php';
require_once '../daos/VilleDaoObject.php';

try {
    $pdo = new PDO("mysql:host=127.0.0.1;port=3306;dbname=mamzelleetho;", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("SET NAMES 'UTF8'");


    // je crée un nouvelle objet ville
    $ville = new Ville();
    $contenu = "";
    // je crée une nouvelle classe du DAO(VilleDaoObject) et je lui transmet l'objet pdo
    $liste = new VilleDao($pdo);
    // je crée la variable à passer en argument 
    $cp = "59510";
    $enregistrements = $liste->listeByCp($cp);
    foreach ($enregistrements as $object)
        echo "id de la ville" . $object->getIdVille() .
            "le nom de la ville est : " . $object->getNomCommune() . "<br>";
} catch (PDOException $e) {
    echo $e->getMessage();
}
