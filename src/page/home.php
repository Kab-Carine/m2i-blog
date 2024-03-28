<?php 

$layoutTitle ='Page Accueil';
$layoutImage ='public/clean/assets/img/image11.jpg';

$layoutDescription ='Mon super blog de cake';
$headerTitle = SITE_NAME;
$headerSubheading= SITE_SLOGAN;


require 'sql/post.sql.php';
$posts = getAllPosts();
//var_dump ($posts);exit;
echo'</pre>';
//var_dump($posts);
echo'</pre>';

require 'template/index.tpl.php';


