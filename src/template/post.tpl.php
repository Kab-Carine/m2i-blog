<?php require 'template/partials/header.inc.php';?>
        <!-- Post Content-->
        <article class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <!--Affichage de l'article -->
                    <?= $post['content'] ?> 

                    <!--Affichage des commentaires -->
                    <?php if(!empty($comments)){?>
                        <h3>Les commentaires :</h3>
                    <?php foreach($comments as $comment){ ?>
                        <ul class="list-group">
                        <li class="list-group-item">
                        <?= "Le " .$comment['createdAt'].
                        $comment['firstName']." ".$comment['lastName']." à ecrit : <br>".
                        $comment['content']?>
                    </li>
                    </ul>
                    <?php   } ?>
                    <?php   } ?>

                    <?php if(isGranted()) :  ?>
                       <!--saisie de commentaires -->
                       <h2>Ecrire un commentaire </h2>
                        <div class="my-5">
                           
                            <form id="contactForm" action ="index.php?page=post&slug=<?= $_GET['slug'] ?>" method="POST" >
                                <div class="form-floating">
                                  <textarea name="comment" input class="form-control" id="" 
                                   cols="30" rows="10" ></textarea>
                                   
                                </div>
                                <br>
                              
                                <!-- Submit Button-->
                                <button class="btn btn-primary text-uppercase" 
                                id="submitButton" type="submit">Enregistrer</button>
                            </form > 
                        </div>
                    <?php   endif; ?>
                    
                </div>
            </div>
        </article>
        <?php require 'template/partials/footer.inc.php';?>