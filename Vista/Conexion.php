<?php 
	$host = 'localhost';
	$user = 'root';
	$password = '';
	$db = 'coortiendas_a';

	$conection = @mysqli_connect($host,$user,$password,$db);

	if (!$conection) {
		echo "Error en la conexión";
	}else{
	}

 ?>