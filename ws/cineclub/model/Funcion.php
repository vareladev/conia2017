<?php

	class Funcion{

		private $id;
		private $pelicula;
		private $fecha;
		private $hora;


		function __construct()
    	{
        	
    	}


		//SETTERS
		public function setId($id){
			$this->id = $id;
		}

		public function setPelicula($pelicula){
			$this->pelicula = $pelicula;
		}

		public function setFecha($fecha){
			$this->fecha = $fecha;
		}

		public function setHora($hora){
			$this->hora = $hora;
		}


		//GETTERS
		public function getId(){
			return $this->id;
		}

		public function getPelicula(){
			return $this->pelicula;
		}

		public function getFecha(){
			return $this->fecha;
		}

		public function getHora(){
			return $this->hora;
		}


	}

?>