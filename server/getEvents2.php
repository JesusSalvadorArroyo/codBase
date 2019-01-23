<?php
	$conexion = new mysqli("localhost", "root", "", "calendario2_db");
	if ($conexion){
		session_start();
		if ($_SESSION['agendaID']){
			$eventos= mysqli_query($conexion, "SELECT * FROM agenda where fk_usuario = 1");
			$row_eventos = mysql_fetch_assoc($eventos);
			$php_reponse["eventos"]= array();

			do {
				$php_reponse["eventos"]['id']= $row_eventos['id'];
				$php_reponse["eventos"]['title']=$row_eventos['titulo'];
				$php_reponse["eventos"]['start']=$row_eventos['fecha_inicio'];
			}	while ($row_eventos = mysql_fetch_assoc($eventos));


		}else{
			$php_reponse["msg"]="La secion a caducado ";
		}

	}else{
		$php_reponse["msg"]="No se pudo conectar con el servidor";

	}
	 print_r($php_reponse);





 ?>
