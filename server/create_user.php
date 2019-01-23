<?php
require_once "conexion.php";
if ($php_response["msg"]=="OK"){
	$u_exiten = mysqli_query($conexion, "SELECT * FROM usuarios");
	if (mysqli_num_rows($u_exiten) > 0 ){
		$php_response['obser']= "los usaurios ya existen ";

	}else{

		$email = "dustin@gmail.com";
		$nombre="Dustin Arroyo";
		$password =md5("1234dustin");
		$fecha_nacimiento = "2000/01/24";
		$crear = $conexion->prepare("INSERT INTO usuarios (email, nombre, password, fecha_nacimiento) VALUES (?,?,?,?)");
		$crear->bind_param("ssss", $email, $nombre, $password, $fecha_nacimiento);
		$crear->execute();

		$email = "sebastian@mansitogil.com";
		$nombre="Sebastian Rojas ";
		$password =md5("seba123");
		$fecha_nacimiento = "1990/12/04";
		$crear->bind_param("ssss", $email, $nombre, $password, $fecha_nacimiento);
		$crear->execute();

		$email = "christopher@mansitogil.com";
		$nombre="Christopher Rojas ";
		$password =md5("cristo123");
		$fecha_nacimiento = "1982/07/08";
		$crear->bind_param("ssss", $email, $nombre, $password, $fecha_nacimiento);
		$crear->execute();
	}
	$cumple = date('Y/m/d',strtotime("1982/07/08"));


}



 ?>
