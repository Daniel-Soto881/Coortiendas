<?php
require "../ConexionDataBase.php";
require "../Producto.php";
require "../Empleados.php";
require "../Solicitud_empleado.php";
extract($_REQUEST);
if (isset($_REQUEST['idSol']) && isset($_REQUEST['cc']) && isset($_REQUEST['accion'])) {
 $objEmpl= new Empleados();
  if ($_REQUEST['accion']=='si') {
    /* echo " , " . $_REQUEST['idSol'] . " , " . $_REQUEST['cc'] . " , " . $_REQUEST['accion']; */
    $objSol= new Solicitud_empleado();
    $objSol->aceptar_o_negar_Sol_emp($_REQUEST['idSol'],'1');
    $res_sol=$objSol->Consultar_Sol_emp($_REQUEST['idSol']);
    while ($sol=$res_sol->fetch_object()) {
      $Id_emp=$sol->doc_usu;
      $EstadoUsu_Id_est_usu='1';
      $Email_emp=$sol->Email_sol;
      $Pass_emp=$sol->Pass_sol;
      $Obser_emp=$sol->Sol_emp;
       $Solicitud_empleado_idSolicitud=$sol->Id_sol_emp;
      /* echo " " . $Id_emp . $EstadoUsu_Id_est_usu . $Email_emp . $Pass_emp . $Obser_emp . $Solicitud_empleado_idSolicitud; */

      $objEmpl->Crear_Empleado($Id_emp,$EstadoUsu_Id_est_usu,$Email_emp,$Pass_emp,$Obser_emp,$Solicitud_empleado_idSolicitud);
      $Conexion=Conectarse();
      /* $sql="INSERT INTO `empleados` (`ID_empl`, `Est_usu`, `Sol_empl`, `Email_empl`, `Pass_emp`, `Obser_empl`) VALUES ('$Id_emp', '1', '$Solicitud_empleado_idSolicitud', '$Email_emp', '$2y$10$cAFlUawnfYVhBWC8eCGXzO74.h1x0J1UAOi2Xkbm.75QHl6Xj1Fb.', 'Gran Administrador.');"; */

      $sql="INSERT INTO `empleados` 
    (`ID_empl`, `Est_usu`, `Sol_empl`, `Email_empl`   , `Pass_emp`, `Obser_empl`) VALUES 
    ('$Id_emp','$EstadoUsu_Id_est_usu','$Email_emp','$Pass_emp','$Obser_emp','$Solicitud_empleado_idSolicitud');";
    
$resultado=$Conexion->query($sql);
     
      
    } 
   
      /* echo "hola"; */
    $objEmpl->Agregar_Empleado();
    echo "<script type='text/javascript'>alert('Se ha aceptado la solicitud.');
     window.location='../../Vista/ListaSolicitud.php'; 
    </script>
    ";
  }elseif ($_REQUEST['accion']=='no') {
    $objSol= new Solicitud_empleado();
    $objSol->aceptar_o_negar_Sol_emp($_REQUEST['idSol'],'2');
    echo "<script type='text/javascript'>alert('Se ha denegado la solicitud.');
          window.location='../../Vista/ListaSolicitud.php';
          </script>
          ";
    
  }
  
}
?>