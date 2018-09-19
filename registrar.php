<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
</head>
<body>
<?php
	$nombre1 = $_POST["nombre1"];
	$nombre2 = $_POST["nombre2"];
	$ape1 = $_POST["appellido1"];
	$ape2 = $_POST["appellido2"];
	$tel = $_POST["tel"];
	$gen = $_POST["genero"];
	$nivel = $_POST["nivel"];
	$insti = $_POST["institucion"];
	$info = $_POST["info"];
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
	$ponente = $_POST["ponente"];
	$torneo = $_POST["rubik"];
	
	echo $nombre1." ".$nombre2." ".$ape1." ".$ape2."<br>";
	echo "telefono: ".$tel."<br>";
	echo "genero (1 femenino, 2 masculino): ".$gen."<br>";
	echo "institucion: ".$institucion."<br>";
	echo "nivel academico: ".$nivel."<br>";	
	echo "email: ".$mail."<br>";
	echo "carrera: ".$area."<br>";
	echo "como se entero: ".$info."<br>"."<br>";
	
	include 'sql-open.php';
	$con->query("SET NAMES 'utf8'");
	$query = 'INSERT INTO `asistentes`
			(`nombre1`, `nombre2`, `apellido1`, `apellido2`, `telefono`, `genero`, `nivel`, `institucion`, `email`, `area`, `ponente`, `info`, `torneo`) 
			VALUES 
			(\''.$nombre1.'\',\''.$nombre2.'\',\''.$ape1.'\',\''.$ape2.'\',\''.$tel.'\','.$gen.',\''.$nivel.'\',\''.$institucion.'\',\''.$mail.'\',\''.$area.'\',\''.$ponente.'\',\''.$info.'\','.$torneo.');';
	echo $query;
	//mysql_query($query) or die('failed query :( : ' . mysql_error());
	$result = $con->query($query); 	

	include "sql-close.php";

	include 'sql-open.php';
	$numero = 0;
    $query = 'Select `id` from `asistentes` order by id desc limit 1;';
    $result = $con->query($query); 	
    while($row = $result->fetch_assoc()) {
        $numero = $row["id"];
    }
	include "sql-close.php";

	//mandando correo de cpmfor,acopm
	$name = "CONIA2017";
	$Emisor = "conia@uca.edu.sv";
	$Receptor = $_POST["email"];
	$Mensaje = 
	"Gracias por inscribirte en CONIA 2017. Guarda este n&uacute;mero de identificaci&oacute;n: ".$numero.", te ser&aacute; util el d&iacute;a del congreso.";
	$titulo = "[CONIA] Confirmación de inscripción";
	if( MAIL_NVLP($name, $Emisor, $Receptor , $titulo, $Mensaje) ){
		if($torneo == 1){
			header("Location: inscripcion.php?reg=1&rbk=1");	
		}else{
			header("Location: inscripcion.php?reg=1");	
		}
	}else{
		header("Location: inscripcion.php?error=1");
	}

	function MAIL_NVLP($fromname, $fromaddress, $toaddress, $subject, $message)
	{
	   // Copyright ? 2005 ECRIA LLC, http://www.ECRIA.com
	   // Please use or modify for any purpose but leave this notice unchanged.
	   $headers  = "MIME-Version: 1.0\n";
	   $headers .= "Content-type: text/plain; charset=iso-8859-1\n";
	   $headers .= "X-Priority: 3\n";
	   $headers .= "X-MSMail-Priority: Normal\n";
	   $headers .= "X-Mailer: php\n";
	   $headers .= "From: \"".$fromname."\" <".$fromaddress.">\n";
	   return mail($toaddress, $subject, $message, $headers);
	}
?>
</body>
</html>