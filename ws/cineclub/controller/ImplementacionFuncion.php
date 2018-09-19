<?php

	//require "../model/Connection.php";
	//require "../model/Pelicula.php";
	include_once "../model/Connection.php";


	/**
	* 
	*/
	class ImpFuncion
	{
		
		function __construct()
		{
			# code...
		}


		public function crearFuncion($funcion){

		$succes = false;
		//$id = NULL;

		try {

				$conn = new Connection();
				$connection = $conn->conectar();

				$query = $connection->prepare("INSERT INTO funcion VALUES(:id, :pelicula, :fecha, :hora)");
				$query->bindParam('id', $id = NULL, PDO::PARAM_NULL);
				$query->bindParam('pelicula', $funcion->getPelicula(), PDO::PARAM_STR);
				$query->bindParam('fecha', $funcion->getFecha(), PDO::PARAM_STR);
				$query->bindParam('hora', $funcion->getHora(), PDO::PARAM_STR);
				$query->execute();

				$succes = true;				
				
			} catch (Exception $e) {
				echo "Error: " . $e->getMessage();
			}

		return $succes;

		}


	}

?>