<?php
require "../Modelo/ConexionDataBase.php";
require "../Modelo/Cliente.php";
require "../Modelo/DetalleFactura.php";
require "../Modelo/Empleados.php";
require "../Modelo/Empre_Prov.php";
require "../Modelo/EstadoFac.php";
require "../Modelo/EstadoMovimiento.php";
require "../Modelo/EstadoProd.php";
require "../Modelo/EstadoProv.php";
require "../Modelo/EstadoUsu.php";
require "../Modelo/Factura.php";
require "../Modelo/Inventario_has_DetalleFactura.php";
require "../Modelo/Inventario.php";
require "../Modelo/Movimiento_Inventario.php";
require "../Modelo/Producto.php";
require "../Modelo/Promociones.php";
require "../Modelo/TipoPago.php";
require "../Modelo/TipUsu.php";


if (isset($_REQUEST["Continuar"])) {
  session_start();
  extract ($_REQUEST);
  $Conexion=Conectarse();  

  $

}

?>