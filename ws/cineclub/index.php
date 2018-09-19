<!DOCTYPE html>
<html>
<head>

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


			$("#aceptar").click(function(){

				var values = {action: 2, userName: $('#userName').val(), password: $('#password').val()};

				console.log(values);


				$.ajax({

				  	type: 'POST',
				  	url: 'controller/mainController.php',
				  	data: values,
				  	dataType: 'text',		  	
				  	success: function(response){
				  		if(response!=1){
				  			$("#resp").html("Credenciales inválidas");
				  			$("#resp").css({"color": "red"});
				  			console.log(response);
				  		}else{
				  			document.location.href = "view/mainPage.php";
				  		}
				  	}
				});

			});



		});
		
		


	</script>


</head>
<body>

<form class="container">
	<div class="form-group has-success has-feedback">
		<label for="userName">Nombre de Usuario:</label>
		<input type="text" name="userName" id="userName" class="form-control" placeholder="Por favor ingresa tu nombre de usuario" style="width:50%">
	</div>
	<div class="form-group has-success has-feedback">
		<label for="userName">Contrase&ntilde;a:</label>
		<input type="password" name="password" id="password" class="form-control" placeholder="Por favor ingresa tu contraseña" style="width:50%">
	</div>
	<div class="form-group has-success has-feedback">
		<label id="resp"></label>
	</div>
	<button type="button" name="aceptar" class="btn btn-success" id="aceptar">Aceptar</button>
</form>
		
</body>
</html>