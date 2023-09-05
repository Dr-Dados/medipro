
<!DOCTYPE html>
<html lang="en">
<?php
include "handler/connect.php";
	$id = $_GET['id'];
    $query = "SELECT p.*, c.categorie  FROM produits p , categories c WHERE p.id_cat=c.id and p.des='$id' and isVisible = 'yes'";
    $statement = $connect->prepare($query);
    $statement->execute();
    $result = $statement->fetchAll();
    foreach ($connect->query($query) as $row) {
        $titre = $row['designation'];
        
        $image= $row['image'];
        $logo=$row['logo'];
        $idCat = $row['id_cat'];
        $categorie=$row['categorie'];
        $description = $row['description'];
        $forme = $row['forme'];
        $composition= $row['compo'];
        $proprietes = $row['prop'];
        $utilisation = $row['util'];
        $conseils = $row['conseil'];
        $precautions = $row['precautions'];

    }
    ?>
<?php include "partials/head.php" ?>
<body>
<div id="page-container">
    <?php include "partials/navbar.php"?>
    <div class="content-wrap">
    <main>


<div id="product">

	<div class="container">
		<div class="top">
            <ul class="breadcrumb">
                <li><a href="index.php">Accueil</a></li>
                <li><a href="produits.php">Produits</a></li>
                <li><?=$titre?></li>
            </ul>
		</div>
    </div> 
    <img src="" alt="" srcset="">
    <div class="container">
		<div class="rows">
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 image">
                <img class="product-img" src="<?=$image?>" alt="<?= $titre ?>">
                <div class="images">
                        <img src="assets/img/elements/approuve.png" alt="" srcset="">
                        <img src="assets/img/elements/recommande.png" alt="" srcset="">
                        <img src="assets/img/elements/selection.png" alt="" srcset="">
                    </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 body">
                <div class="logo">
                    <img src="<?=$logo?>" alt="<?= $titre?>">
                </div>
                
                <div class="text">
                    <p><span><?=$categorie?></span></p>
                    <div class="description"><?= $description?></div>
                    <h3 class="collapsible">forme & présentation</h3>
                    <div class="content"><?= $forme?></div>
                    <hr/>
                    <h3 class="collapsible">composition</h3>
                    <div class="content"><?=$composition?></div>
                    <hr/>
                    <h3 class="collapsible">propriétés</h3>
                    <div class="content"><?=$proprietes?></div>
                    <hr/>
                    <h3 class="collapsible">utilisation</h3>
                    <div class="content"><?=$utilisation?></div>
                    <hr/>
                    <h3 class="collapsible">conseils d'utilisation</h3>
                    <div class="content"><?=$conseils?></div>
                    <hr/>
                    <h3 class="collapsible">précautions d'utilisation</h3>
                    <div class="content"><?=$precautions?></div>

                </div>
            </div>

            <hr/>

            <section id="new-products" class="products-section">

              
                <div class="header">
                  <h2>  <span>Produits similaires</span></h2>
                </div>
                <div class="body">
                  <div class="rows">
                  <?php
                    $query = "SELECT p.*, c.categorie FROM produits p , categories c WHERE p.id_cat=c.id AND p.id_cat=$idCat ORDER BY RAND ( ) LIMIT 4";
                    $statement = $connect->prepare($query);
                    $statement->execute();
                    $result = $statement->fetchAll();
                    foreach ($result as $row) {
                      $idDesignation =  $row['des'];
                      $designation = $row["designation"];
                      $format=$row['format'];
                      ?>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 product-item">
                      <div class="card">
                      <a href='./product.php?id=<?=$idDesignation?>'><div class="img"><img
                          src="<?= $row["image"]?>"
                          class="card-img-top"
                          alt="..."
                        /></div></a>
                      
                        <div class="card-body">
                        <a href='./product.php?id=<?=$idDesignation?>'><h5 class="card-title"><?= $designation?></h5></a>
                        <h6><?= $format?></h6>
                        </div>
                      </div>
                    </div>
                    <?php } ?>

                  </div>
                </div>
              
            </section>
        
        
		 </div>
	</div>
</div>
	</main>
    </div>
    <?php include "partials/footer.php" ?>
</div>
  </body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
<script src="assets/js/script.js" defer></script>
</html>