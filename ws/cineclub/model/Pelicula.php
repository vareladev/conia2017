<?php
	
	/**
	* 
	*/
	class Pelicula 
	{


		private $id;
		private $nombre;
		private $pais;
		private $director;
		private $actores;
		private $anio;
		private $duracion;
		private $imagen;


		
		function __construct()
		{
			
		}


		//SETTERS

		public function setId($id){
			$this->id = $id;
		}


		public function setNombre($nombre){
			$this->nombre = $nombre;
		}

		public function setPais($pais){
			$this->pais = $pais;
		}

		public function setDirector($director){
			$this->director = $director;
		}

		public function setAct($act){
			$this->actores = $act;
		}

		public function setAnio($anio){
			$this->anio = $anio;
		}

		public function setDuracion($duracion){
			$this->duracion = $duracion;
		}

		public function setImagen($imagen){
			$this->imagen = $imagen;
		}



		//GETTERS
		public function getId(){
			return $this->id;
		}

		public function getNombre(){
			return $this->nombre;
		}

		public function getPais(){
			return $this->pais;
		}

		public function getDirector(){
			return $this->director;
		}

		public function getAct(){
			return $this->actores;
		}

		public function getAnio(){
			return $this->anio;
		}

		public function getDuracion(){
			return $this->duracion;
		}

		public function getImagen(){
			return $this->imagen;
		}


	}

?>