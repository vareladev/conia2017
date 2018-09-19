<?php
	$correl = $_POST["correlativo"];
	$tel = $_POST["telefono"];
	$email = $_POST["email"];

	$id = 0;

	if($correl != ""){
		//echo "busqueda por correlativo<br>";
		include 'sql-open.php';
		$query = 'Select `id`,`inscripcion`  from `asistentes` WHERE `id` = '.$correl.';';
		$result = $con->query($query); 	
		include "sql-close.php";
		if($row = $result->fetch_assoc()) {
			$id = $row["id"];
			$inscripcion = $row["inscripcion"];
		    //echo "encontrado!!!<br>".$nombre ."-".$apellido;
		    if($inscripcion == 0){
		    	header("Location: registroconfirm.php?correl=".$id."&b=1");	
		    }
		    else{
		    	header("Location: registro.php?error4=1&correl=".$correl);
		    }
		}
		else{
			echo "NO ENCONTRADO!!!";
			header("Location: registro.php?error1=1&correl=".$correl);
		}
	}else {
		if($tel != ""){
			echo "busqueda por telefono: ".$tel."<br>";
			$tel2 = "";
			for($i=0;$i<strlen($tel);$i++){
				if($i==4){
					$tel2 = $tel2."-".$tel[$i];	
				}
				else{
					$tel2 = $tel2.$tel[$i];	
				}
				
			}
			echo "busqueda por telefono: ".$tel2."<br>";

			$correl = 0;
			$inscripcion = 0;
			$query = 'Select `id`,`inscripcion`  from `asistentes` WHERE `telefono` = \''.$tel.'\' OR `telefono` = \''.$tel2.'\' LIMIT 1;';
			echo "query: ".$query."<br>";
			include 'sql-open.php';
			$result = $con->query($query); 	
			include "sql-close.php";
			echo "se cerro conexion<br>";
			if($row = $result->fetch_assoc()) {
				
				$correl = $row["id"];
				$inscripcion = $row["inscripcion"];
				if($inscripcion == 0){
			    	header("Location: registroconfirm.php?correl=".$correl."&b=2");
			    	//echo "encontrado<br>";	
			    }
			    else{
			    	header("Location: registro.php?error5=1&tel=".$tel);
			    }

			}
			else{
				header("Location: registro.php?error2=1&tel=".$tel);
			}
		}
		else{
			if($email != ""){
				echo "busqueda por correo: ".$email."<br>";
				$correl = 0;
				$inscripcion = 0;
				$query = 'Select `id`,`inscripcion`  from `asistentes` WHERE `email` = \''.$email.'\' LIMIT 1;';
				echo "query: ".$query."<br>";
				include 'sql-open.php';
				$result = $con->query($query); 	
				include "sql-close.php";
				echo "se cerro conexion<br>";
				if($row = $result->fetch_assoc()) {
					
					$correl = $row["id"];
					$inscripcion = $row["inscripcion"];
					if($inscripcion == 0){
				    	header("Location: registroconfirm.php?correl=".$correl."&b=3");
				    	//echo "encontrado<br>";	
				    }
				    else{
				    	header("Location: registro.php?error6=1&email=".$email);
				    }

				}
				else{
					header("Location: registro.php?error3=1&email=".$email);
				}
			}
		}
	}







?>