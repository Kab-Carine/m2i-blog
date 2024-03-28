<?php 
//initialisation de la session
session_start();

//chargement des paramettre du site
require 'config/param.inc.php';

//connexion BD
require 'sql/pdoConnect.inc.php';
$pdo = pdoConnect();

//chargement des librairies
require 'config/lib/pluralize.lib.php';
require 'config/lib/flash.lib.php';
require 'core/core.inc.php';
require 'template/addpost.tpl.php';

$page =DEFAULT_PAGE;

if(isset($_GET['page'])){
  $page = $_GET['page'];
}

$url = "page/$page.php";

if(file_exists($url)){
  require $url;
}else{
  echo "404 File not found !!!";
}

echo "<h2>Debug session</h2>";
var_dump($_SESSION);

