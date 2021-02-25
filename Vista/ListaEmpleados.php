<?php
require "../Modelo/ConexionDataBase.php";
require "../Modelo/Producto.php";
require "../Modelo/TipProd.php";
require "../Modelo/Solicitud_empleado.php";
/* if (!isset($_SESSION['Cargo']) && $_SESSION['Cargo']!='4' ) {//administrador
header ('index.php');
} */
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Inicio</title>
    <meta charset="utf-8">
    <link rel="icon" href="../Imagenes\F.png">    
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">

    <link rel="stylesheet" href="../css/animate.css">
    
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
  </head>
  
<body>
  <nav class="bg-dark navbar " id="ftco-navbar" data-aos="fade-down" >
      <ul style="text-align:center;">
        <li>
        <img style="width: 50%; align-content: left;" src="../Imagenes/Logo.png">
        </li>
      </ul>
    </nav>

        <input type="checkbox" id="abrir-cerrar" name="abrir-cerrar" value="">
        <label for="abrir-cerrar">&#9776;
          <span class="abrir">Menu</span>
          <span class="cerrar">Cerrar</span>
          
              
            </ul>
          </li></div>
          
        </label>

        <div id="sidebar" class="sidebar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light.scrolled.awake ftco-navbar-light.scrolled "
        <div class="login-register-btn" style="  margin-top: 0%;" >
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava"><i class="icon_profile"></i> Mi Perfil
                                <img class="user" src="../Imagenes/user.png" alt="Ver info" title="User" style="width:18%; margin-top: 1%; margin-right: 2% ">
                            </span>
                            <span class="username"></span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>>
          <ul class="menu">
            <li><strong><a href="index.php">Lista Productos</a></strong></li><br>
            <li><a href="frmNewProducto.php">Ingresar producto</a></li>
              <li>
                <a href="frmActualizarUsu.php"><i class="icon_key_alt"></i> Actualizar Datos Personales</a>
              </li>
              <li>
                <a href="../Modelo/CerrarSesion.php"><i class="icon_key_alt"></i> Cerrar Sesion</a>
              </li>
            
        </div>
          
            </ul>
        </div> <br><br>

    <div class="containerr">
      <div class="rower">
        <div class="">
            <br><br><br>
            <div class="search-form-area animated" style="margin-left: 10%">
                        <form action="#" method="post">
                            <input type="search" name="search" id="search" placeholder="¿Que Buscas?">
                            <button type="submit" class="d-none btn mosh-btn" value="buscar">Buscar</button>
                        </form>
                    </div>
            <div class="form-group">
            <div class="product">
              <table width="89%" border="0" align="center">
                <tr> <h1>Solicitudes Activas</h1> </tr>
  <tr align="center" bgcolor="#FFFF99">
 
    <td width="11%">Identificación</td>
    <td width="16%">Estado</td>
    <td width="16%">Cargo</td>
    <td width="16%">CC</td>
    <td width="12%">Descripción</td>
    <td width="19%">Nombres</td>
    <td width="19%">Email</td>
    <td width="19%">Realizada el:</td>
    <td width="19%">Aceptar</td>
    <td width="19%">Denegar</td>
  
  </tr> 
  <?php
  $obj_solic= new Solicitud_empleado();
  $res=$obj_solic->Consultar_Soles_emp('3');
  while ($solic =$res->fetch_object()) {
    echo ' <tr align="center" bgcolor="#FFFF99">
 
  <td width="11%">' . $solic->Id_sol_emp . '</td>
  <td width="16%">' . $solic->nam_est_sol . '</td>
  <td width="16%">' . $solic->nam_tip_usu . '</td>
  <td width="16%">' . $solic->doc_usu . '</td>
  <td width="12%">' . $solic->Sol_emp . '</td>
  <td width="19%">' . $solic->Nombre . '</td>
  <td width="19%">' . $solic->Email_sol . '</td>
  <td width="19%">' . $solic->Fecha_sol . '</td>
  <td width="19%"><a href="../Modelo/validacion/ValidacionSolic.php?idSol=' . $solic->Id_sol_emp . '&cc=' . $solic->doc_usu . '&accion=si">Aceptar</a></td>
  <td width="19%"><a href="../Modelo/validacion/ValidacionSolic.php?idSol=' . $solic->Id_sol_emp . '&cc=' . $solic->doc_usu . '&accion=no">Denegar</a></td>

</tr> ';}
  ?>
      </table>     </div>
          </div>
        </div>  


    <script src="../js/jquery.min.js"></script>
    <script src="../js/jquery-migrate-3.0.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap2.min.js"></script>
    <script src="../js/jquery.waypoints.min.js"></script>
    <script src="../js/jquery.stellar.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/aos.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="../js/google-map.js"></script>
    <script src="../js/main.js"></script>

    <!-- jQuery-2.2.4 js -->
    <script src="../js/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="../js/Motpopper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="../js/Onebootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="../js/plugins.js"></script>
    <!-- Active js -->
    <script src="../js/active.js"></script>
        
</body>
</html>