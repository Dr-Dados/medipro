<header class="header">
      <div class="container">
        <div class="row v-center">
          <div class="header-item item-left">
            <div class="logo">
              <a href="index.php"><img src="assets/img/logo.png" alt="" srcset="" /></a>
            </div>
          </div>
          <!-- menu start here -->
          <div class="header-item item-center">
            <div class="menu-overlay"></div>
            <nav class="menu">
              <div class="mobile-menu-head">
                <div class="go-back"><i class="fa fa-angle-left"></i></div>
                <div class="current-menu-title"></div>
                <div class="mobile-menu-close">&times;</div>
              </div>
              <ul class="menu-main">
                <li>
                  <a href="index.php">Accueil</a>
                </li>
                <li>
                  <a href="entreprise.php">Entreprise</a>
                </li>

              
                <li class="menu-item-has-children">
                              <a href="#">Produits <i class='bx bx-chevron-down'></i></a>
                               <div class="sub-menu mega-menu mega-menu-column-4">
                                 <div class="list-item">
                                 <h4 class="title">Gastro-enterologie</h4>
                                       <ul>
                                          <?php
                                          $query2 = "SELECT * FROM `sous_cat` WHERE id_cat=1 ";
                                          $statement = $connect->prepare($query2);
                                          $statement->execute();
                                          $result = $statement->fetchAll();
                                          foreach ($result as $row) { ?>
                                          <li><a href="produits.php?id=<?=$row['designation'] ?>"><?=utf8_encode($row['sous_cat'])?></a></li>
                                          <?php } 
                                          ?>
                                      </ul>
                                
                                       
                             
                                 </div>
                                 <div class="list-item">
                                     <h4 class="title">Stress anxiété et insomnie</h4>
                                     <ul>
                                          <?php
                                          $query2 = "SELECT * FROM `sous_cat` WHERE id_cat=3 ";
                                          $statement = $connect->prepare($query2);
                                          $statement->execute();
                                          $result = $statement->fetchAll();
                                          foreach ($result as $row) { ?>
                                          <li><a href="produits.php?id=<?=$row['designation'] ?>"><?=utf8_encode($row['sous_cat'])?></a></li>
                                          <?php } 
                                          ?>
                                      </ul>
                                      <h4 class="title">Metabolisme et énergie</h4>
                                       <ul>
                                          <?php
                                          $query2 = "SELECT * FROM `sous_cat` WHERE id_cat=4 ";
                                          $statement = $connect->prepare($query2);
                                          $statement->execute();
                                          $result = $statement->fetchAll();
                                          foreach ($result as $row) { ?>
                                          <li><a href="produits.php?id=<?=$row['designation'] ?>"><?=utf8_encode($row['sous_cat'])?></a></li>
                                          <?php } 
                                          ?>
                                      </ul>
      
                                 </div>
                                 <div class="list-item">
                                     <h4 class="title">Rhumatologie</h4>
                                     <ul>
                                          <?php
                                          $query2 = "SELECT * FROM `sous_cat` WHERE id_cat=6 ";
                                          $statement = $connect->prepare($query2);
                                          $statement->execute();
                                          $result = $statement->fetchAll();
                                          foreach ($result as $row) { ?>
                                          <li><a href="produits.php?id=<?=$row['designation'] ?>"><?=utf8_encode($row['sous_cat'])?></a></li>
                                          <?php } 
                                          ?>
                                      </ul>
      
                                      <h4 class="title">Gynécologie</h4>
                                       <ul>
                                          <?php
                                          $query2 = "SELECT * FROM `sous_cat` WHERE id_cat=5 ";
                                          $statement = $connect->prepare($query2);
                                          $statement->execute();
                                          $result = $statement->fetchAll();
                                          foreach ($result as $row) { ?>
                                          <li><a href="produits.php?id=<?=$row['designation'] ?>"><?=utf8_encode($row['sous_cat'])?></a></li>
                                          <?php } 
                                          ?>
                                      </ul>
                                 </div>
                                 <div class="list-item">
                                 <h4 class="title">Système respiratoire et ORL</h4>
                                      <ul>
                                          <?php
                                          $query2 = "SELECT * FROM `sous_cat` WHERE id_cat=2 ";
                                          $statement = $connect->prepare($query2);
                                          $statement->execute();
                                          $result = $statement->fetchAll();
                                          foreach ($result as $row) { ?>
                                          <li><a href="produits.php?id=<?=$row['designation'] ?>"><?=utf8_encode($row['sous_cat'])?></a></li>
                                          <?php } 
                                          ?>
                                      </ul>
                                  <h4 class="title">Dermatologie</h4>
                                     <ul>
                                          <?php
                                          $query2 = "SELECT * FROM `sous_cat` WHERE id_cat=7 ";
                                          $statement = $connect->prepare($query2);
                                          $statement->execute();
                                          $result = $statement->fetchAll();
                                          foreach ($result as $row) { ?>
                                          <li><a href="produits.php?id=<?=$row['designation'] ?>"><?=utf8_encode($row['sous_cat'])?></a></li>
                                          <?php } 
                                          ?>
                                      </ul>
                                 </div>
                               </div>
                           </li>
                <!-- <li class="menu-item-has-children">
                  <a href="#"
                    >Espace Pharmacien <i class='bx bx-chevron-down'></i></a>
                  <div class="sub-menu single-column-menu">
                    <ul>
                      <li><a href="https://medipropharma.ma/connexion.php" target='_blank'>Se connecter</a></li>
                      <li><a href="https://medipropharma.ma/inscription.php" target='_blank'>Créer un compte</a></li>
                    </ul>
                  </div>
                </li>
                <li><a target='' href="carriere.php">Espace Carrière</a></li> -->
                <li><a href="contact.php">Contact</a></li>
                <li>
                  <div class="social-links">
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                    <a href="#"><i class='bx bxl-linkedin' ></i></a>
                    <a href="#"><i class='bx bxl-whatsapp' ></i></a>
                  </div>
                </li>
              </ul>
            </nav>
          </div>
          <!-- menu end here -->
          <div class="header-item item-right">
            <div class="social-links">
              <a href="#"><i class='bx bxl-facebook'></i></a>
              <a href="#"><i class='bx bxl-instagram'></i></a>
              <a href="#"><i class='bx bxl-linkedin' ></i></a>
              <a href="#"><i class='bx bxl-whatsapp' ></i></a>
            </div>
            <!-- mobile menu trigger -->
            <div class="mobile-menu-trigger">
              <span></span>
            </div>
          </div>
        </div>
      </div>
    </header>



