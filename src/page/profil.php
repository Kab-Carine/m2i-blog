<?php
require 'sql/user.sql.php';

//isGranted();
granted();

if(!isset($_SESSION['user'])){
  set_flash_message('blog', 'Page protégée!','danger');
  //on redirige vers la page profil
  header('Location: index.php?page=login');
  exit;
}

if ($_SERVER['REQUEST_METHOD']=='POST'){
    // on update le user dans la BD avec les infos du form
    $user = updateUser($_POST);
   // on met a jour les donées dans la session
   $_SESSION['user']['firstName'] = $_POST['firstName'];
   $_SESSION['user']['lastName'] = $_POST['lastName'];
   $_SESSION['user']['phone'] = $_POST['phone'];

   set_flash_message('blog', 'Votre profil a été mis à jour !','success');
   //on redirige vers la page profil
   header('Location: index.php?page=login');
   exit;
}

$headerTitle= 'Mon Profil';
// on retrouve dans la BD  le user qui est dans session
$user =getOneUser($_SESSION['user']['id']);

$layoutImage ='public/clean/assets/img/patisserie.jpg';
// on affiche les données du user dans un form
require 'template/profil.tpl.php';
