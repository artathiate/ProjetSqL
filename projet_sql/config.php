<?php
try {
  $dbName = 'exerice_sql';
  $host = 'localhost';
  $utilisateur = 'root';
  $motDePasse = '';
  $port='3306';
  $dns = 'mysql:host='.$host .';dbname='.$dbName.';port='.$port;
  $connexion = new PDO( $dns, $utilisateur, $motDePasse );
} catch ( Exception $e ) {
  echo "Connection à la BDD impossible : ", $e->getMessage();
  die();
}
?>