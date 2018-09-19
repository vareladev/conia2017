<?php

	require "../model/Pelicula.php";
	include_once "../model/Connection.php";

	try {
				
				//ABRIR CONEXION
				$conn = new Connection();
				$connection = $conn->conectar();

				//SELECT Y GUARDAR TODOS EN $registros
				$consulta = $connection->prepare('SELECT * FROM pelicula');
		       	$consulta->execute();
		       	$registros = $consulta->fetchAll();


		       	$data = [];

				foreach($registros as $item){

					$id = $item['id'];
					$nombre = $item['nombre'];
					$pais = $item['pais'];
					$director = $item['director'];
					$actores = $item['actores'];
					$anio = $item['anio'];
					$duracion = $item['duracion'];
					$imagen = $item['imagen'];

      				$data[] = array('id'=>$id, 'nombre'=>$nombre, 'pais'=>$pais, 'director'=>$director, 'actores'=>$actores, 'anio'=>$anio,  
      					'duracion'=>$duracion, 'imagen'=>$imagen);
					
      			}



	} catch (Exception $e) {
				echo $e->getMessage();
	}

	echo json_encode(array("data"=>$data));


?>