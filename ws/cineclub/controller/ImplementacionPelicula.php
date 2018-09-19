<?php

	//require "../model/Connection.php";
	//require "../model/Pelicula.php";
	include_once "../model/Connection.php";


	/**
	* 
	*/
	class ImpPelicula
	{
		
		function __construct()
		{
			# code...
		}


		//INSERTAR NUEVA PELICULA
		public function crearPelicula($pelicula){

		$succes = false;
		//$id = NULL;

		try {

				$conn = new Connection();
				$connection = $conn->conectar();

				$query = $connection->prepare("INSERT INTO pelicula VALUES(:id, :nombre, :pais, :director, :anio, :duracion, :imagen, :act)");
				$query->bindParam('id', $id = NULL, PDO::PARAM_NULL);
				$query->bindParam('nombre', $pelicula->getNombre(), PDO::PARAM_STR);
				$query->bindParam('pais', $pelicula->getPais(), PDO::PARAM_STR);
				$query->bindParam('director', $pelicula->getDirector(), PDO::PARAM_STR);
				$query->bindParam('anio', $pelicula->getAnio(), PDO::PARAM_STR);
				$query->bindParam('duracion', $pelicula->getDuracion(), PDO::PARAM_STR);
				$query->bindParam('imagen', $pelicula->getImagen(), PDO::PARAM_STR);
				$query->bindParam('act', $pelicula->getAct(), PDO::PARAM_STR);
				$query->execute();

				$succes = true;				
				
			} catch (Exception $e) {
				echo "Error: " . $e->getMessage();
			}

		return $succes;

		} 



		//MOSTRAT TODAS LAS PELICULAS
		public function mostrarPeliculas(){

			try {
				
				//ABRIR CONEXION
				$conn = new Connection();
				$connection = $conn->conectar();

				//SELECT Y GUARDAR TODOS EN $registros
				$consulta = $connection->prepare('SELECT * FROM pelicula');
		       	$consulta->execute();
		       	$registros = $consulta->fetchAll();

			} catch (Exception $e) {
				echo $e->getMessage();
			}

	       return $registros;

		}



		//BUSCAR PELICULAS POR NOMBRE
		public function buscarPorNombre($nombrePelicula){

			$registros;

			try {
				
				//ABRIR CONEXION
				$conn = new Connection();
				$connection = $conn->conectar();

				//SELECT Y GUARDAR TODOS EN $registros
				$consulta = $connection->prepare("SELECT * FROM pelicula WHERE nombre LIKE CONCAT('%', :nombre, '%')");
				$consulta->bindParam("nombre", $nombrePelicula, PDO::PARAM_STR);
		       	$consulta->execute();
		       	$registros = $consulta->fetchAll();

			} catch (Exception $e) {
				echo $e->getMessage();
			}

			return $registros;

		}


		//BUSCAR PELICULAS POR DIRECTOT
		public function buscarPorDirector($director){

			$registros;

			try {
				
				//ABRIR CONEXION
				$conn = new Connection();
				$connection = $conn->conectar();

				//SELECT Y GUARDAR TODOS EN $registros
				$consulta = $connection->prepare("SELECT * FROM pelicula WHERE director LIKE CONCAT('%', :director, '%')");
				$consulta->bindParam("director", $director, PDO::PARAM_STR);
		       	$consulta->execute();
		       	$registros = $consulta->fetchAll();

			} catch (Exception $e) {
				echo $e->getMessage();
			}

			return $registros;


		}


		//BUSCAR PELICULAS POR ACTOR
		public function buscarPorActor($actor){

			$registros;

			try {
				
				//ABRIR CONEXION
				$conn = new Connection();
				$connection = $conn->conectar();

				//SELECT Y GUARDAR TODOS EN $registros
				$consulta = $connection->prepare("SELECT * FROM pelicula WHERE actores LIKE CONCAT('%', :actores, '%')");
				$consulta->bindParam("actores", $actor, PDO::PARAM_STR);
		       	$consulta->execute();
		       	$registros = $consulta->fetchAll();

			} catch (Exception $e) {
				echo $e->getMessage();
			}

			return $registros;

		}


		/*//BUSCAR PELICULAS POR AÑO
		public function busarPorAnio($){

			$registros;

			try {
				
			} catch (Exception $e) {
				echo $e->getMessage();
			}

			return $registros;

		}


		//BUSCAR PELICULAS POR DURACION
		public function busarPorDuracion($){

			$registros;

			try {
				
			} catch (Exception $e) {
				echo $e->getMessage();
			}

			return $registros;

		}*/



	}



	

?>