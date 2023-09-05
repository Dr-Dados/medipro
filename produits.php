

<!DOCTYPE html>
<html lang="en">
<?php
include("handler/connect.php");
if (isset($_GET['id'])) {
	$idCat = $_GET['id'];
	$query = "SELECT p.*, c.sous_cat FROM produits p , sous_cat c WHERE p.id_sous_cat=c.id AND c.designation='$idCat' AND isVisible='yes' order by p.designation";
  } else {
	$idCat = "Tous nos produits ";
	$query = "SELECT p.*, c.sous_cat FROM produits p , sous_cat c WHERE p.id_sous_cat=c.id AND isVisible='yes' order by p.designation";
  }
?>
<?php include "partials/head.php" ?>
 <link rel="stylesheet" href="assets/css/products.css" />
<body>
<div id="page-container">
    <?php include "partials/navbar.php"?>
    <div class="content-wrap">
					<div id="products">
						<div class="container">
							<div class="top">
								<h2><?= $idCat ?></h2>
							</div>
							<div class="rows">
							<?php
							$statement = $connect->prepare($query);
							$statement->execute();
							$result = $statement->fetchAll();
							foreach ($result as $row) { 
								$designation = $row['designation'];
								$format=$row['format'];
								?>

								<div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 product-item">
								<div class="card">
									<a href='./product.php?id=<?=$row['des']?>'><div class="img"><img
									src="<?= $row["image"]?>"
									class="card-img-top"
									alt="..."
									/></div>
									<div class="card-body">
									<h5 class="card-title"><?= $row["designation"]?></h5>
									<h6><?= $row["format"]?></h6></a>
									</div>
								</div>
								</div>
							<?php } ?>
							</div>
						</div>
					</div>
    </div>
    <?php include "partials/footer.php" ?>
</div>
  </body>
  <?php include "partials/script.php" ?>

</html>