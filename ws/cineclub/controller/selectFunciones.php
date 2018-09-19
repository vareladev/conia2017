<?php

	require "../model/Funcion.php";
	include_once "../model/Connection.php";

	try {
				
				//ABRIR CONEXION
				$conn = new Connection();
				$connection = $conn->conectar();

				//SELECT Y GUARDAR TODOS EN $registros
				$consulta = $connection->prepare("SELECT F.id AS id, P.nombre AS pelicula, F.fecha AS fecha, F.hora AS hora FROM pelicula P INNER JOIN funcion F ON P.id = F.pelicula");
		       	$consulta->execute();
		       	$registros = $consulta->fetchAll();


		       	$data = [];

				foreach($registros as $item){

					$id = $item['id'];
					$pelicula = $item['pelicula'];
					$fecha = $item['fecha'];
					$hora = $item['hora'];

      				$data[] = array('id'=>$id, 'pelicula'=>$pelicula, 'fecha'=>$fecha, 'hora'=>$hora);
					
      			}



	} catch (Exception $e) {
				echo $e->getMessage();
	}

	echo json_encode(array("data"=>$data));


?>