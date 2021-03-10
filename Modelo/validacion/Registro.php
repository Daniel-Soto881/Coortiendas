<?php
require "../ConexionDataBase.php";
require "../Cliente.php";
require "../Empleados.php";
require "../EstadoUsu.php";
require "../Solicitud_empleado.php";
require "../TipUsu.php";
require "../TipoDoc.php";

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
          $feh_ini= new DateTime($_REQUEST["FechNac"]);
          $feh_fin=date("Y-m-d H:i:s ");
          $Fech_Sol=  new DateTime(date("Y-m-d H:i:s "));
          $objEmpleado=new Solicitud_empleado();
          $Est_sol_emp='3'; 
          $diferencia_edad = $Fech_Sol->diff($feh_ini);
          if (($diferencia_edad->format("%y"))>17) {
           
          
         
          $tipo = $_FILES['IMG']['type'];
          
          
          $tamano_img = $_FILES['IMG']['size']; 
          
         
          if ((( strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png"))) &&($tamano_img <= 2000000)) {
            $valor_sql=$_FILES['IMG']['name'];
            /* echo $valor_sql; */
            /* $tipo_img=end(explode("." , $valor_sql)); */
            $info = new SplFileInfo($valor_sql);
           // $tipo_img=$info->getBasename('.'.$info->getExtension());
           $tipo_img=pathinfo($info->getExtension(), PATHINFO_FILENAME);
            echo $tipo_img;
$ruta_img="../../Imagenes/img_empl/" . $_REQUEST["cc"] . "." . $tipo_img;
/* echo "-------" . $ruta_img;
          $rut_antes=$_FILES["IMG"]['tmp_name']; */
          copy($rut_antes,$ruta_img); 
            /* $edadNac=$_REQUEST['FechNac'].getYear();
          echo"<script type='text/jaascript'>alert(" . $edadNac . ");
          
          </script>";

          /* var Xmas95 = new Date('December 25, 1995 23:15:30');
          var day = Xmas95.getDate(); */
        /*  echo $Est_sol_emp . "---" . $_REQUEST["Cargo"]  . "---" .  $_REQUEST["Tip_doc"]  . "---" . $_REQUEST["cc"]  . "---" . $_REQUEST["Solic"]   . "---" . $_REQUEST["email"]   . "---" . $_REQUEST["Name"]  . "---" . $pass . "---" . $_REQUEST["FechNac"]   . "---" . $feh_fin . "---" .  $tipo_img ;  */

          $objEmpleado->Crear_Sol_eml($Est_sol_emp,$_REQUEST["Cargo"] , $_REQUEST["Tip_doc"] ,$_REQUEST["cc"] ,$_REQUEST["Solic"]  ,$_REQUEST["email"]  ,$_REQUEST["Name"] ,$pass,$_REQUEST["FechNac"]  ,$feh_fin, $tipo_img  );   
          
          echo $objEmpleado->Agregar_Sol_emp();
               
          echo "<script type='text/javascript'>alert('Se ha enviado la solicitud de registro, se le notificará la respuesta por medio de su correo, gracias.');
          window.location='../../Vista/index.php';
          </script>
          ";
          }else {
            echo "<script type='text/javascript'>alert('La imagen excede el número maximo de 200 kb o el tipo de imagen(png,jpeg,jpg)');
          window.location='../../Vista/index.php';
          </script>
          ";
         }
        }else {
          echo "<script type='text/javascript'>alert('El usuario debe de tener como mínimo 18 años para poder realizar la solicitud de registro.');
        window.location='../../Vista/index.php';
        </script>
        ";
       }
        }else {
          echo "<script type='text/javascript'>alert('Ya se encuentra registradó un usuario con el mismo correo o identificación, intente nuevamente.');
          window.location='../../Vista/frmregistro.php';
          </script>
          ";
        }

        }else {
          echo "<script type='text/javascript'>alert('Ya se realizó una solicitud de registro con ese email o identificación, intente nuevamente.');
          window.location='../../Vista/frmregistro.php';
          </script>
          ";
        }
      }
    }
/* fin del if de inicio de sesion */
?> 