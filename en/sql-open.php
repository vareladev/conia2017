<?php
	
	$server_url = "localhost";
	$usuario = "conia2017";
	$password = "RSdadwd35dKdctMN";
	$bd = "conia2017";
	
	$con =  new mysqli($server_url, $usuario, $password, $bd);
	if (mysqli_connect_errno()) {
		die('Hubo un error: ' . mysqli_connect_error());
	}
?>