<?php
require_once "conexion.php";
	if (!$conexion->error){
		session_start();
		if ($_SESSION['agendaID']){
			$id=$_POST["id"];
			$borrar= mysqli_query($conexion, "DELETE FROM  agenda where id =  '$id' ");
			$php_reponse["msg"]="OK";
			$php_reponse["extra"]=$_POST["id"];

		}else{
			$php_reponse["msg"]="La sesion a caducado ";
		}

	}else{
		$php_reponse["msg"]="No se pudo conectar con el servidor";

	}
	echo json_encode($php_reponse);



 ?>
