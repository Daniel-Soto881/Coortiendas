<?php
require "../Modelo/ConexionDataBase.php";
require "../Modelo/Producto.php";
require "../Modelo/TipProd.php";
$objProd= new Producto(); 
$ret_Tot=$objProd->Consultar_Producto();
$res_Prod=$objProd->Consultar_Productos();

/* $sql_t="select * from tip_prod"; */
$objTipProd= new TipProd();
$Tip_prod_res=$objTipProd->Consultar_Prod_TipProd();
/* $conectarse=Conectarse();
$Tip_prod_res=$conectarse->query($sql_t); */
session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Productos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <link rel="icon" href="../Imagenes/F.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">

    <script src="js/Estilojs.js"></script>
    <link rel="stylesheet" href="../css/sttlee.css">
    
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <link rel="stylesheet" href="../css/aos.css">
    <link href="../css/responsive-color.css" rel="stylesheet">

    <link rel="stylesheet" href="../css/ionicons.min.css">
    <link rel="stylesheet" href="../css/sstlee.css">
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/animateda.css">
  </head>
  
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" data-aos="fade-down" data-aos-delay="500">
      <div class="container" style=" margin-left: 7%">
        <a class="navbar-brand" href="Inicio.html"><img style="width: 50%;" src="../Imagenes/Logo.png"></a>
      </div>
      <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menú
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="contactos.php" class="nav-link">Contáctenos</a></li>
            <li class="nav-item"><a href="index.php" class="nav-link"><strong style="color: green;"> Productos </strong></a></li>
          </ul>
        <!-- ALMACENISTA-3 -->  
          
          <?php
          /* if (isset($_SESSION['Empleado']) ) {
              echo '<input type="checkbox" id="abrir-cerrar" name="abrir-cerrar" value="">
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
                    <div class="log-arrow-up"></div>
                <ul class="menu">
                  <li><strong><a href="indexempleados.php">Lista Productos</a></strong></li>
                  ';
                  if ( $_SESSION['Cargo']=='3' ) {
                    echo '
                  <li><a href="frmNewProducto.php">Ingresar producto</a></li>';}elseif ($_SESSION['Cargo']=='4') {
                    echo '
                  <li><a href="ListaSolicitud.php">Solicitudes ade empleados</a></li>';
                  }
                  echo'
                    <li>
                      <a href="frmActualizarUsu.php"><i class="icon_key_alt"></i> Actualizar Datos Personales</a>
                    </li>
                    <li>
                      <a href="CerrarSesion.php"><i class="icon_key_alt"></i> Cerrar Sesion</a>
                    </li>
                  
              </div>
                
                  </ul>
              </div> <br><br>';


          }
 */
          if (isset($_SESSION['Cliente']) || isset($_SESSION['Empleado'])) {
            
            echo '
              <div class="login-register-btn">
                                   <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img class="user" src="../Imagenes/user.png" alt="Ver info" title="User" style="width: 20%; margin-top: 1%; margin-right: 1% ">
                            </span>
                            <span class="username"></span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="#"><i class="icon_profile"></i> Mi Perfil</a>
              </li>
              <li>
                <a href="frmActualizarUsu.php"><i class="icon_key_alt"></i> Actualizar Datos</a>
              </li>
              <li>
                <a href="../Modelo/CerrarSesion.php"><i class="icon_key_alt"></i> Cerrar Sesion</a>
              </li>
              ';
                  if ( isset($_SESSION['Empleado']) && $_SESSION['Cargo']=='3' ) {
                    echo '
                  <li><a href="frmNewProducto.php">Ingresar producto</a></li>';}elseif (isset($_SESSION['Empleado']) && $_SESSION['Cargo']=='4') {
                    echo '
                  <li><a href="ListaSolicitud.php">Solicitudes ade empleados</a></li>';
                  }
                  echo'
            </ul>
          </li>
                               </div>';}else if (!isset($_SESSION['Cliente'])|| !isset($_SESSION['Empleado'])) {
                                echo '
                                <div class="login-register-btn" >
                                   <a href="frmlogin.php"><font style="vertical-align: inherit; font-size: 15px;"><font style="vertical-align: inherit;">Iniciar Sesion</font></font></a><br>
                                   <a href="frmregistro.php"><font style="vertical-align: inherit; font-size: 12px;"><font style="vertical-align: inherit;">Registrarse</font></font></a>
                               </div>
                                ';
                              }
                      ?>                                             
        </div>
      </div>
    </nav>
    <!-- END nav -->

    <section class="contenido wrapper">
   <div class="slider">
      <ul>
        <li><a href="#"><img class="sli" src="../Imagenes/slider.jpg" alt=""></a></li>
        <li><a href="#"><img class="sli" src="../Imagenes/slider1.jpg" alt=""></a></li>
        <li><a href="#"><img class="sli" src="../Imagenes/slider2.jpg" alt=""></a></li>
        <li><a href="#"><img class="sli" src="../Imagenes/slider3.jpg" alt=""></a></li><li>
        <li><a href="#"><img class="sli" src="../Imagenes/slider.jpg" alt=""></a></li>
      </ul>
    </div>
  </section>
    <!-- END section -->

