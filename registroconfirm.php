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

	<?php
		$correl = 0;
		$nombre1 = "";
		$nombre2 = "";
		$Apellido1 = "";
		$Apellido2 = "";
		$telefono = "";
		$email = "";
		$baseBusqueda = "";
		if (isset($_GET["correl"])){
			$correl = $_GET["correl"];
			include 'sql-open.php';
			$query = 'Select `nombre1`,`nombre2`,`apellido1`,`apellido2`,`telefono`,`email` from `asistentes` WHERE `id` = '.$correl.';';
			$result = $con->query($query); 	
			include "sql-close.php";
			if($row = $result->fetch_assoc()) {
			    $nombre1 = $row["nombre1"];
			    $nombre2 = $row["nombre2"];			   			    
			    $apellido1 = $row["apellido1"];
				$apellido2 = $row["apellido2"];	
				$telefono = $row["telefono"];	
				$email = $row["email"];	
			}

		} 


	?>


    <!--Contact-->
    <section id ="registro" class="section-padding">
		<div class="container">
			<div class="row">
		
				<form action="registroupdate.php" method="get" role="form" style="width:400px; margin: 0 auto;" name="formulario">
					<div class="form-group">
						<p>Correlativo:</p>
						<input type="text" name="correl" class="form-control form" id="correl"  
						value ="<?php echo $correl; ?>"/>
						<div class="validation"></div>
					</div>
					<div class="form-group">
						<p>Primer Nombre:</p>
						<input type="text" name="nombre1" class="form-control form" id="nombre1"  
						value ="<?php echo $nombre1; ?>"/>
						<div class="validation"></div>
					</div>
					<div class="form-group">
						<p>Segundo Nombre:</p>
						<input type="text" class="form-control" name="nombre2" id="nombre2"  
						value ="<?php echo $nombre2; ?>"/>
						<div class="validation"></div>
					</div>
					<div class="form-group">
						</p>Primer Apellido:</p>
						<input type="text" class="form-control" name="appellido1" id="appellido1" 
						value ="<?php echo $apellido1; ?>" />
						<div class="validation"></div>
					</div>
					<div class="form-group">
						</p>Segundo Apellido:</p>
						<input type="text" class="form-control" name="appellido2" id="appellido2"
						value ="<?php echo $apellido2; ?>" />
						<div class="validation"></div>
					</div>
					<div class="form-group">
						</p>Telefono de contacto:</p>
						<input type="tel" class="form-control" name="tel" id="tel"  
						value ="<?php echo $telefono; ?>"/>
						<div class="validation"></div>
					</div>
					<div class="form-group">
						</p>Email:</p>
						<input type="email" class="form-control" name="email" id="email" 
						value ="<?php echo $email; ?>"/>
						<div class="validation"></div>
					</div>
					<!-- Button -->
					<div class="form-group">
						<br><button type="submit" id="submit" name="submit" class="form contact-form-button light-form-button oswald light">Confirmar</button>
					</div>
				</form>
				<form action="registro.php" method="post" role="form" style="width:400px; margin: 0 auto;" name="formulario">			 
					<div class="form-group">
						<button type="submit" id="submit" name="submit" class="form contact-form-button light-form-button oswald light">Volver</button>
					</div>
				</form>			
				<a href="registroupdate.php?correl=<?php echo $correl ?>"> confirmar </a>
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