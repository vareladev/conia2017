<?php

	require "../model/Pelicula.php";
	include_once "../model/Connection.php";

	try {
				
				//ABRIR CONEXION
				$conn = new Connection();
				$connection = $conn->conectar();

				//SELECT Y GUARDAR TODOS EN $registros
				$sql = "SELECT * FROM pelicula ORDER BY nombre DESC";

		       	$data = [];

		       	foreach($connection->query($sql) as $item){
		       		$data[$item['id']] = $item['nombre'];
				}



	} catch (Exception $e) {
				echo $e->getMessage();
	}

	print_r(json_encode($data));


?>