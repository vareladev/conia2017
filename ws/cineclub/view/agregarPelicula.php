<head>

	<?php

	session_start();

	if (!isset($_SESSION['loggedin']) && !$_SESSION['loggedin'] == true) {
		header('Location: ../index.php');
	}

	?>
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<script type="text/javascript">
	
	$(document).ready(function(){

		pelicula = new FormData();
		file_data = $('#imagen').prop('files')[0];

		$("#imagen").click(function(e){

			$("#imagen").change(function(){
				//console.log(this.files[0].mozFullPath);
				file_data = $('#imagen').prop('files')[0];				
				console.log(file_data);
				pelicula.append("img", file_data);
				console.log('holi');
			});

				console.log('click fuera');
				console.log(file_data);

		});


		$("#save").click(function(e){
			console.log('file data');
			console.log(file_data);

			
			if(  ($("#nombrePelicula").val() != "") && (file_data != null)){


				pelicula.append('nombre', $("#nombrePelicula").val());
				pelicula.append('pais', $("#paisOrigen").val());
				pelicula.append('director', $("#director").val());
				pelicula.append('actores', $("#act").val());
				pelicula.append('action', 1);
				pelicula.append('anio', $("#anioEstreno").val());
				pelicula.append('duracion', $("#duracion").val());

				console.log(pelicula);

				$.ajax({

					  	type: 'POST',
					  	url: '../controller/mainController.php',
					  	data: pelicula,
					  	dataType: 'text',
					    contentType: false,
					    processData: false,		  	
					  	success: function(response){
					  		if(response!='1'){
					  			$("#resp").html("ERROR al guardar la película");
					  			$("#resp").css({"color": "red"});				
								$("#resp").css({"textAlign": "center"});
					  			console.log(response);
					  		}else{
					  			$("#resp").html("Película guardada");
					  			$("#resp").css({"color": "green"});				
								$("#resp").css({"textAlign": "center"});
					  			//console.log('entra al else');
					  			clear();
					  		}
					  	}
					});

			}else{
				$("#resp").html("Nombre de la película e imagen son campos obligatorios");
				$("#resp").css({"color": "red"});				
				$("#resp").css({"textAlign": "center"});
			}

		});

	});


	function clear(){
		$("#nombrePelicula").val("");
		$("#paisOrigen").val("");
		$("#director").val("");
		$("#anioEstreno").val("");
		$("#duracion").val("");
		$("#imagen").val("");
	}

</script>


</head>

<body>
	
	<form class="form-horizontal" style="margin: 5%; margin-left:0%" enctype="multipart/form-data" method="POST" action="">

		<div class="panel panel-success">

			<div class="panel-heading">Ingrese la informaci&oacute;n de la pel&iacute;cula:</div>
		      
		     <div class="panel-body">
		      	
		     	<div class="form-group has-success has-feedback">
			  		<label class="control-label col-sm-2" for="nombrePelicula">Nombre de la pel&iacute;cula:</label>
			    	<div class="col-sm-10">
			      		<input type="text" class="form-control" id="nombrePelicula" nombre="nombrePelicula" placeholder="Ingrese nombre de la película" required>
			    	</div>
			 	</div>

				 <div class="form-group has-success has-feedback">
				  	<label class="control-label col-sm-2">Seleccione una imagen:</label>
				  	<div class="col-sm-10">
				  		<img src="" class="img-thumbnail" alt="File Not Found" width="304" height="236"> 
				    	<input type="file" name="imagen" id="imagen" value="Seleccionar imagen" class="btn btn-default" required>
				 	</div>
				 </div>

				 <div class="form-group has-success has-feedback">
				  	<label class="control-label col-sm-2" for="paisOrigen">Pa&iacute;s de origen:</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="paisOrigen" name="paisOrigen" placeholder="Ingrese país de la película">
				    </div>
				 </div>

				 <div class="form-group has-success has-feedback">
				  	<label class="control-label col-sm-2" for="director">Director:</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="director" name="director" placeholder="Ingrese nombre del director">
				    </div>
				 </div>

				 <div class="form-group has-success has-feedback">
				  	<label class="control-label col-sm-2" for="act">Actores/Actrices:</label>
				    <div class="col-sm-10">
				      <textarea class="form-control" id="act" name="act" placeholder="Ingrese nombre de actores y actrices participantes">
				      </textarea>
				    </div>
				 </div>

				 <div class="form-group has-success has-feedback">
				  	<label class="control-label col-sm-2" for="anioEstreno">A&ntilde;o:</label>
				    <div class="col-sm-10">
				      <input type="number" class="form-control" id="anioEstreno" name="anioEstreno" placeholder="Ingrese año de estreno">
				    </div>
				 </div>

				 <div class="form-group has-success has-feedback">
				  	<label class="control-label col-sm-2" for="duracion">Duraci&oacute;n:</label>
				    <div class="col-sm-10">
				      <input type="number" class="form-control" id="duracion" name="duracion" placeholder="Dureción de la película (en minutos)">
				    </div>
			 	 </div>


			 	 <div class="form-group has-success has-feedback" id="resp">
				  	
			 	 </div>

		     	</div>
		
			</div>

			<button class="btn btn-default" id="save">Guardar</button>

		</div>	 
  	</form>

</body>
