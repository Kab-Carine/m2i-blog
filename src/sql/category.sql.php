<?php

function getAllCategories(){
  global $pdo;

  try{
    $query =
    'SELECT id, name
   FROM categories
   ORDER BY name DESC';

   $cursor = $pdo->query($query);
   $categories = $cursor->fetchAll();
   return $categories;
  } 
  catch (PDOException $e) {
  die("Erreur: " . $e->getMessage()) ;// en utilisant die seul l'erreur s'affiche e pas la pagz
}

}