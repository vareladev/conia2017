<?php

	require "../model/Usuario.php";
	include_once "../model/Connection.php";

	try {
				
				//ABRIR CONEXION
				$conn = new Connection();
				$connection = $conn->conectar();

				//SELECT Y GUARDAR TODOS EN $registros
				$consulta = $connection->prepare('SELECT nombreUsuario, apellidos, nombres, email FROM usuario');
		       	$consulta->execute();
		       	$registros = $consulta->fetchAll();

		       	$data = [];

				foreach($registros as $item){

					$nombreUsuario = $item['nombreUsuario'];
					$apellidos = $item['apellidos'];
					$nombres = $item['nombres'];
					$email = $item['email'];

      				$data[] = array('nombreUsuario'=>$nombreUsuario, 'apellidos'=>$apellidos, 'nombres'=>$nombres, 'email'=>$email);
					
      			}


	} catch (Exception $e) {
				echo $e->getMessage();
	}

	echo json_encode(array("data"=>$data));


?>