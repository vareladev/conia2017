<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>VII Congreso de ingenieria y arquitectura</title>
   
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Candal|Alegreya+Sans">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/box.css">
    <!-- =======================================================
        Theme Name: Mentor
        Theme URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
        Author: BootstrapMade.com
        Author URL: https://bootstrapmade.com
    ======================================================= -->
  </head>
  <body>
	<?php
		include 'menu.php';
	?>


    <!--Contact-->
    <section id ="contact" class="section-padding">
      <div class="container">
        <div class="row">

        <?php
          if (isset($_GET["sent"])){
            echo '
                  <br>
                  <div class="alert-box success"><span>Tu mensaje ha sido enviado, un administrador responderá pronto.</span></div>
                  <br>';
          } 
          if (isset($_GET["error"])){
            echo '
                  <br>
                  <div class="alert-box error"><span>Error al intentar enviar el mensaje, intentalo mas tarde.</span></div>
                  <br>';
          } 
        ?>

          <div class="header-section text-center">
            <h2>Contactanos</h2>
            <p>¿Tienes alguna pregunta o comentario? no dudes en contactarnos.</p>
            <hr class="bottom-line">
          </div>
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>
          <form action="sndmail.php" method="post" role="form" class="contactForm">
              <div class="col-md-6 col-sm-6 col-xs-12 left">
                <div class="form-group">
                    <input type="text" name="name" class="form-control form" id="name" placeholder="Nombre" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validation"></div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                    <div class="validation"></div>
                </div>
              </div>
              
              <div class="col-md-6 col-sm-6 col-xs-12 right">
                <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Mensaje"></textarea>
                    <div class="validation"></div>
                </div>
              </div>
              
              <div class="col-xs-12">
                <!-- Button -->
                <button type="submit" id="submit" name="submit" class="form contact-form-button light-form-button oswald light">Enviar mensaje</button>
              </div>
          </form>
			
        </div>
    <div class="header-section text-center">
      <h2>Sede del congreso</h2>
      <hr class="bottom-line">
    </div>
		<div>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3876.6167531412702!2d-89.23791498561573!3d13.681052590393262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f6331cd305c735b%3A0x3d2a75b3761d4ded!2sUniversidad+Centroamericana+Jos%C3%A9+Sime%C3%B3n+Ca%C3%B1as!5e0!3m2!1ses!2ssv!4v1488472512673" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
      </div>
    </section>
    <!--/ Contact-->
    <!--Footer-->
    <?php
      include 'footer.php';
    ?>
    <!--/ Footer-->
    
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>
    
  </body>
</html>