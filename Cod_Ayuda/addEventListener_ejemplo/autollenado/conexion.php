<?php
//Archivo de conexion
$con = mysqli_connect("localhost", "root", "", "autollenado");
if(mysqli_connect_errno()){
	echo "Error al conectar a MySql: ".mysqli_connect_error();
}
mysqli_set_charset($con,"utf8");
?>