<!DOCTYPE html>
<html>
<head>


	<?php

	session_start();

	if (!isset($_SESSION['loggedin']) && !$_SESSION['loggedin'] == true) {
		header('Location: ../index.php');
	}

	?>


	<meta charset="utf-8">

	<title>Cineclub</title>

	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


	<script type="text/javascript">
		
		$(document).ready(function(){
			
			//CARGA OP1 AL CARGAR LA PÁGINA
			cargarInit();

			
			//CARGA LA URL DEPENDIENDO DEL LI DE LA LISTA SELECCIONADO
    		$('body').on('click', '#options li', function(){
    			var id = $(this).attr('id');

			    switch(id){

				case '1':
						console.log("Abrir id: " + 1);
						$("#mainContainer").load("agregarPelicula.php");
					break;

				case '2':
						console.log("Abrir id: " + 2);
						$("#mainContainer").load("mostrarPeliculas.php");
					break;

				case '3':
						console.log("Abrir id: " + 3);
						$("#mainContainer").load("agregarFuncion.php");
					break;

				case '4':
						console.log("Abrir id: " + 4);
						$("#mainContainer").load("mostrarFunciones.php");
					break;

				case '5':
						console.log("Abrir id: " + 5);
						$("#mainContainer").load("agregarUsuario.php");
					break;

				case '6':
						console.log("Abrir id: " + 6);
						$("#mainContainer").load("mostrarUsuarios.php");
					break;

				case '7':
						console.log("Abrir id: " + 7);
						$("#mainContainer").load("editarPerfil.php");
					break;

				case '8':
						console.log("Abrir id: " + 8);

						var values = {action: 8};

						$.ajax({

						  	type: 'POST',
						  	url: '../controller/mainController.php',
						  	data: values,
						  	dataType: 'text',		  	
						  	success: function(response){
						  		if(response==1){
						  			document.location.href = '../Index.php';
						  		}else{
						  			console.log(response);
						  			//document.location.href = response;
						  		}
						  	}
						});

					break;
				}


			  });


		});


		function cargarInit()
		{
		      $("#mainContainer").load("agregarPelicula.php");
		}


	</script>



</head>
<body>

	<div class="container-fluid">
		

		<div class="col-sm-3 sidenav" style="margin-top: 2%">

			<ul id="options" class="nav nav-list" >
			  <li class="nav-header">Peliculas</li>
			  <li id="1" class="active"><a href="#">Agregar Pel&iacute;cula</a></li>
			  <li id="2" ><a href="#">Mostrar Pel&iacute;culas</a></li>

			  <li class="nav-header">Programaci&oacute;n</li>
			  <li id="3" class="active"><a href="#">Agregar funci&oacute;n</a></li>
			  <li id="4" ><a href="#">Ver funciones</a></li>

			  <li class="nav-header">Usuarios</li>
			  <li id="5" class="active"><a href="#">Agregar usuario</a></li>
			  <li id="6" ><a href="#">Ver usuarios</a></li>

			  <li class="nav-header">Mi cuenta</li>
			  <li id="7" class="active"><a href="#">Editar informaci&oacute;n</a></li>
			  <li id="8" ><a href="#">Cerrar Sesión</a></li>
			  
			</ul>

		</div>

	<!--<div style="width:75%; float:right;">-->
		<div id="mainContainer" class="col-sm-9">


			
		</div>
	</div>

</body>
</html>