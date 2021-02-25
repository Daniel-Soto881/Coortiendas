<?php
require "../Modelo/ConexionDataBase.php";
require "../Modelo/Producto.php";
require "../Modelo/TipProd.php";
require "../Modelo/Solicitud_empleado.php";
 if (!isset($_SESSION['Cargo']) || $_SESSION['Cargo']!='4' ) {//administrador
header('index.php');

} 
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

        <div id="sidebar" class="sidebar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light.scrolled.awake ftco-navbar-light.scrolled ">
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
              <div class="log-arrow-up"></div>
          <ul class="menu">
            
            <br>
            <?php
             if ( isset($_SESSION['Empleado']) && $_SESSION['Cargo']=='3' ) {
              echo '
            <li><a href="frmNewProducto.php">Ingresar producto</a></li>';}elseif (isset($_SESSION['Empleado']) && $_SESSION['Cargo']=='4') {
              echo '
            <li><a href="ListaSolicitud.php">Solicitudes ade empleados</a></li>';
            }
            ?>
              <li>
                <a href="frmActualizarUsu.php"><i class="icon_key_alt"></i> Actualizar Datos Personales</a>
              </li>
              <li>
                <a href="../Modelo/CerrarSesion.php"><i class="icon_key_alt"></i> Cerrar Sesion</a>
              </li>
            
        </div>
          
            </ul>
        </div> <br><br>

    <div class="containerr" style=".product {
    margin-top: 0%;
    margin-left: 0%;
    margin-right: 0%;
  
    height: 100%;
    display: flex;
    width: 100%;
    color: #1a2537;
    font-size: 20px;
    text-align: center;
    
}">
      <div class="rower" style="
    width: 120%;
    /* margin-right: 0; */
    margin-left: -10%;">
        <div class="">
        <h1>Solicitudes Activas</h1><br>
            <br><br><br>
            <div class="search-form-area animated" style="margin-left: 10%">
                        <form action="#" method="post">
                            <input type="search" name="search" id="search" placeholder="¿Que Buscas?">
                            <button type="submit" class="d-none btn mosh-btn" value="buscar">Buscar</button>
                        </form>
                    </div>
            <div class="form-group">
            <div class="product">
            
              <table width="100%" border="1" align="center"style="
    width: 110%;
    margin-left: 3%;
    /* height: 10%; */
    color: #0d7d07;
    font-size: 20px;
">
                
  <tr style="
    color: black;
">
 
      <td>Identificación</td>
      <td>Estado</td>
      <td>Cargo</td>
      <td>CC</td>
      <td>Descripción</td>
      <td>Nombres</td>
      <td>Email</td>
      <td>Realizada el:</td>
      <td>Aceptar</td>
      <td>Denegar</td>
  
  </tr> 
  <?php
  $obj_solic= new Solicitud_empleado();
  $res=$obj_solic->Consultar_Soles_emp('3');
  while ($solic =$res->fetch_object()) {
    echo ' <tr >
 
  <td>' . $solic->Id_sol_emp . '</td>
  <td>' . $solic->nam_est_sol . '</td>
  <td>' . $solic->nam_tip_usu . '</td>
  <td>' . $solic->doc_usu . '</td>
  <td>' . $solic->Sol_emp . '</td>
  <td>' . $solic->Nombre . '</td>
  <td>' . $solic->Email_sol . '</td>
  <td>' . $solic->Fecha_sol . '</td>
  <td><a href="../Modelo/validacion/ValidacionSolic.php?idSol=' . $solic->Id_sol_emp . '&cc=' . $solic->doc_usu . '&accion=si">Aceptar</a></td>
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