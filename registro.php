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
    <link rel="stylesheet" type="text/css" href="css/style2.css">
    <link rel="stylesheet" type="text/css" href="css/box.css">
  </head>
  <body>
	<?php
		include 'menu.php';
	?>


    <!--Contact-->
    <section id ="registro" class="section-padding">
		<div class="container">
			<div class="row">
				<?php
					if (isset($_GET["error1"])){
						echo '<br>
						<div class="alert-box error"><span>El asistente con el correlativo: '.$_GET["correl"].', no ha sido encontrado!</span></div>';
					} 
					if (isset($_GET["error2"])){
						echo '<br>
						<div class="alert-box error"><span>El asistente con el telefono: '.$_GET["tel"].', no ha sido encontrado!</span></div>';
					} 
					if (isset($_GET["error3"])){
						echo '<br>
						<div class="alert-box error"><span>El asistente con el email: '.$_GET["email"].', no ha sido encontrado!</span></div>';
					} 
					if (isset($_GET["error4"])){
						echo '<br>
						<div class="alert-box error"><span>El usuario con el correlativo: '.$_GET["correl"].', ya ha confirmado su asistencia!</span></div>';
					} 
					if (isset($_GET["error5"])){
						echo '<br>
						<div class="alert-box error"><span>El usuario con el telefono: '.$_GET["tel"].', ya ha confirmado su asistencia!</span></div>';
					} 
					if (isset($_GET["error6"])){
						echo '<br>
						<div class="alert-box error"><span>El usuario con el email: '.$_GET["email"].', ya ha confirmado su asistencia!</span></div>';
					} 
					if (isset($_GET["ok"])){
						echo '<br>
						<div class="alert-box success"><span>¡La asistencia del usuario con el correlativo: '.$_GET["correl"].', ha sido registrada!</span></div>';
					} 
				?>
		

			  <div class="header-section text-center">
				<h2>Inscripción</h2>
				<p>Utiliza este formulario para poder realizar la busqueda de asistentes pre-inscritos</p>
			  </div>
			  
			  <div style="">
				<form action="registrocheck.php" method="post" role="form" style="width:400px; margin: 0 auto;" name="formulario">
					<div class="form-group">
						<p>Busqueda por correlativo:</p>
						<input type="text" name="correlativo" class="form-control form" id="correlativo"   />
						<div class="validation"></div>
					</div>
					<div class="form-group">
						<p>Búsqueda por telefono (formato: nnnnnnnn):</p>
						<input type="text" class="form-control" name="telefono" id="telefono"  />
						<div class="validation"></div>
					</div>
					<div class="form-group">
						</p>Búsqueda por correo electronico:</p>
						<input type="text" class="form-control" name="email" id="email"  />
						<div class="validation"></div>
					</div>
				
					<!-- Button -->
					<div class="form-group">
						<br><button type="submit" id="submit" name="submit" class="form contact-form-button light-form-button oswald light">Buscar</button>
					</div>
					
					
				</form>
			  </div>

			
				
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