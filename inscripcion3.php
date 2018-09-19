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
	<script>
		function selectIns(nameSelect)
		{
			console.log(nameSelect);
			if(nameSelect){
				admOptionValue = document.getElementById("otraInstitucion").value;
				if(admOptionValue == nameSelect.value){
					document.getElementById("divInsx").style.display = "block";
				}
				else{
					document.getElementById("divInsx").style.display = "none";
				}
			}
			else{
				document.getElementById("divInsx").style.display = "none";
			}
		}
		
		function selectArea(nameSelect)
		{
			console.log(nameSelect);
			if(nameSelect){
				admOptionValue = document.getElementById("otraArea").value;
				if(admOptionValue == nameSelect.value){
					document.getElementById("divOtraArea").style.display = "block";
				}
				else{
					document.getElementById("divOtraArea").style.display = "none";
				}
			}
			else{
				document.getElementById("divOtraArea").style.display = "none";
			}
		}
		//var currentValue = 0;
		function handleClick(myRadio) {
		    //alert('Old value: ' + currentValue);
		    //alert('New value: ' + myRadio.value);
		    if (myRadio.value == 1){
		    	//alert('El usuario participa');
		    	document.getElementById("divTorneo").style.display = "block";
		    }
		    else{
		    	//alert('El usuario NO participa');
		    	document.getElementById("divTorneo").style.display = "none";

		    }
		    //currentValue = myRadio.value;
		}

		function handleClick2(myRadio) {
		    if (myRadio.value == 0){
		    	//alert('El usuario participa');
		    	document.formulario.rubik[1].checked=true;
		    	document.getElementById("divTorneo").style.display = "none";
		    	document.formulario.rubik2[0].checked=true;

		    }

		    //currentValue = myRadio.value;
		}
	
	</script>
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
			  if (isset($_GET["reg"])){
				  echo '<br>
                  <div class="alert-box success"><span>Tu registro se ha realizado con éxito!</span></div>';
			  } 
			?>

			<?php
			  if (isset($_GET["rbk"])){
				  echo '<br>
                  <div class="alert-box success"><span>Has sido inscrito en el torneo de cubo de rubik</span></div>
                  <br>';
			  } 
			?>			

			  <div class="header-section text-center">
				<h2>Inscripción</h2>
				<p>Utiliza este formulario para incribirte al congreso, Los campos marcados con <font color="red";>(*)</font> son obligatorios.</p>
				<p><b>NOTA: Este formulario pre-inscribe y confirma simultaneamente asistencia.</b></p>
			  </div>
			  
			  <div style="">
				<form action="registrar3.php" method="post" role="form" style="width:400px; margin: 0 auto;" name="formulario">
					<div class="form-group">
						<p>Primer Nombre:<font color="red">*</font></p>
						<input type="text" name="nombre1" class="form-control form" id="nombre1"  required />
						<div class="validation"></div>
					</div>
					<div class="form-group">
						<p>Segundo Nombre:</p>
						<input type="text" class="form-control" name="nombre2" id="nombre2"  />
						<div class="validation"></div>
					</div>
					<div class="form-group">
						</p>Primer Apellido:<font color="red">*</font></p>
						<input type="text" class="form-control" name="appellido1" id="appellido1" required />
						<div class="validation"></div>
					</div>
					<div class="form-group">
						</p>Segundo Apellido:</p>
						<input type="text" class="form-control" name="appellido2" id="appellido2" />
						<div class="validation"></div>
					</div>
					<div class="form-group">
						</p>Telefono de contacto:</p>
						<input type="tel" class="form-control" name="tel" id="tel"  />
						<div class="validation"></div>
					</div>
					<div class="form-group">
						<br>
						<center>
						<table border="0" style="width:100%;">
							<tr>
								<td style="width:30%;">
									Genero: 
								</td>
								<td>
									<select class="form-control" name="genero">
									  <option value="1">Femenino</option>
									  <option value="2">Masculino</option>
									</select>
								</td>
							</tr>
						</table
						</center>
						<div class="validation"></div>
					</div>
					<div class="form-group">
						<center>
						<table border="0" style="width:100%;">
							<tr>
								<td style="width:30%;">
									Institución:<font color="red">*</font>
								</td>
								<td>
									<select id="getInstitucion" class="form-control" name="institucion" required onchange="selectIns(this);">
									  <option  value="1">UCA</option>
									  <option id="otraInstitucion" value="2">Otra institución:</option>
									</select>
								</td>
							</tr>
						</table
						</center>
						<div class="validation"></div>
					</div>
					<div id="divInsx" class="form-group" style="display: none;">
						</p>Si eligió la opción "Otra institución" indique cual:<font color="red">*</font></p>
						<input type="text" class="form-control" name="institucionx" id="institucionx"  />
						<div class="validation"></div>
						</p>Si eligió la opción "Otra institución", ¿como se enteró de CONIA?:</p>
						<input type="text" class="form-control" name="info" id="info"  />
					</div>
					<div class="form-group">
						<center>
						<table border="0" style="width:100%;">
							<tr>
								<td style="width:30%;">
									Nivel académico:<font color="red">*</font>
								</td>
								<td>
									<select id="nivel" class="form-control" name="nivel" required>
									  <option  value="Estudiante">Estudiante</option>
									  <option  value="Egresado">Egresado</option>
									  <option  value="Graduado1">Graduado (pregrado)</option>
									  <option  value="Graduado2">Graduado (postgrado)</option>
									</select>
								</td>
							</tr>
						</table
						</center>
						<div class="validation"></div>
					</div>
					<div class="form-group">
						</p>Email:<font color="red">*</font></p>
						<input type="email" class="form-control" name="email" id="email"  required/>
						<div class="validation"></div>
					</div>
					<br><div class="form-group">
						<center>
						<table border="0" style="width:100%;">
							<tr>
								<td style="width:30%;">
									Área:<font color="red">*</font>
								</td>
								<td>
									<select id="getArea" class="form-control" name="carrera" onchange="selectArea(this);">
									  <option value="Arquitectura">Arquitectura</option>
									  <option value="Computacion">Computación</option>
									  <option value="Civil">Ingeniería Civil</option>
									  <option value="Electrica">Ingeniería Eléctrica</option>
									  <option value="Mecanica">Ingeniería Mecánica</option>
									  <option value="Industrial">Ingeniería Industrial</option>
									  <option value="Quimica">Ingeniería Química</option>
									  <option id="otraArea" value="8">Otra:</option>
									</select>
								</td>
							</tr>
						</table
						</center>
						<div class="validation"></div>
					</div>
					<div id="divOtraArea" class="form-group" style="display: none;">
						</p>Si eligió la opción "Otra área" indique cual:</p>
						<input type="text" class="form-control" name="areax" id="areax"  />
						<div class="validation"></div>
					</div>
					<div class="form-group">
						<center>
						<table border="0" style="width:100%;">
							<tr>
								<td width="50%">Ponente:
								</td>
								<td>
									<input type="radio" name="ponente" value="1">Si<br>
								</td>
								<td>
									<input type="radio" name="ponente" value="0" checked="checked">No<br>
								</td>
							</tr>
						</table>
						</center>
					</div>	
					<div class="form-group">
						</p>¿Deseas participar en el torneo de cubo de rubik?
						(<a target="_blank" href="http://dei.uca.edu.sv/conia2017/torneo.php" >click aqui para más información</a>):</p>
					
						<center>
						<table border="0" style="width:100%;">
							<tr>
								<td width="50%">
								</td>
								<td>
									<input type="radio" name="rubik" onclick="handleClick(this);" value="1">Si<br>
								</td>
								<td>
									<input type="radio" name="rubik" onclick="handleClick(this);" value="0" checked="checked">No<br>
								</td>
							</tr>
						</table>
						</center>						
						<div class="validation"></div>					
					</div>	
					<div id="divTorneo" class="form-group" style="display: none;">
						</p><b>NOTA</b> ¡Para poder participar es requisito que lleves tu propio cubo de rubik 3x3!<br>
						<a href="rscs/reglas-competencia.pdf" download>Reglas de la competencia</a>
						</p>
						<center>
						<table border="0" style="width:100%;">
							<tr>
								<td width="50%">¿Aceptas?:
								</td>
								<td>
									<input type="radio" name="rubik2" onclick="handleClick2(this);"  value="1">Si<br>
								</td>
								<td>
									<input type="radio" name="rubik2" onclick="handleClick2(this);" value="0">No<br>
								</td>
							</tr>
						</table>
						</center>
					</div>		
					<!-- Button -->
					<div class="form-group">
						<br><button type="submit" id="submit" name="submit" class="form contact-form-button light-form-button oswald light">Inscribirme</button>
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