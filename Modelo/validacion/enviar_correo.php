<?php


if (isset($_REQUEST['enviar'])) {
  require "../ConexionDataBase.php";

require "../Cliente.php";
require "../Empleados.php";
  $conectarse=Conectarse();
  if (!isset($_SESSION['Cliente'])|| !isset($_SESSION['Empleado'])) {
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];

  }else if (isset($_SESSION['Cliente'])) {
    $objCliente=new Cliente();

      $sql=$objCliente->ConsultarCliente($_SESSION['Cliente']);
       
   
   $Clie=$resultado->fetch_array();
    $name=$Clie['Id_clie'];
    $email=$Clie['email_clie'];

    }else if (isset($_SESSION['Empleado'])) {
      $objEmpleado=new Empleados();
      $sql=$objEmpleado->Consultar_Empleado($_SESSION['Empleado']);

    
   $emp=$resultado->fetch_array();
    $name=$emp['ID_empl'];
    $email=$emp['Email_empl'];
    }
   
  $subject=$_REQUEST['subject'];
  $message=$_REQUEST['message'];

    $header="From:" . $email . "\r\n";
    $header.="Raply-To:2002.llerilingonzalez@gmail.com" . "\r\n";
    $header.="X-Mailer:PHP/" . phpversion();
    $correo=@mail($email,$subject,$message,$header);

    if ($correo) {
      echo "<script type='text/javascript'>alert('Se ha enviado correctamente su mensaje, gracias.');
          window.location='../../Vista/contacto.php';
          </script>
          ";
    }else {
      echo "<script type='text/javascript'>alert('Lo sentimos, el correo no pudo sser enviado, intente nuevamente.');
      window.location='../../Vista/contacto.php';
      </script>
      ";
    }
}
?>