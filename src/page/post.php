<?php 

require 'sql/comment.sql.php';
if (!isset($_GET['slug'])){
    die('Paramètre slug absent !');
}

$layoutImage ='public/clean/assets/img/post-bg.jpg';
require 'sql/post.sql.php';
$post = getOnePost($_GET['slug']);
//var_dump ($post);exit;
///si je trouve un article alors j'affiche


if($post !== false){
  if($_SERVER['REQUEST_METHOD'] == "POST"){
    $today = date("Y-m-d H:i:s"); 
      $isInserted = addComment($_SESSION['user']['id'], $post['id'] , $_POST['comment'], $today);
      if($isInserted){
        set_flash_message('blog', 'Merci pour votre commentaire','success');
      } else {
        set_flash_message('blog', 'Probleme technique','danger');
      }
     
      header('Location: index.php?page=post&slug='.$post['postSlug']);
    exit;
  }
    

    $comments= getcommentByPost($post['id']);
    // var_dump($comment); exit;
    $layoutImage = $post['image'];
    $headerTitle = SITE_NAME;
    $headerSubheading =$post['title'];
    //$headerSubheading = "Redigé le " . $post['createdAt'] ." " . "par" . " ". $post['lastName'] . " " . $post['firstName'] ;
  
    require 'template/post.tpl.php';

}else{ //sinon message d'erreur
  // die('404: Article introuvable');
} 

