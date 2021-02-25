<?php
require "../ConexionDataBase.php";
require "../TipUsu.php";
require "../Cliente.php";
require "../Empleados.php";
/* require "../TipUsu.php"; */
if (isset($_REQUEST['ini_sesion'])) {
  session_start();
  extract ($_REQUEST);
$conectarse=Conectarse();
/* password_hash->se encarga de encriptar contraseñas, y el PASSWORD_DEFAULT hace que cada vez se encrite y quede diferente */
/* $pass=password_hash($_REQUEST['pass'], PASSWORD_DEFAULT,['cost' => 10]); */
      if ($_REQUEST["usu"]=="Cliente"){ 
       
          
        $sql="select * from est_usu,cliente where (est_usu.Id_est_usu=cliente.Est_clie) and email_clie='$_REQUEST[correo]';";
        $resultado=$conectarse->query($sql);
        $si_o_no= $resultado->num_rows;
        if ($si_o_no==1) {
          while ($Clie=$resultado->fetch_array() ) {
            
            if (password_verify($_REQUEST['pass'], $Clie['Pass_clie'] )) {

              $_SESSION['Cliente']=$Clie['Id_clie'];
              echo "<script type='text/javascript'>alert('Bienvenido.');
              window.location='../../Vista/index.php'; 
              </script>
              ";/* $fila = mysql_fetch_array($resultado, MYSQL_ASSOC */
            }else {
              echo "<script type='text/javascript'>alert('El usuario ingresado no se relaciona con la contraseña, intente nuevamente.');
             window.location='../../Vista/frmlogin.php';
              </script>
              ";
            }
          }
        }else {
          echo "<script type='text/javascript'>alert('No se encontró usuario, intente nuevamente.');
          window.location='../../Vista/frmlogin.php';
          </script>
          ";
        }
        
      
        
      }else if ($_REQUEST["usu"]=="Empleado"){
        $sql="select * from empleados,solic_emp,est_usu where  (empleados.Sol_empl=solic_emp.Id_sol_emp) and (empleados.Est_usu=est_usu.Id_est_usu) and Email_empl='$_REQUEST[correo]' and Tip_usu='$_REQUEST[Cargo]' and ID_empl='$_REQUEST[cc_empl]' and Est_usu='1'";
        $resultado=$conectarse->query($sql);

        $si_o_no= $resultado->num_rows;
        if ($si_o_no==1) {
          while ($Empl=$resultado->fetch_array()) {
            if (password_verify($_REQUEST['pass'],$Empl['Pass_emp'])) {
              $_SESSION['Empleado']=$Empl['ID_empl'];
              $_SESSION['Cargo']=$Empl['Tip_usu'];
              echo "<script type='text/javascript'>window.location='../../Vista/index.php';</script>
              ";
            }else {
              echo "<script type='text/javascript'>alert('No se encontró un usuario con esas caracteristicas, intente nuevamente.');
              window.location='../../Vista/frmlogin.php';
              </script>
              ";
              
            }
          }
        }else {
          echo "<script type='text/javascript'>alert('No se encontró usuario, intente nuevamente.');
          window.location='../../Vista/frmlogin.php';
          </script>
          ";
        }
      }

}/* fin del if de inicio de sesion */
?> 