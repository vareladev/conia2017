<?php

	class Usuario{

		private $nombreUsuario;
		private $password;
		private $apellidos;
		private $nombres;
		private $rol;
		private $email;


		function __construct()
    	{
        	
    	}


		//SETTERS
		public function setNombreUsuario($nombreUsuario){
			$this->nombreUsuario = $nombreUsuario;
		}

		public function setPassword($password){
			$this->password = $password;
		}

		public function setApellidos($apellidos){
			$this->apellidos = $apellidos;
		}

		public function setNombres($nombres){
			$this->nombres = $nombres;
		}

		public function setRol($rol){
			$this->rol = $rol;
		}
		
		public function setEmail($email){
			$this->email = $email;
		}


		//GETTERS
		public function getNombreUsuario(){
			return $this->nombreUsuario;
		}

		public function getPassword(){
			return $this->password;
		}

		public function getApellidos(){
			return $this->apellidos;
		}

		public function getNombres(){
			return $this->nombres;
		}

		public function getRol(){
			return $this->rol;
		}
		
		public function getEmail(){
			return $this->email;
		}


	}

?>