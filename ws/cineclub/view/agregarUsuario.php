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

			$("#save").click(function(e){

				var user = {action: 3,
							userName: $("#userName").val(),
							password: $("#password").val(),
							apellidos : $("#apellidos").val(),
							nombres: $("#nombres").val(),
							email: $("#email").val()
							};

				console.log(user);

				$.ajax({

					  	type: 'POST',
					  	url: '../controller/mainController.php',
					  	data: user,
					  	dataType: 'text',		  	
					  	success: function(response){
					  		alert('i am in response');
					  		alert(typeof(response));
					  		alert('response is: ' + response);
					  		if (response == "") {
					  			alert("fuck");
					  		}
					  		if(response=='1'){
					  			$("#resp").html("Usuario creado");
					  			$("#resp").css({"color": "green"});
					  			alert(response);
					  			clear();					  			
					  		}
					  		if (response == '0') {
					  			$("#resp").html("ERROR al crear usuario");
					  			$("#resp").css({"color": "red"});
					  			alert(response);
					  		}

					  		if (response == '2') {
					  			$("#resp").html("ERROR, el nombre de usuario ya existe");
					  			$("#resp").css({"color": "red"});
					  			alert(response);
					  		}
					  	},
				       error: function(requestObject, error, errorThrown) {
				            alert(error);
				            alert(errorThrown);
				       }
					});

			});

		});


		function clear(){
			$("#userName").val("");
			$("#password").val("");
			$("#apellidos").val("");
			$("#nombres").val("");
			$("#email").val("");
		}


</script>


</head>

<body>
	
	<form class="form-horizontal" style="margin: 5%; margin-left:0%" enctype="multipart/form-data" method="POST" action="">

		<div class="panel panel-success">

			<div class="panel-heading">Ingrese Datos del usuario:</div>
		      
		     <div class="panel-body">
		      	
		     	<div class="form-group has-success has-feedback">
			  		<label class="control-label col-sm-2" for="userName">Nombre de usuario:</label>
			    	<div class="col-sm-10">
			      		<input type="text" class="form-control" id="userName" nombre="userName" placeholder="Ingrese nombre de usuario" required>
			    	</div>
			 	</div>

				 <div class="form-group has-success has-feedback">
				  	<label class="control-label col-sm-2" for="password">Contrase&ntilde;a:</label>
				    <div class="col-sm-10">
				      <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese Contraseña" required>
				    </div>
				 </div>

				 <div class="form-group has-success has-feedback">
				  	<label class="control-label col-sm-2" for="apellidos">Apellidos:</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Ingrese apellidos" required>
				    </div>
				 </div>

				 <div class="form-group has-success has-feedback">
				  	<label class="control-label col-sm-2" for="nombres">Nombres:</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Ingrese nombres" required>
				    </div>
				 </div>

				 <div class="form-group has-success has-feedback">
				  	<label class="control-label col-sm-2" for="email">Correo electr&oacute;nico:</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="email" name="email" placeholder="Ingrese una dirección de correo electrónico">
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
