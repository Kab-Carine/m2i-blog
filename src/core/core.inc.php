<?php

function granted(){
    if(!isset($_SESSION['user'])){
       set_flash_message('blog', 'Page protégée!','danger');
       //on redirige vers la page profil
       header('Location: index.php?page=login');
       exit;
    }

}

function isGranted(){
     if(isset($_SESSION['user'])){
      return TRUE;
     }
}