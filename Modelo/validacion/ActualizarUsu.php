<?php

require "../ConexionDataBase.php";
require "../Cliente.php";
require "../Empleados.php";
require "../EstadoUsu.php";
require "../Solicitud_empleado.php";
require "../TipUsu.php";
require "../TipoDoc.php";
session_start();
if (isset ($_REQUEST["Continuar"])) {
  
  extract($_REQUEST);
  /* echo $_REQUEST['Name'] . $_REQUEST['email']; */
  if ($_REQUEST['Pass_3']==$_REQUEST['Pass_2']) {
   
    if (isset($_SESSION['Cliente'])) {
      $Conexion=Conectarse();
      $sql="select * from est_usu,cliente where (est_usu.Id_est_usu=cliente.Est_clie) and Id_clie='$_SESSION[Cliente]';";
      $resultado=$Conexion->query($sql);
      while ($Clie=$resultado->fetch_array() ) {
           /*  echo $_REQUEST['Pass_1'] . $Clie['Pass_clie']; */
        if (password_verify($_REQUEST['Pass_1'], $Clie['Pass_clie'] )) {

          $pass=password_hash($_REQUEST['Pass_2'], PASSWORD_DEFAULT,['cost' => 10]);

          $objClien = new Cliente();
          $objClien->Crear_Cliente('1',$_REQUEST['Name'],$_REQUEST['email'],$pass);
          $objClien->Actualizar_Cliente($_SESSION['Cliente']);
          echo "<script type='text/javascript'>alert('Se ha actualizado su usuario, gracias.');
          window.location='../../Vista/index.php';
           </script>
           ";
        }else {
          echo "<script type='text/javascript'>alert('La contraseña es no es la almacenada, intente nuevamente.');
         window.location='../../Vista/frmActualizarUsu.php';
          </script>
          ";
        }
      }
      echo "<script type='text/javascript'>alert('dgdfg');
      /* window.location='../../Vista/frmActualizarUsu.php'; */
       </script>
       ";

      
      
    
    
    }elseif (isset($_SESSION['Empleado'])) {
      $Conexion=Conectarse();
      $sql="select * from empleados,solic_emp where ID_empl='$_SESSION[Empleado]' and (empleados.Sol_empl=solic_emp.Id_sol_emp) ;";
      $resultado=$Conexion->query($sql);
      while ($emp=$resultado->fetch_array() ) {
            
        if (password_verify($_REQUEST['Pass_1'], $emp['Pass_emp'] )) {

          $pass=password_hash($_REQUEST['Pass_2'], PASSWORD_DEFAULT,['cost' => 10]);

          $objemp= new Empleados();
         
          $objemp->Crear_mismoEmpleado($_REQUEST['Name'],$_REQUEST['email'],$pass,' ',' ');
          $objemp->Actualizar_MismoEmpleado($_SESSION['Empleado']);
          echo "<script type='text/javascript'>alert('Se ha actualizado su usuario, gracias.');
          window.location='../../Vista/index.php';
           </script>
           ";
        }else {
          echo "<script type='text/javascript'>alert('La contraseña es no es la almacenada, intente nuevamente.');
         window.location='../../Vista/frmActualizarUsu.php';
          </script>
          ";
        }
      
      
    }
  }
  
}else {
  echo "fgdfg";
  echo "<script type='text/javascript'>alert('Las contraseñas no coinciden, intente nuevamente');
    window.location='../../Vista/frmActualizarUsu.php';
    </script>
    ";
}
}
?>