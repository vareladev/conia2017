<?php

	include_once "../model/Connection.php";

	/**
	* 
	*/
	class ImpUsuario
	{
		
		function __construct()
		{
			# code...
		}


		//VALIDAR NOMBRE DE USUARIO Y CONTRASEÑA
		public function login($usuario){

			try {

					$conn = new Connection();
					$connection = $conn->conectar();

					$query = $connection->prepare("SELECT * FROM usuario WHERE nombreUsuario=:userName AND contrasenia=:password");
					$query->bindParam('userName', $usuario->getNombreUsuario(), PDO::PARAM_STR);
					$query->bindParam('password', $usuario->getPassword(), PDO::PARAM_STR);
					$query->execute();

					$count=$query->rowCount();
					$data=$query->fetch(PDO::FETCH_OBJ);

					if($count){
						return true;
					}else{
						return false;
					}
					
				} catch (Exception $e) {
					echo "Error: " . $e->getMessage();
				}
		
		}


		public function logout(){

			$response = false;

			try {
				
                 session_start();
				 unset ($_SESSION['user']);
				 session_destroy();

				 $response = true;

			} catch (Exception $e) {
				$e->getMessage();
			}

			return $response;

		}


		//INSERTAR NUEVO USUARIO
		public function crearUsuario($usuario){

			$resultado = 0;
			$coincidencias = 0;

			try{

				//ABRIR CONEXION
				$conn = new Connection();
				$connection = $conn->conectar();

				//QUERY PARA CONTAR SI EL NOMBRE DE USUARIO YA EXISTE
				$select = "SELECT COUNT(*) FROM usuario WHERE nombreUsuario = :userName";
				$stm = $connection->prepare($select);
				$stm->bindParam('userName', $usuario->getNombreUsuario(), PDO::PARAM_STR);
				$stm->execute(); 

				$number_of_rows = $stm->fetchColumn(); 

				//COMPRUEBO SI SE DEVUELVE NUMERO DE FILAS
				if ($number_of_rows > 0) {
					$coincidencias = 1;
				}else{
					$coincidencias = 0;
				}
				

				//SI NO HAY COINCIDENCIAS CON EL NOMBRE DE USUARIO, INSERTO EL NUEVO USUARIO
				if($coincidencias == 0){

					$query = $connection->prepare("INSERT INTO usuario VALUES(:nombreUsuario, :pass, :apellidos, :nombres, :email, :rol)");
					$query->bindParam('nombreUsuario', $usuario->getNombreUsuario(), PDO::PARAM_NULL);
					$query->bindParam('pass', $usuario->getPassword(), PDO::PARAM_STR);
					$query->bindParam('apellidos', $usuario->getApellidos(), PDO::PARAM_STR);
					$query->bindParam('nombres', $usuario->getNombres(), PDO::PARAM_STR);
					$query->bindParam('email', $usuario->getEmail(), PDO::PARAM_STR);
					$query->bindParam('rol', $rol = 0, PDO::PARAM_INT);
					$query->execute(); 

					$resultado = 1;

				}else{
					$resultado = 2;
				}

					
				

			}catch(Exception $e){
				echo "Error: " . $e->getMessage();
			}


			return $resultado;

		}


		//MOSTRAR TODOS LOS USUARIOS
		public function mostrarTodos(){

			try {
				
				//ABRIR CONEXION
				$conn = new Connection();
				$connection = $conn->conectar();

				//SELECT Y GUARDAR TODOS EN $registros
				$consulta = $connection->prepare('SELECT nombreUsuario, apellidos, nombres, email FROM usuario');
		       	$consulta->execute();
		       	$registros = $consulta->fetchAll();

			} catch (Exception $e) {
				echo $e->getMessage();
			}

	       return $registros;

		}



		public function obtenerPerfil($userName){

			try {
				
				//ABRIR CONEXION
				$conn = new Connection();
				$connection = $conn->conectar();

				//SELECT Y GUARDAR TODOS EN $registros
				$consulta = $connection->prepare('SELECT * FROM usuario WHERE nombreUsuario = :user');
				$consulta->bindParam('user', $userName, PDO::PARAM_NULL);
		       	$consulta->execute();
		       	$registro = $consulta->fetch();

			} catch (Exception $e) {
				echo $e->getMessage();
			}

	       return $registro;

		}



	}



	



		



?>