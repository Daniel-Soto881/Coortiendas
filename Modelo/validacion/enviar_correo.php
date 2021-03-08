<?php
require "../ConexionDataBase.php";
if (isset($_REQUEST['enviar'])) {
  if (!isset($_SESSION['Cliente'])|| !isset($_SESSION['Empleado'])) {
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];

  }else if (isset($_SESSION['Cliente'])) {
      $sql="SELECT `Id_clie`, `Est_clie`, `Nam_clie`, `email_clie` from `cliente` where `Id_clie`= " . $_SESSION['Cliente'] . ";";
       $resultado=$conectarse->query($sql);
    $si_o_no= $resultado->num_rows;
   $Clie=$resultado->fetch_array()
    $name=$Clie['Id_clie'];
    $email=$Clie['email_clie'];

    }else if (isset($_SESSION['Empleado'])) {
      $sql="SELECT `ID_empl`, `Est_usu`, `Sol_empl`, `Email_empl`, `Obser_empl`, `img_eml` from `empleados` where `ID_empl`= '$_SESSION['Empleado']';";
       $resultado=$conectarse->query($sql);
    $si_o_no= $resultado->num_rows;
   $emp=$resultado->fetch_array()
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
          /* window.location='../../Vista/frmlogin.php'; */
          </script>
          ";
    }
}
?>