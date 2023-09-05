<!DOCTYPE html>
<html lang="en">
<?php include "partials/head.php" ?>
<body>
<div id="page-container">
    <?php include "partials/navbar.php"?>
    <div class="content-wrap">
    <section id="postuler" class="postuler">
    <div class="Header-section">   
        </div>
      <div class="container postuler-content" data-aos="fade-up"> 
      <div class="title-content">
      <h1>Espace <span> carrière </span></h1> 
        <p class="mb-5">Rejoignez Medipro Groupe , le leader sur le marché marocain des compléments alimentaires naturels à base de plantes. </p>
        <h2>Nos Offres <span> d'emploi</span></h2>
      </div>
        <div class="row">
              <?php
              $query = "SELECT *  FROM offres  order by date_creation";
              $statement = $connect->prepare($query);
              $statement->execute();
              $result = $statement->fetchAll();
              $statement = $connect->prepare($query);
              $statement->execute();
              $result = $statement->fetchAll();
              foreach ($result as $row) { ?>
                <div class="col-12 d-flex align-items-stretch mb-3"  data-aos="zoom-in" data-aos-delay="100">
                    <div class="offre-box" style="width:100%">
                      <!--Post -->
                      <div class="row">
                            <div class="col-6 postuler-details" style="align-items:flex-start	">
                              <h3 id="name<?=$row['id'] ?>"><?=utf8_encode($row['offre'])?></h3>
                              <h5><?= utf8_encode(date('d-m-Y',strtotime( $row['date_creation'])))?></h5>        
                            </div>

                            <div class="col-6 postuler-btn">
                            <button class="btn btn-primary button-postuler" type="button" data-bs-toggle="collapse" data-bs-target="#id<?=$row['id'] ?>" aria-expanded="false" aria-controls="<?=$row['id'] ?>"><span class="btn-text">Plus de détails</span></button>
                              <button id="<?=$row['id']?>" class="btn btn-primary postuler-btn button-postuler" data-bs-toggle="modal" data-bs-target="#postulerModal"> <span class="btn-text">Postuler</span></button>
                            </div>
                      </div>
                      <!--End Post -->
                      <!--Details -->
                      <div id="id<?=$row['id'] ?>" class=" collapse multi-collapse container mt-3 mb-3"> 
                        <div id="description">
                          <pre><p class="proximanovalight"><?=utf8_encode($row['description'])?></p></pre>
                        </div>
      
                        <div id="missions">
                          <h3>Vos missions et Responsabilités :</h3>
                          <pre><p class="proximanovalight"><?=utf8_encode($row['missions'])?></p></pre>
                        </div>

                        <div id="profil">
                          <h3>Vos qualifications & atouts :</h3>
                          <pre><p class="proximanovalight"><?=utf8_encode($row['profil'])?></p></pre>
                        </div>

                      </div>
                      <!--End Details -->
                    </div>
                </div>
              <?php } ?>
          </div>
      </div>
    </section><!-- End Nouveautés Section -->

    </div>
    <?php include "partials/footer.php" ?>
</div>
  </body>
  <?php include "partials/script.php" ?>

</html>