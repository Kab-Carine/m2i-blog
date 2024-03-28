<?php

//route par defaut
define('DEFAULT_PAGE', "home");

 $layoutTitle = 'Mega Blog';
$layoutImage = 'home-bg.jpg';
$layoutImageDescript='';
$headerSubheading='';
$headerTitle ='';

// config BD mySQL
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'm2i_blog');
$options = array(
  PDO::MYSQL_ATTR_INIT_COMMAND=> "SET NAMES utf8",
  PDO::ATTR_ERRMODE => PDO:: ERRMODE_EXCEPTION,
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
);

//pagination par defaut
define('NB_PAGINATE', 10);

//nom du site
define('SITE_NAME', 'Douceur & Saveur');
define ('SITE_SLOGAN', 'Les meilleurs recette');
