
<!DOCTYPE html>
<html lang="en">
<?php include "partials/head.php" ?>
<link rel="stylesheet" href="assets/css/contact.css">
<body>
<div id="page-container">
    <?php include "partials/navbar.php"?>
    <div class="content-wrap">
    <main id="main">
<section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h3><span>Contactez nous</span></h3>
          <p>Avez-vous besoin d’informations ? N’hésitez pas à nous contacter
</p>
        </div>

        <div class="rows" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Notre adresse</h3>
              <p>9 Rue des cigales,20410 Oasis, Casablanca </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email</h3>
              <a href="mailto:contact@therapham.ma">contact@medipropharma.ma</a>
            
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Appel</h3>
              <a href="tel:+212 522 980 772">+212 522 980 772</a>
              
            </div>
          </div>

        </div>

        <div class="rows" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6 ">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3324.907735743332!2d-7.637301124164297!3d33.55577344378198!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7d2dd5699a609%3A0x1296271c0fb4afa7!2sMEDIPRO%20PHARMA!5e0!3m2!1sfr!2sma!4v1693908960689!5m2!1sfr!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>          </div>

          <div class="col-lg-6">
                <form action="handler/contact.php" method="POST" role="form" class="php-email-form" id="cform">
                  <div class="rows">
                    <div class="col form-group">
                      <input type="text" name="name" class="form-control" id="namecontact" placeholder="Nom et prénom"
                        required />
                    </div>
                    <div class="col form-group">
                      <input type="email" class="form-control" name="email" id="emailcontact" placeholder="Adresse mail"
                        required />
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subjectcontact" placeholder="Sujet" required />
                  </div>
                  <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message" id="messagecontact"
                      required></textarea>
                  </div>
                  <div class="my-3">
                    <div class="loading">Chargement</div>
                    <div class="error-message"></div>
                    <div class="sent-message">
                      Votre message a été bien envoyé . Merci pour votre confiance !
                    </div>
                  </div>
                  <div class="text-center">
                    <button type="submit" id="submitContact">Envoyer</button>
                  </div>
                </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
  <!-- End Nouveautés Section -->
</main>
    </div>
    <?php include "partials/footer.php" ?>
</div>
  </body>
  <?php include "partials/script.php" ?>

</html>