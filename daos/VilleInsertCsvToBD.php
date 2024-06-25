<?php


//  lecture du fichier
$contents = file_get_contents("../csv/ville.csv");
$message="";


$linesArray = explode("\n",$contents);

$sqlInsert = "INSERT INTO ville(id_ville,code_commune_INSEE,code_postal,latitude,
longitude,nom_commune,code_departement,nom_departement) VALUES(?,?,?,?,?,?,?,?)";

// function insertCSV (PDO $pdo,array $linesArray ) string{

try {
    $message="";
    require_once'../libs/Connexion.php';
    $pdo = seConnecter("../conf/mamzelle.ini");
    $statement = $pdo->prepare($sqlInsert);
    for ($i = 1 ; $i<count($linesArray); $i++){
        $line = $linesArray[$i];
        if(!empty($line)){
            $values = explode(",",$line);
            $statement->bindValue(1,$values[0]);
            $statement->bindValue(2,$values[1]);
            $statement->bindValue(3,$values[2]);
            $statement->bindValue(4,$values[3]);
            $statement->bindValue(5,$values[4]);
            $statement->bindValue(6,$values[5]);
            $statement->bindValue(7,$values[6]);
            $statement->bindValue(8,$values[7]);
            

            $statement->execute();
        }
    }
    $message="transfert réussi!!!";
    
} catch (PDOException $e) {
 
 $message= $e->getTraceAsString();   
}

?>