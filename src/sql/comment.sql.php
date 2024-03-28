<?php

function getcommentByPost($id){
  global $pdo;

  try{
    $query = "SELECT A.id as id, firstName, lastName, content, createdAt 
    from comments A
    INNER JOIN users B on A.id_users = B.id
    where A.id_posts = $id
    ORDER by createdAt DESC";
    $cursor = $pdo->query($query);
   $comments = $cursor->fetchAll();
   return $comments;
  } 
  catch (PDOException $e) {
  die("Erreur: " . $e->getMessage()) ;// en utilisant die seul l'erreur s'affiche e pas la pagz
}

}

function addComment($idUser, $idPost, $comments, $createdAt){
  global $pdo;
  try {
    $query = 
    "INSERT into comments
         (content, createdAt, id_users, id_posts)
    VALUES
         (:content, :createdAt, :id_users, :id_posts)";
     $cursor = $pdo->prepare($query);
     $cursor->bindParam(':content', $comments, PDO::PARAM_STR);
     $cursor->bindParam(':createdAt', $createdAt, PDO::PARAM_STR);
     $cursor->bindParam(':id_users', $idUser, PDO::PARAM_INT);
     $cursor->bindParam(':id_posts', $idPost, PDO::PARAM_INT);
     $cursor->execute();
     return TRUE;
} catch (PDOException $e) {
 die("Erreur: " . $e->getMessage()) ;// en utilisant die seul l'erreur s'affiche e pas la pagz
  return FALSE;
}

}