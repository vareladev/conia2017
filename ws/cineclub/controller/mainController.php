<?php

	require_once "../model/Pelicula.php";
	require "implementacionPelicula.php";

	require_once "../model/Usuario.php";
	require "implementacionUsuario.php";

	require_once "../model/Funcion.php";
	require "implementacionFuncion.php";



	$action = $_POST['action'];

	//Acción a ejecutar
	switch ($action) {

		//INSERTAR PELICULA
		case 1:

				$responseInsert = 0;

				//OBJETO PELICULA E IMPLEMENTACION PELICULA
				$pelicula = new Pelicula();

				try {

					$fileError = $_FILES['img']['error'];
					$fileSize = $_FILES['img']['size'];
					$fileTmpName = $_FILES['img']['tmp_name'];

					$ruta = validarImg($fileError, $fileSize, $fileTmpName);

					//if(($ruta != 0) && ($ruta != 1) && ($ruta != 2) && ($ruta != 3)){

					if($ruta != 'Error de imagen'){

						$pelicula->setNombre($_POST['nombre']);
						$pelicula->setPais($_POST['pais']);
						$pelicula->setDirector($_POST['director']);
						$pelicula->setAct($_POST['actores']);
						$pelicula->setAnio($_POST['anio']);
						$pelicula->setDuracion($_POST['duracion']);
						$pelicula->setImagen($ruta);

						$nuevaPelicula = new impPelicula();

						//LLAMADA A MÉTODO PARA INSERTAR
				  		$responseInsert = $nuevaPelicula->crearPelicula($pelicula);

					
					}
					

				} catch (Exception $e) {
					echo $e->getMessage();
				}
				

		  		if($responseInsert){
		  			echo $responseInsert;
		  		}else{
		  			echo $responseInsert;
		  		}
			
			break;
		

		//LOGIN
		case 2:
			
				$response = 0;

				try{

					$usuario = new Usuario();
					$usuario->setNombreUsuario($_POST['userName']);
					$usuario->setPassword($_POST['password']);

					$usuarioValidar = new ImpUsuario();

					$response = $usuarioValidar->login($usuario);


				}catch(Exception $e){
					echo $e->getMessage();
				}

				if($response){

					session_start();
					$_SESSION['loggedin'] = true;
					$_SESSION['user'] = $usuario->getNombreUsuario();
					$_SESSION['start'] = time();
					$_SESSION['expire'] = $_SESSION['start'] + (20 * 60);


		  			echo 1;
		  		}else{
		  			echo 0;
		  		}

			break;


		//CREAR NUEVO USUARIO
		case 3:

				$response = 0;

				try {

					$usuario = new Usuario();
					$usuario->setNombreUsuario($_POST['userName']);
					$usuario->setPassword($_POST['password']);
					$usuario->setApellidos($_POST['apellidos']);
					$usuario->setNombres($_POST['nombres']);
					$usuario->setEmail($_POST['email']);

					$usuarioNuevo = new ImpUsuario();

					$response = $usuarioNuevo->crearUsuario($usuario);

					
				} catch (Exception $e) {
					echo $e->getMessage();
				}


				echo $response;

			break;



		//MOSTRAR TODAS LAS PELICULAS
		case 4:

				try{

				$peliculas = new impPelicula();

				$pelicualsRecuperadas = $peliculas->mostrarPeliculas();
				
				$data = [];

				foreach($pelicualsRecuperadas as $item){

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
				

			}catch(Exception $e){
				echo $e->getMessage();
			}

			echo json_encode($data);


			break;



		//BUSCAR PELICULA POR ACTOR
		case 5:

				try{

				$peliculas = new impPelicula();
				$pelicualsRecuperadas = $peliculas->buscarPorActor("don-");
				
				$data = [];

				foreach($pelicualsRecuperadas as $item){

					$id = $item['id'];
					$nombre = $item['nombre'];
					$pais = $item['pais'];
					$director = $item['director'];
					$actores = $item['actores'];
					$anio = $item['anio'];
					$duracion = $item['duracion'];
					$imagen = $item['imagen'];

      				$data[] = array('id'=>$id, 'nombre'=>$nombre, 'pais'=>$pais, 'director'=>$director, 'anio'=>$anio,  
      					'duracion'=>$duracion, 'imagen'=>$imagen, 'actores'=>$actores);
					
      			}	

			}catch(Exception $e){
				echo $e->getMessage();
			}
      		
				
      		echo json_encode($data);


			break;



		//MOSTRAR TODOS LOS USUARIOS
		case 6:

			try{

				$usuarios = new ImpUsuario();

				$usuariosRecuperados = $usuarios->mostrarTodos();
				
				$data = [];

				foreach($usuariosRecuperados as $item){

      				$userName = $item['nombreUsuario'];
      				$apellidos = $item['apellidos'];
      				$nombres = $item['nombres'];
      				$email = $item['email'];

      				$data[] = array('nombreUsuario'=>$userName, 'apellidos'=>$apellidos, 'nombres'=>$nombres, 'email'=>$email);
					
      			}

      		
				
      		echo json_encode($data);	

			}catch(Exception $e){
				echo $e->getMessage();
			}

			break;


		//CREAR NUEVA FUNCION
		case 7:

			$response = 0;

				try {

					$funcion = new Funcion();
					$funcion->setPelicula($_POST['pelicula'][0]);
					$funcion->setFecha($_POST['fecha']);
					$funcion->setHora($_POST['hora']);
					$nuevaFuncion = new ImpFuncion();

					$response = $nuevaFuncion->crearFuncion($funcion);

					
				} catch (Exception $e) {
					echo $e->getMessage();
				}

				echo $response;

			break;


		//CERRAR SESION
		case 8:

			try{

					$usuarioSesion = new ImpUsuario();

					$response = $usuarioSesion->logout();

			}catch(Exception $e){
				$e->getMessage();
			}

			if($response){
				echo 1;
			}else{
				echo $response;
			}

			break;


		//OBTENER INFO DE MI PERFIL
		case 9:

			try{

				$usuarioBuscado = new ImpUsuario();

				$usuario = $usuarioBuscado->obtenerPerfil($_POST['username']);
				
				//$data[] = array('nombreUsuario'=>$userName, 'contrasenia'=>$password, 'apellidos'=>$apellidos, 'nombres'=>$nombres, 'email'=>$email);

      		
				
      		echo json_encode($usuario);
      		//echo $usuario;	

			}catch(Exception $e){
				echo $e->getMessage();
			}

			break;


	}


	function prove($valor){
		return json_encode($valor);
	}


	function validarImg($error, $size, $name){

		$ruta = 'Error de imagen';

		try {
              //VALIDAR SI EL ARCHIVO TIENE ERRORES O SE RECIBEN MULTIPLES ARCHIVOS
              if (!isset($error) || is_array($error)) {
              	  $ruta = 0;
                  //throw new RuntimeException('Parámetros inválidos');
              }

              //VALIDAR TIPO DE ERROR
              switch ($error) {
                  case UPLOAD_ERR_OK:
                      break;
                  case UPLOAD_ERR_NO_FILE:
                      throw new RuntimeException('No se envio ningún archivo');
                  case UPLOAD_ERR_INI_SIZE:
                  case UPLOAD_ERR_FORM_SIZE:
                      throw new RuntimeException('Se excede tamaño máximo de archivo');
                  default:
                      throw new RuntimeException('Error desconocido');
              }

              //VALIDAR QUE ARCHIVO NO SEA MUY GRANDE 
              if ($size > 1000000) {
              	  $ruta = 1;
                  //throw new RuntimeException('El tamaño del archivo es demasiado grande');

              }

              //VALIDAR QUE SOLO SE RECIBA UNA IMAGEN (.jpg, .png, .gif)
              $finfo = new finfo(FILEINFO_MIME_TYPE);
              if (false === $ext = array_search($finfo->file($name), 
                  array(
                      'jpg' => 'image/jpeg',
                      'png' => 'image/png',
                      'gif' => 'image/gif',
                  ), true
              )) {
              	  $ruta = 2;
                  //throw new RuntimeException('Formato de archivo no válido');
              }

              //DAR AL ARCHIVO UN NOMBRE UNICO Y GUARDAR RUTA
              $ruta = sprintf('../resources/movies/%s.%s', sha1_file($name), $ext);

              if (!move_uploaded_file($name, $ruta)) {
              	  $ruta = 3;
                  //throw new RuntimeException('Error cargando archivo en el servidor');
              }


          } catch (RuntimeException $e) {

              echo $e->getMessage();

          }

          return $ruta;

	}

?>