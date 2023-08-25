<?php

require_once("./Ville.php");

$ville = new Ville(1,"52300","59510",10,15,"hem","59","nord");

echo "idville :".$ville->getIdVille();
echo "code insee" .$ville->getCodeCommuneInsee().$ville->getCodePostal().$ville->getLatitude().$ville->getLongitude().$ville->getNomCommune().$ville->getNomDepartement().$ville->getCodeDepartement();



?>