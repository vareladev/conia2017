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
                  <div class="alert-box success"><span>Tu registro se ha realizado con éxito!</span></div>
                  <br>';
			  } 
			?>

			  <div class="header-section text-center">
				<h2>Inscription</h2>
				<p>Use this form to sign up for the congress, Fields marked with <font color = "red";> (*) </font> are required.</p>
				<hr class="bottom-line">
			  </div>
			  
			  <div style="">
				<form action="registrar.php" method="post" role="form" style="width:400px; margin: 0 auto;">
					<div class="form-group">
						<p>First name:<font color="red">*</font></p>
						<input type="text" name="nombre1" class="form-control form" id="nombre1"  required />
						<div class="validation"></div>
					</div>
					<div class="form-group">
						<p>Second name:</p>
						<input type="text" class="form-control" name="nombre2" id="nombre2"  />
						<div class="validation"></div>
					</div>
					<div class="form-group">
						</p>Last name:<font color="red">*</font></p>
						<input type="text" class="form-control" name="appellido1" id="appellido1" required />
						<div class="validation"></div>
					</div>
					<div class="form-group">
						</p>Phone number:</p>
						<input type="tel" class="form-control" name="tel" id="tel"  />
						<div class="validation"></div>
					</div>
					<div class="form-group">
						<br>
						<center>
						<table border="0" style="width:100%;">
							<tr>
								<td style="width:30%;">
									Gender: 
								</td>
								<td>
									<select class="form-control" name="genero">
									  <option value="1">Female</option>
									  <option value="2">Male</option>
									</select>
								</td>
							</tr>
						</table
						</center>
						<div class="validation"></div>
					</div>
					<hr class="bottom-line">
					<div class="form-group">
						<center>
						<table border="0" style="width:100%;">
							<tr>
								<td style="width:30%;">
									Institution:<font color="red">*</font>
								</td>
								<td>
									<select id="getInstitucion" class="form-control" name="institucion" required onchange="selectIns(this);">
									  <option  value="1">UCA</option>
									  <option id="otraInstitucion" value="2">Another institution</option>
									</select>
								</td>
							</tr>
						</table
						</center>
						<div class="validation"></div>
					</div>
					<div id="divInsx" class="form-group" style="display: none;">
						</p>If you chose the "Other institution" option, indicate which:</p>
						<input type="text" class="form-control" name="institucionx" id="institucionx"  />
						<div class="validation"></div>
					</div>
					<div class="form-group">
						<center>
						<table border="0" style="width:100%;">
							<tr>
								<td>Graduado:
								</td>
								<td>
									<input type="radio" name="estudiante" value="0">Si<br>
								</td>
								<td>
									<input type="radio" name="estudiante" value="1" checked="checked">No<br>
								</td>
							</tr>
						</table
						</center>
					</div>
					<div class="form-group">
						</p>Email:</p>
						<input type="email" class="form-control" name="email" id="email"  />
						<div class="validation"></div>
					</div>
					<br><div class="form-group">
						<center>
						<table border="0" style="width:100%;">
							<tr>
								<td style="width:30%;">
									Area:
								</td>
								<td>
									<select id="getArea" class="form-control" name="carrera" onchange="selectArea(this);">
									  <option value="Arquitectura">Architecture</option>
									  <option value="Computacion">computer's science</option>
									  <option value="Civil">Civil Engineering</option>
									  <option value="Electrica">Electric engineering</option>
									  <option value="Mecanica">Mechanical Engineering</option>
									  <option value="Industrial">Industrial engineer</option>
									  <option value="Quimica">Chemical engineering</option>
									  <option id="otraArea" value="8">Other...</option>
									</select>
								</td>
							</tr>
						</table
						</center>
						<div class="validation"></div>
					</div>
					<div id="divOtraArea" class="form-group" style="display: none;">
						</p>If you chose the "Other area" option, indicate which:</p>
						<input type="text" class="form-control" name="areax" id="areax"  />
						<div class="validation"></div>
					</div>
					<hr class="bottom-line">
					<div class="form-group">
						<center>
						<table border="0" style="width:100%;">
							<tr>
								<td>Ponente:
								</td>
								<td>
									<input type="radio" name="ponente" value="1">Si<br>
								</td>
								<td>
									<input type="radio" name="ponente" value="0" checked="checked">No<br>
								</td>
							</tr>
						</table
						</center>
					</div>					
					<!-- Button -->
					<br><button type="submit" id="submit" name="submit" class="form contact-form-button light-form-button oswald light">Sign up</button>
					
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