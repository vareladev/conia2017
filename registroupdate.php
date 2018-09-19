<?php
	if (isset($_GET["correl"])){
		$correl = $_GET["correl"];
		include 'sql-open.php';
		$query = 'UPDATE `asistentes` SET `inscripcion` = 1 WHERE  `id` = '.$correl.';'; 
		$result = $con->query($query); 	
		include "sql-close.php";
		header("Location: registro.php?ok=1&correl=".$correl);
	} 
	else{
		echo "ERROR!!";
	}	
?>