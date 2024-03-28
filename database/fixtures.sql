/*!40101 SET NAMES utf8*/;

 INSERT into users
  (lastName, firstName,email,phone , password, role)
 VALUES
 ('Some','Rose','someros@gmail.com','326985121','$2y$10$2EC0ujpDiSPQVXNmAIgGcedPhALsCT5IDSk8zSqMlzN85Le7XyF0O','Role_Moder'),
 ('Roland','Yapo','yaporo@gmail.com','65649714','$2y$10$2EC0ujpDiSPQVXNmAIgGcedPhALsCT5IDSk8zSqMlzN85Le7XyF0O','Role_Moder'),
 ('kame','Anan','anan@gmail.com','71938232','$2y$10$2EC0ujpDiSPQVXNmAIgGcedPhALsCT5IDSk8zSqMlzN85Le7XyF0O','Role_Moder');


 INSERT into categories
     (name, slug, id_categories)
 VALUES
     ('Patisserie','Patisserie',NULL),
     ('cakematcha','cakematcha',1),
     ('LayerCake','LayerCake',1),
     ('Boisson','Boisson',NULL),
     ('Mojito','Mojito',4);

     INSERT into posts
        (title, slug, content, createdAt, updatedAt, image, active, id_users, id_categories)
        VALUES
         ("Un coeur coulant au matcha dans un fondant au chocolat",
        "Un cœur coulant au matcha dans un fondant au chocolat",
        'Préparez les cœurs au matcha. Faites fondre ensemble le chocolat et
          le beurre en morceaux au micro-ondes ou au bain-marie. Incorporez
           le thé, mélangez et répartissez dans 6 bacs à glaçons. Réservez cette ganache au congélateur.',
         '2018-07-01','2019-02-18',
          'https://th.bing.com/th/id/OIP.Fh-u2wO8Cx7OCN3o0AEkwAHaLH?w=182&h=273&c=7&r=0&o=5&dpr=1.3&pid=1.7',
       TRUE,1, 1),
         ('LAYER CAKE AU FRUIT DE LA PASSION ET AU CHOCOLAT ',
         'LAYER CAKE AU FRUIT DE LA PASSION ET AU CHOCOLAT',
         'Ce gâteau monumental à étages de la famille des « layer cake »
          se compose de différentes couches de gâteau superposées et unies
          entre elles avec de la crème ou de la ganache. Le tout est généreusement
            recouvert de glaçage. Pour y arriver at home, il suffit de préparer au choix
            une basique pâte de gâteau au yaourt, de quatre-quarts ou de génoise. On pense
              évidemment à doubler les doses d’un gâteau standard pour disposer de suffisamment de pâte.',
          '2020-07-01','2021-10-31',
          'https://th.bing.com/th/id/OIP.6sts3v9nk3I0kyCv0RVOpwHaHa?w=182&h=181&c=7&r=0&o=5&dpr=1.3&pid=1.7',
         TRUE,2, 1),
         ('Une idée simple et facile pour un apéro fait-maison',
         'Une idée simple et facile pour un apéro fait-maison',
         "Moment convivial par excellence, l'apéritif est surtout l'occasion de partager
          avec ses convives tout en dégustant et picorants de bonnes petits choses.
           Il y a les grands classiques comme les chips, de pommes de terre ou de légumes,
            les dips et tartinades comme le houmous ou la tapenade, les petits beignets,
             accras de morue, empanadas, sans oublier les cocktails et autres boissons pour
              trinquer. La preuve en recettes ",
         '2011-07-01','2015-02-18',
         'https://th.bing.com/th/id/OIP.G3Cv8icZrYEWyCYRpAj9KAHaLH?w=182&h=273&c=7&r=0&o=5&dpr=1.3&pid=1.7',
        TRUE, 3, 4); 
            
            INSERT into comments
            (content, createdAt, id_users, id_posts)
            VALUES
            ('Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
Adipisci pariatur iusto rem dignissimos! Omnis magni cumque
 excepturi officiis eveniet dolores reiciendis qui dolorum fuga
  sint odit architecto, quibusdam eos pariatur!','2020-10-10',1 ,1),
  ('Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
Adipisci pariatur iusto rem dignissimos! Omnis magni cumque
 excepturi officiis eveniet dolores reiciendis qui dolorum fuga
  sint odit architecto, quibusdam eos pariatur!','2021-12-10',3 ,2),
  ('Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
Adipisci pariatur iusto rem dignissimos! Omnis magni cumque
 excepturi officiis eveniet dolores reiciendis qui dolorum fuga
  sint odit architecto, quibusdam eos pariatur!','2020-10-10',2 ,1);
 

   INSERT into tags
   (name, slug)
 VALUES
   ('bijoux','bijoux'),
   ('or','or'),
   ('Argent','Argent');
        
       INSERT into define
       ( id ,id_tags)
       VALUES
       (1,3),(2,1),(3,2);

       
        

