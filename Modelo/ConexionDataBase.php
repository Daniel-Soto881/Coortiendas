<?php
function Conectarse(){
  $Conexion=new mysqli("localhost","root","","coortiendas_a");
  if ($Conexion->connect_errno) {
    echo "<script type='text/javascript'>
      alert('Error en la base de datos.' . $Conexion->connect_errno . '</script> " . 
      exit(); 
  }else{
    return $Conexion;
  }
}
?>