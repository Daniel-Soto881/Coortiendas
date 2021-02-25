<?php
require "../ConexionDataBase.php";
require "../Cliente.php";
require "../Empleados.php";
require "../EstadoUsu.php";
require "../Solicitud_empleado.php";
require "../TipUsu.php";
require "../TipoDoc.php";
/* require "../TipUsu.php"; */
extract ($_REQUEST);
if (isset($_REQUEST['Registrarse'])) {
  session_start();
  
$conectarse=Conectarse();
$objTipUsu= new TipUsu();
$res_TipUsu=$objTipUsu->Consultar_TipUsu();

/* password_hash->se encarga de encriptar contraseñas, y el PASSWORD_DEFAULT hace que cada vez se encrite y quede diferente */
$pass=password_hash($_REQUEST['Pass'], PASSWORD_DEFAULT,['cost' => 10]);
      if ($_REQUEST["usu"]=="Cliente"){
       
          
        $sql="select * from cliente where email_clie='$_REQUEST[email]' ";
        $resultado=$conectarse->query($sql);
        $si_o_no= $resultado->num_rows;

        if ($si_o_no==0) {

          $estUsu='1';
          $objCliente=new Cliente();
          
          $objCliente->Crear_Cliente($estUsu,$_REQUEST["Name"],$_REQUEST["email"],$pass);
          $objCliente->Agregar_Cliente();
         
        

          echo "<script type='text/javascript'>alert('Se ha registrado correctamente, ahora puede ingresar al sistema de información para obtener todos los beneficios.');
          window.location='../../Vista/frmlogin.php';
          </script>
          ";
        }else {
          echo "<script type='text/javascript'>alert('Esta Cuenta de usuario ya se encuentra registrada, intente nuevamente.');
          window.location='../../Vista/frmregistro.php';
          </script>
          ";
        }
        
      
        
      }else if ($_REQUEST["usu"]=="Empleado"){
        $sql="select * from solic_emp where Email_sol='$_REQUEST[email]' or doc_usu='$_REQUEST[cc]'";
        $res_1=$conectarse->query($sql);

        $si_o_no_1= $res_1->num_rows;
        if ($si_o_no_1==0) {
          $sql_2="select * from empleados where Email_empl='$_REQUEST[email]' or ID_empl='$_REQUEST[cc]' ";
          $res_2=$conectarse->query($sql_2);

         $si_o_no_2= $res_2->num_rows;
         if ($si_o_no_2==0) {
          date_default_timezone_set("America/Bogota");
          $Fech_Sol= date("Y-m-d H:i:s ");
          $objEmpleado=new Solicitud_empleado();
          $Est_sol_emp='3'; 
          /* $edadNac=$_REQUEST['FechNac'].getYear();
          echo"<script type='text/javascript'>alert(" . $edadNac . ");
          
          </script>"; */

          /* var Xmas95 = new Date('December 25, 1995 23:15:30');
          var day = Xmas95.getDate(); */
          $objEmpleado->Crear_Sol_eml($Est_sol_emp,$_REQUEST["Cargo"] ,$_REQUEST["Tip_doc"] ,$_REQUEST["cc"] ,$_REQUEST["Solic"]  ,$_REQUEST["email"]  ,$_REQUEST["Name"] ,$pass  ,$_REQUEST["FechNac"]  ,$Fech_Sol );
          
          $objEmpleado->Agregar_Sol_emp();
          echo "<script type='text/javascript'>alert('Se ha enviado la solicitud de registro, se le notificará la respuesta por medio de su correo, gracias.');
          window.location='../../Vista/index.php';
          </script>
          ";
        }else {
          echo "<script type='text/javascript'>alert('Este usuario ya se encuentra registradó, intente nuevamente.');
          window.location='../../Vista/frmregistro.php';
          </script>
          ";
        }

        }else {
          echo "<script type='text/javascript'>alert('Este usuario ya realizó solicitud de registro, intente nuevamente.');
          window.location='../../Vista/frmregistro.php';
          </script>
          ";
        }
      }

}/* fin del if de inicio de sesion */
?> 