<section class="mosh-team-area section_padding_100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="section-heading text-center">
                        <h2><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tipos de productos a la venta</font></font></h2>
                    </div>
                </div>
            </div>
              <div class="row">
                <div class="col-12">
                    <div class="mosh-team-slides owl-carousel">
                        <!-- Single Team Slide -->
                        <?php 
                    while ($tp_prod=$Tip_prod_res->fetch_object()) {
                      
                      echo '<div class="single-team-slide text-center">
                      <!-- Thumbnail -->
                      <div class="single-team-slide team-thumbnail">
                          <img src="data:image/jpg||png;base64,' . base64_encode($tp_prod->img_prod) . '" alt="">
                      </div>
                      <!-- Meta Info -->
                      <div class="team-meta-info">
                          <h4 onclick="muestra();" value=" Tip_' . $tp_prod->Id_tip_prod . '">' . $tp_prod->Nam_tip_prod . '</h4>
                      </div>
                      <!-- Social Info -->
                      </div>' ; 
                    } 

                    ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>


  <div class="ftco-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-5">
        <div class="col-md-7 text-center"  data-aos="fade-up">
          <h2>Productos</h2>
        </div>
      </div>

                    <div class="search-form-area animated">
                        <form action="#" method="post">
                            <input type="search" name="search" id="search" placeholder="¿Que Buscas?">
                            <button type="submit" class="d-none"><img src="img/core-img/search-icon.png" alt="Buscar"></button>
                        </form>
                    </div>
                <!-- Search btn -->
                  <br>
<div class="row">
<?php
while ($prod_todo=$res_Prod->fetch_object()) {
echo '
<div class="col-md-6 col-lg-4" data-aos="fade-up">
          <a href="frmActualizarProducto.php?idProd=' . $prod_todo->Id_prod . '" class="block-5" style="background-image: url(\'data:image/jpg||png;base64,' . base64_encode($prod_todo->img_prod) . '\'); ">
            <div class="text">
              <div class="subheading"></div>
              <h3 class="heading">' . $prod_todo->Nam_prod . ' - ' . $prod_todo->Tam_prod . '- $ ' . $prod_todo->Val_prod . ' </h3>
              ';
              /* if (isset($_SESSION['Cargo']) && $_SESSION['Cargo']=='1') {//supervisor
               echo '<h3 class="" > <a href="frmActualizarProducto.php ?Id_prod=' . $prod_todo->Id_prod .'" >Actualizar </a></h3>';
              } */
              echo '
              <div class="post-meta">
                <span>Buscamos darte lo mejor</span>
              </div>
            </div>
          </a>
        </div>
';
}
?><a href=""></a>
      </div>


    </div>
  </div>

  <!-- ***** CTA Area Start ***** -->
    <section class="mosh-call-to-action-area bg-img bg-overlays section_padding_100" style="background-image: url(../Imagenes/Foto.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content text-center fadeIn" data-wow-delay="0.5s">
                        <div class="section-heading">
                                 <h2>¿Alguna duda?</h2>
                            <button type="submit" class="mosh-btn original-btn"><a href="contacto.php">Contactanos</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** CTA Area End ***** -->

  
  <footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-8">
          <div class="row">
            <div class="col-md">
              <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">Acerca de CHANGING WORLD</h2>
                <ul class="list-unstyled">
                  <li><a href="Sobree.php" class="py-2 d-block">¿Quiénes somos?</a></li>
                  <li><a href="contactos.php" class="py-2 d-block">Contactenos</a></li>
                </ul>
              </div>
            </div>
          
            
        <div class="col-md-4">
          <div class="ftco-footer-widget mb-4">
            <ul class="ftco-footer-social list-unstyled float-md-right float-lft">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


 <script src="../js/jquery.min.js"></script>
  <script src="../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap2.min.js"></script>
  <script src="../js/jquery.easing.1.3.js"></script>
  <script src="../js/jquery.waypoints.min.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/aos.js"></script>
  <script src="../js/jquery.animateNumber.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="../js/google-map.js"></script>
  <script src="../js/main.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script type="text/javascript" src="jquery.immersive-slider.js"></script>

  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="../js/jquery.immersive-slider.js"></script>


    <!-- ***** Footer Area End ***** -->

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