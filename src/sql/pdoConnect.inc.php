<?php

function pdoConnect(){
  global $options;
  try {
    $dbh = new PDO('mysql:host=' . DB_HOST .';dbname=' . DB_NAME, DB_USER, DB_PASSWORD, $options);
    return $dbh;
   // var_dump($pdo);// pour montrer que ya quelque chose qui s'affuche
} catch (PDOException $e) {
    // tenter de réessayer la connexion après un certain délai, par exemple
    die("Erreur: " . $e->getMessage()) ;// en utilisant die seul l'erreur s'affiche e pas la pagz
}

  
  
}