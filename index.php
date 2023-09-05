  <!DOCTYPE html>
<html>
<head>
    <?php include "partials/head.php" ?>
  </head>
 <body>
 <div id="page-container">
         <!-- header start -->
  <?php include "partials/navbar.php" ?>
    <!-- header end -->

<!-- banner start -->
    <!-- ======= Hero Section ======= -->
    <!-- Desktop carousel -->
    <div id="HeroDesktopCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li
          data-target="#HeroDesktopCarousel"
          data-slide-to="0"
          class="active"
        ></li>
        <li data-target="#HeroDesktopCarousel" data-slide-to="1"></li>
        <li data-target="#HeroDesktopCarousel" data-slide-to="2"></li>
        <li data-target="#HeroDesktopCarousel" data-slide-to="3"></li>
        <li data-target="#HeroDesktopCarousel" data-slide-to="4"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            class="d-block w-100"
            src="./assets/img/banner/Neovimag375.png"
            alt="First slide"
          />
        </div>
                <div class="carousel-item">
          <img
            class="d-block w-100"
            src="./assets/img/banner/carboxane.jpg"
            alt="Second slide"
          />
        </div>
        <div class="carousel-item">
          <img
            class="d-block w-100"
            src="./assets/img/banner/adiaflor.png"
            alt="Second slide"
          />
        </div>
        <div class="carousel-item">
          <img
            class="d-block w-100"
            src="./assets/img/banner/candidax.png"
            alt="Third slide"
          />
        </div>
        <div class="carousel-item">
          <img
            class="d-block w-100"
            src="./assets/img/banner/maxitone.png"
            alt="Third slide"
          />
        </div>
      </div>
      <a
        class="carousel-control-prev"
        href="#HeroDesktopCarousel"
        role="button"
        data-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a
        class="carousel-control-next"
        href="#HeroDesktopCarousel"
        role="button"
        data-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!-- mobile carousel -->
    <div id="HeroMobileCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li
          data-target="#HeroMobileCarousel"
          data-slide-to="0"
          class="active"
        ></li>
        <li data-target="#HeroMobileCarousel" data-slide-to="1"></li>
        <li data-target="#HeroMobileCarousel" data-slide-to="2"></li>
        <li data-target="#HeroMobileCarousel" data-slide-to="3"></li>
        <li data-target="#HeroMobileCarousel" data-slide-to="4"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img
            class="d-block w-100"
            src="./assets/img/banner/Neovimag375Mobile.png"
            alt="First slide"
          />
        </div>
                <div class="carousel-item">
          <img
            class="d-block w-100"
            src="./assets/img/banner/carboxane-mobile.jpg"
            alt="Second slide"
          />
        </div>
        <div class="carousel-item">
          <img
            class="d-block w-100"
            src="./assets/img/banner/adiaflormobile.png"
            alt="Second slide"
          />
        </div>
        <div class="carousel-item">
          <img
            class="d-block w-100"
            src="./assets/img/banner/candidaxmobile.png"
            alt="Third slide"
          />
        </div>
        <div class="carousel-item">
          <img
            class="d-block w-100"
            src="./assets/img/banner/maxitonemobile.png"
            alt="Third slide"
          />
        </div>
      </div>
      <a
        class="carousel-control-prev"
        href="#HeroMobileCarousel"
        role="button"
        data-slide="prev"
      >
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a
        class="carousel-control-next"
        href="#HeroMobileCarousel"
        role="button"
        data-slide="next"
      >
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <!-- End Hero -->
      <!-- new products -->
    <section id="new-products" class="products-section">
      <img class="leafimg" src="./assets/img/elements/feuille-01.png" alt="" />
      <img
        class="leafimg leaf2"
        src="./assets/img/elements/feuille-02.png"
        alt=""
      />
      <div class="container">
        <div class="header">
          <h2>Nouveaux <span>produits</span></h2>
          <!-- <button class="btn btn-secondary">Afficher plus</button> -->
        </div>
        <div class="body">
          <div class="rows">
            <!-- product card -->
            <?php
            $query = "SELECT p.*, c.categorie FROM produits p , categories c WHERE p.id_cat=c.id AND p.metadesc='nouveau' AND isVisible='yes' ORDER BY id desc LIMIT 4";
            $statement = $connect->prepare($query);
            $statement->execute();
            $result = $statement->fetchAll();
            foreach ($result as $row) { ?>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 product-item">
              <div class="card">
                <div class="new">Nouveau</div>
                <a href='./product.php?id=<?=$row['des']?>'><div class="img"><img
                      src="<?= $row['image']?>"
                      class="card-img-top"
                      alt="..."
                    /></div></a>
                    <!-- <span class="best">Best-seller</span> -->
                    <div class="card-body">
                    <a href='./product.php?id=<?=$row['des']?>'><h5 class="card-title"><?= $row["designation"]?></h5></a>
                    <h6><?= $row['categorie']?></h6>
                    </div>
              </div>
            </div>
            <?php } ?>
            <!-- end product card-->
          </div>
        </div>
      </div>
    </section>
