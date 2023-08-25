<?php

$telephone="01-01-01-01-01";
$motif="/^0[1-9](- [0-9]{2}){4}$/";

  echo "<br> $telephone ?ok " .  preg_match($motif,$telephone);
echo "<br>Téléphone OK ? ", preg_match("/^0[1-9]( {4}- [0-9]{2}) $/", "06-45-45-45-11");

// Ca commence par un 0 
// ensuite il y a un chiffre de 1 à 9 
// enfin il y a 4 fois - et 2 chiffres

$motif = "/^0[1-9]( {4}- [0-9]{2}) $/";
$test="06-45-55-55-55";



?>