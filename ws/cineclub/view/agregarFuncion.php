<head>

	<title>Agregar funci&oacute;n</title>

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

				$.ajax({
					  	type: 'POST',
					  	url: '../controller/selectLlenarLista.php',
					  	dataType: 'json',	  	
					  	success: function(json){
					  		console.log(json);
					  		$.each(json, function(id, nombre) {
            					$('#peliculas').append('<option value=' + id + '>' + nombre + '</option>');
        					});
					  	}
					});


				$("#save").click(function(){
					var peliculaE = $("select[name=peliculas]").val();
					var fechaE = $("#fecha").val();
					var horaE = $("#hora").val() + " : " + $("#min").val() + " " + $("#tiempo").val();
					
					if( (pelicula != null) && (fecha != "") && (hora != "")){

						var funcion = {	action: 7,
										pelicula: $("#peliculas").val(),
									   	fecha: $("#fecha").val(),
									   	hora: horaE};

						console.log(funcion);

						$.ajax({
						  	type: 'POST',
						  	url: '../controller/mainController.php',
						  	data: funcion,
						  	dataType: 'json',	  	
						  	success: function(response){
						  		if(response!='1'){
						  			$("#resp").html("ERROR al guardar la funcion");
						  			$("#resp").css({"color": "red"});				
									$("#resp").css({"textAlign": "center"});
						  			console.log(response);
						  		}else{
						  			$("#resp").html("Función registrada");
						  			$("#resp").css({"color": "green"});				
									$("#resp").css({"textAlign": "center"});
						  			clear();
						  		}
						  	}
						});

				    }else{
						$("#resp").html("Llene todos los campos");
						$("#resp").css({"color": "red"});				
						$("#resp").css({"textAlign": "center"});
					}

					
				});

	});


	function clear(){
		$("#peliculas").val("");
		$("#fecha").val("");
		$("#hora").val("");
		$("#min").val("");
		$("#tiempo").val("");
	}

</script>


</head>

<body>
	
	<form class="form-horizontal" style="margin: 5%; margin-left:0%" enctype="multipart/form-data" method="POST" action="">

		<div class="panel panel-success">

			<div class="panel-heading">Ingrese datos de la funci&oacute;n:</div>
		      
		     <div class="panel-body">
		      	
		     	<div class="form-group has-success has-feedback">
			  		<label class="control-label col-sm-2" for="nombrePelicula">Nombre de la pel&iacute;cula:</label>
			    	<div class="col-sm-10">
			      		<select id="peliculas" name="peliculas" size="4" multiple class="form-control" style="font-size: 24px; width: 50%">
			      		</select>
			    	</div>
			 	</div>

				 <div class="form-group has-success has-feedback">
				  	<label class="control-label col-sm-2">Ingrese fecha de la funci&oacute;n</label>
				  	<div class="col-sm-10">
			      		<input type="date" class="form-control" id="fecha" nombre="fecha" placeholder="Ingrese nombre de la película" required>
			    	</div>
				 </div>

				 <div class="form-group has-success has-feedback">
				  	<label class="control-label col-sm-2" for="paisOrigen">Seleccione la hora:</label>
				    <div class="col-sm-10">
				      <table>
				     		<tr>
				     			<td>
				     				<input type="number" name="hora" id="hora" max="12" min="0">
				     			</td>
				     			<td>
				     				<input type="number" name="min" id="min" max="59" min="0">
				     			</td>
				     			<td>
				     				<select name="tiempo" id="tiempo" class="form-control">
				     					<option value="AM">AM</option>
				     					<option value="PM">PM</option>
				     				</select>
				     			</td>
				     		</tr>
				     		<tr>
				     			<td>Hora</td>
				     			<td>Minutos</td>
				     		</tr>
				      </table>
				    </div>
				 </div>


			 	 <div class="form-group has-success has-feedback" id="resp">
				  	
			 	 </div>

		     	</div>
		
			</div>

			<input type="button" class="btn btn-default" id="save" value="Guardar">

		</div>	 
  	</form>

</body>