<!-- end new products -->




        <section id="about">
          <div class="container">
              <div class="rows body">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12"><img src="assets/img/about2.png" alt=""></div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 body-text"><h2>Découvrez <span>MEDIPRO PHARMA</span></h2>
                  <p>MEDIPRO PHARMA est une société pharmaceutique de MEDIPRO GROUPE, spécialisée dans le domaine de la santé naturelle et du complément alimentaire.</p>
                  <p>Depuis plus de 22 ans, MEDIPRO PHARMA s'impose comme un leader incontesté dans le domaine de la phytothérapie, en donnant la priorité à l'innovation et à l'optimisation des normes de qualité.</p>
                  <button class="btn btn-secondary"><a href="./entreprise.php">En savoir plus</a></button>
                </div>
              </div>
          </div>

        </section>
      <section id="best-products" class="products-section">
      <img class="leafimg" src="./assets/img/elements/feuille-01.png" alt="" />
      <img
        class="leafimg leaf2"
        src="./assets/img/elements/feuille-02.png"
        alt=""
      />
      <div class="container">
        <div class="header">
          <h2>Produits <span>Phares</span></h2>
          <!-- <button class="btn btn-secondary">Afficher plus</button> -->
        </div>
        <div class="body">
          <div class="rows">
            <!-- product card -->
            <?php
            $query = "SELECT p.*, c.categorie FROM produits p , categories c WHERE p.id_cat=c.id AND p.metadesc='produits-phares' AND isVisible='yes' ORDER BY id desc LIMIT 4";
            $statement = $connect->prepare($query);
            $statement->execute();
            $result = $statement->fetchAll();
            foreach ($result as $row) { ?>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 product-item">
              <div class="card">
                
                <a href='./product.php?id=<?=$row['des']?>'><div class="img">
                  <img
                      src="<?= $row['image']?>"
                      class="card-img-top"
                      alt="..."
                    />
                </div></a>
                    <!-- <span class="best">Best-seller</span> -->
                    <div class="card-body">
                    <a href='./product.php?id=<?=$row['des']?>'><h5 class="card-title"><?= $row["designation"]?></h5></a>
                    <h6><?= $row['categorie']?></h6>
                    </div>
              </div>
            </div>
            <?php } ?>
            <!-- end product card-->
          </div>
        </div>
      </div>
    </section>


        <section id="about2">
          <div class="container">
              <div class="rows body">
                
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 body-text"><h6> <span>Produit du mois</span></h6>
                <h2>Neovimag® 375mg</h2>
                  <p>NEOVIMAG® 375mg représente une synergie entre 375 mg de magnésium marin et de la vitamine B6. 
                    Cette combinaison vise à remédier aux besoins renforcés en magnésium et à atténuer les états de tension nerveuse, tels que l'irritabilité, la nervosité, le stress, les problèmes de sommeil, ainsi que les manifestations musculaires telles que les crampes et la fatigabilité 
                  </p>
                  
                  <button class="btn btn-secondary"><a href="./product.php?id=NEOVIMAG-375mg">En savoir plus</a> </button>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 img-container" ><img src="./uploads/produits/Neovimag375.png" alt=""></div>
              </div>
          </div>
        </section>
        
     </div>
<?php include "partials/footer.php" ?>
</div>
  </body>
  <?php include "partials/script.php" ?>

</html>
