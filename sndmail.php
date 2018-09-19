<?php
	$name = $_POST["name"];
	$email = $_POST["email"];

	$mail = $_POST["message"];
	//Titulo
	$titulo = "[CONIA] ".$_POST["subject"];
	/*//cabecera
	$headers = "MIME-Version: 1.0\r\n"; 
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
	//dirección del remitente 
	$headers .= "From: ".$name." < ".$email." >\r\n";
	//Enviamos el mensaje a tu_dirección_email 
	$bool = mail("evarela@uca.edu.sv",$titulo,$mail,$headers);*/
	if( MAIL_NVLP($name, $email, "evarela@uca.edu.sv", $titulo, $mail) ){
		header ("location: contacto.php?sent=1");
	}else{
		header ("location: contacto.php?error=1");
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