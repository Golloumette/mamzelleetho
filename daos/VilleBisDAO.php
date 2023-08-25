<?php


header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, X-Requested-With");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");


//  lecture du fichier
// $contents = file_get_contents("../csv/ville.csv");
// $message="";


// $linesArray = explode("\n",$contents);

// $sqlInsert = "INSERT INTO ville(code_commune_INSEE,code_postal,latitude,
// longitude,nom_commune,code_departement,nom_departement) VALUES(?,?,?,?,?,?,?)";

// // function insertCSV (PDO $pdo,array $linesArray ) string{

// try {
//     $message="";
//     require_once'../libs/Connexion.php';
//     $pdo = seConnecter("../conf/mamzelle.ini");
//     $statement = $pdo->prepare($sqlInsert);
//     for ($i = 1 ; $i<count($linesArray); $i++){
//         $line = $linesArray[$i];
//         if(!empty($line)){
//             $values = explode("," ,$line);
//             $statement->bindValue(1,$values[1]);
//             $statement->bindValue(2,$values[2]);
//             $statement->bindValue(3,$values[3]);
//             $statement->bindValue(4,$values[4]);
//             $statement->bindValue(5,$values[5]);
//             $statement->bindValue(6,$values[6]);
//             $statement->bindValue(7,$values[7]);

//             $statement->execute();
//         }
//     }
//     $message="transfert réussi!!!";
    
// } catch (PDOException $e) {
 
//  $message= $e->getTraceAsString();   //throw $th;
// }

/**
 *
 * @param PDO $pdo
 * @param string $CP
 * @return array
 */
function selectByCp(PDO $pdo,string $cp): array {
    /*
     * Renvoie un tableau ordinal de tableaux associatifs
     */
    $list = array();
    try {
        $sql="SELECT id_ville,nom_commune FROM ville WHERE code_postal = ?" ;
        $cursor = $pdo->prepare($sql);
        $cursor ->bindValue(1,$cp);
        $cursor->execute();   
        // Renvoie un tableau associatifs
    $list = $cursor->fetchAll(PDO::FETCH_ASSOC);
  
    } catch (PDOException $e) {
       
        $message = array("message" => $e->getMessage());
        $list[] = $message;
    }
    // tableau en 2D
    return $list;
    // echo json_encode($list);
} /**FIN DE FONCTION SELECT ALL **/




?>