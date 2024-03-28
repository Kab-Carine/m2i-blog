<?php

//fonction pour definir un message flash
function set_flash_message($key, $message, $type='succes'){
  $_SESSION[$key] = array(
    'message' => $message,
    'type' => $type
  );
}

//fonction pour recuperer et afficher un message flash sous forme d'alerte bootstrap
function get_flash_message($key){
  if(isset($_SESSION[$key])){
    $message = $_SESSION[$key]['message'];
    $type = $_SESSION[$key]['type'];
   // Supprime le message flash après l'avoir récupéré
   unset ($_SESSION[$key]);
   return '<div class="alert alert-' . $type . ' alert-dismissible fade show" role="alert">'
    . $message . '</div>';
  }
  return '';
  }



