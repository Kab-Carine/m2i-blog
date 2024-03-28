<?php

function getAllPosts(){
  global $pdo;

  try{
    $query ='SELECT image, updatedAt, title, A.slug AS postSlug, LEFT(A.content, 150) AS content,
    name, B.slug AS categorySlug, lastName, firstName, COUNT(D.id) AS nbComments
   FROM posts A
   INNER JOIN categories B ON A.id_categories = B.id
   INNER JOIN users C ON id_users = C.id
   LEFT JOIN comments D ON D.id_posts = A.id
   WHERE active = TRUE
   GROUP BY A.id
   ORDER BY updatedAt DESC
   LIMIT 10';
   $cursor = $pdo->query($query);
   $posts = $cursor->fetchAll();
   return $posts;
  } 
  catch (PDOException $e) {
  die("Erreur: " . $e->getMessage()) ;// en utilisant die seul l'erreur s'affiche e pas la pagz
}

}

function getOnePost($slug){
  global $pdo;

  try{
    $query = "SELECT A.id, A.slug as postSlug, image, createdAt, updatedAt, title, A.content, name, B.slug, lastName, firstName, email
    FROM posts A
    INNER JOIN categories B ON A.id_categories = B.id
    INNER JOIN users C ON id_users = C.id
    WHERE active = TRUE
        AND A.slug = :slug";
        $cursor = $pdo->prepare($query);
        $cursor->bindValue(':slug', $slug, PDO::PARAM_STR);
        $cursor->execute();
        $post = $cursor->fetch();
        return $post;
  } 
  catch (PDOException $e) {
  die("Erreur: " . $e->getMessage()) ;// en utilisant die seul l'erreur s'affiche e pas la pagz
}

  
}


function addPost($post, $today, $slug, $id_users){
  global $pdo;

  try {
$query = 
      "INSERT into posts
           (title, content, createdAt ,updatedAT , image, active, slug, id_users,id_categories)
      VALUES
           (:title, :content, '$today','$today', :image, FALSE, :slug, $id_users, :id_categories)";
      
       $cursor = $pdo->prepare($query);
       $cursor->bindParam(':title', $post['title'], PDO::PARAM_STR);
       $cursor->bindParam(':content', $post['content'], PDO::PARAM_STR);
       $cursor->bindParam(':image', $post['image'], PDO::PARAM_STR);
       $cursor->bindParam(':slug', $slug, PDO::PARAM_STR);
       $cursor->bindParam(':id_categories', $post['id_categories'], PDO::PARAM_INT);
       $cursor->execute();

       return TRUE;
  } catch (PDOException $e) {
    die("Erreur: " . $e->getMessage()) ;// en utilisant die seul l'erreur s'affiche e pas la pagz
  }

}