<?php
require 'sql/user.sql.php';

if ($_SERVER['REQUEST_METHOD']=='POST'){
    $hashpassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $_POST['password'] = $hashpassword;
   // var_dump($_POST); exit;
    $isRegistered = registerUser($_POST);
    if($isRegistered){
        set_flash_message('blog', 'Inscription réussie','success'); 
    } else{
        set_flash_message('blog', 'Inscription échouée','danger');
    }
   
    header('Location: index.php');
    exit;
    
}

$headerTitle= 'Inscrivez vous';
$layoutImage ='public/clean/assets/img/patisserie.jpg';
require 'template/register.tpl.php';