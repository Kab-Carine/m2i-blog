<?php
require 'sql/user.sql.php';



if($_SERVER['REQUEST_METHOD']=='POST'){
    //var_dump($_POST); exit;
    $user = loginUser($_POST['email']);
    //var_dump($_user);exit;
    if(password_verify($_POST['password'], $user['password'])){
      session_start();
       $_SESSION['user'] = $user;
       // var_dump($_SESSION); exit;
       //die('OK');
       header('Location: index.php');
       exit;
    }
    //die('NOK');
    header('Location: index.php?page=login');
    exit;
}

$headerTitle= 'Connectez vous';
$layoutImage ='public/clean/assets/img/patisserie.jpg';
require 'template/login.tpl.php';