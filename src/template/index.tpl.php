
       <?php require 'template/partials/header.inc.php';?>
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                <?php 
            foreach($posts as $post){ ?>
      <div class="post-preview">
        <a href="?page=post&slug=<?= $post['postSlug'] ?>">
          <h2 class="post-title"><?= $post['title'] ?></h2>
          <img  src="<?= $post['image'] ?>" >
          <h3 class="post-subtitle"><?= $post['content'] ?>...</h3>
        </a>
        <p class="post-meta">
          Rédigé par
          <a href="#!"><?= $post['firstName'] .' '. $post['lastName'] ?></a>
          <?= $post['updatedAt'] ?>
          Classé dans: <?= $post['name'] ?><br>
          <?php if( $post['nbComments'] >0 ){
                echo $post['nbComments'] . ' '. pluralize('commentaire', intval($post['nbComments']) );
          } ?>
        </p>
      </div>
      <!-- Divider-->
      <hr class="my-4" />
      <?php  }
            ?>

                    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
                </div>
            </div>
        </div>

        <?php require 'template/partials/footer.inc.php';?>
        
  
