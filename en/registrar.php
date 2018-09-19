<?php
	$nombre1 = $_POST["nombre1"];
	$nombre2 = $_POST["nombre2"];
	$ape1 = $_POST["appellido1"];
	$ape2 = $_POST["appellido2"];
	$tel = $_POST["tel"];
	$gen = $_POST["genero"];
	$estu = $_POST["estudiante"];
	$insti = $_POST["institucion"];
	$institucion = "";
	if($insti == 2){
		$institucion = $_POST["institucionx"];
	}
	else{
		$institucion = "UCA";
	}
	$mail = $_POST["email"];
	$area = $_POST["carrera"];
	if($area == 8){
		$area = $_POST["areax"];
	}
	
	
	echo $nombre1." ".$nombre2." ".$ape1." ".$ape2."<br>";
	echo "telefono: ".$tel."<br>";
	echo "genero (1 femenino, 2 masculino): ".$gen."<br>";
	echo "estudiante (0 no, 1 si): ".$estu."<br>";
	echo "institucion: ".$institucion."<br>";
	echo "email: ".$mail."<br>";
	echo "carrera: ".$area;
	
	include 'sql-open.php';
	$query = 'INSERT INTO `asistentes`
			(`nombre1`, `nombre2`, `apellido1`, `apellido2`, `telefono`, `genero`, `estudiante`, `institucion`, `email`, `area`) 
			VALUES 
			(\''.$nombre1.'\',\''.$nombre2.'\',\''.$ape1.'\',\''.$ape2.'\',\''.$tel.'\','.$gen.','.$estu.',\''.$institucion.'\',\''.$mail.'\',\''.$area.'\');';
	echo $query;
	//mysql_query($query) or die('failed query :( : ' . mysql_error());
	$result = $con->query($query); 	
	include "sql-close.php";
	
	header("Location: inscripcion.php?reg=1")
?>