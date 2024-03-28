<?php require 'template/partials/header.inc.php';?>
        <!-- Main Content-->
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <h2>Votre article </h2>
                        <div class="my-5">
                           
                            <form id="contactForm" action ="?page=addpost" method="post" >

                            <div class="form-floating">
                                    <input class="form-control" id="title" 
                                    type="text" name="title"  />
                                    <label for="title">Titre</label>
                                </div>

                                <div class="form-floating">
                                  <textarea name="content" input class="form-control" id="content" 
                                   cols="30" rows="10" ></textarea>
                                   <label for="content">Contenu</label>
                                   
                                </div>
                                </div>
                                <div class="form-floating">
                                    <input class="form-control" id="image" 
                                    type="text" name="image" placeholder="Enter votre image..." />
                                    <label for="image">URL image</label>
                                </div>
                                <div class="form-floating">
                                  <select class="form-select" 
                                      aria-label="Default select example"
                                      id="id_categories" name="id_categories">
                                      <option selected>Choisissez une catégorie</option>
                                      <?php foreach($categories as $category){?>
                                        <option value="<?= $category['id'] ?>"><?=$category['name'] ?></option>
                                      <?php } ?>
                                  </select>
                                    <label for="id_categories">Categorie</label>
                                </div>

                                <br>
                                
                                <!-- Submit Button-->
                                <button class="btn btn-primary text-uppercase" 
                                id="submitButton" type="submit">Enregistrer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
<?php require 'template/partials/footer.inc.php';?>