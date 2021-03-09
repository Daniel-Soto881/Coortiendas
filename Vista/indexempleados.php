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
    <title>Inicio</title>
    <meta charset="utf-8">
    <link rel="icon" href="../Imagenes\F.png">    
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="../css/stil.css">
    <link rel="stylesheet" href="../css/styleeee.css">
    <link rel="stylesheet" href="../css/sid.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link rel="stylesheet" href="../css/animate.css">
    
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
  </head>
  
<body>
  <nav class="navbar navbar-expand-lg navbar-dark  bg-dark ftco-navbar-light" id="ftco-navbar"  data-aos-delay="500">
      <div class="container" >
        <a class="navbar-brand" href="indexempleados.php"><img class="log" src="../Imagenes/Logo.png"></a>
      </div>                                           
        </div>
      </div>
    </nav>

       <!--   --><input type="checkbox" id="abrir-cerrar" name="abrir-cerrar" value="">
        <label for="abrir-cerrar">&#9776;
          <span class="abrir">Menu</span>
          <span class="cerrar">Cerrar</span> 
          
              
            </ul>
          </li></div>
          
        </label>

        <div id="sidebar" class="sidebar navbar-expand-lg navbar-dark ftco_navbar ftco-navbar-light.scrolled.awake ftco-navbar-light.scrolled ">
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
 */       if (isset($_SESSION['Cliente']) || isset($_SESSION['Empleado'])) {
            
            echo '
          <li class="dropdown">
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <i class="icon_profile">
                  <a href=" ../Vista/Perfil.php"><img class="user" src="../Imagenes/user.png" alt="Ver info" title="User" style="width: 20%; margin-top: 1%; margin-right: 1% "> 
                  Mi Perfil
                </a>
              </li>
              <li class="eborder-top">
                <a href="indexempleados.php"><i class="icon_profile"></i>Inicio</a>
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
                  <li><a href="crudproductos.php">Listado Productos</a></li>
                  <li><a href="frmNewProducto.php">Ingresar producto</a></li>';}
                  elseif (isset($_SESSION['Empleado']) && $_SESSION['Cargo']=='4') {
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
          
            </ul>
        </div>
        <section  class="mosh-call-to-action-area bg-img  section_padding_100" style="background-image: url(../Imagenes/Foto.jpg);">
        <div class="container">
            <div class="tabla">
                <div class="col-12">
                        <div class="section-heading">
                            <h1 class="ftco-heading mb-3" data-aos="fade-up" data-aos-delay="500" style="color: white;">Coortiendas</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
     <br><br><br><br><br><br><br><br><br>
    
 <!-- Lista productos -->
 <div class="ftco-section contact-section" style="background: #E1EAEA;">
    <div class="container"><!--style.css:8330,460,453,10266,34-->
      <div class="">
        <div class=" ">
          
          <!--formulario-->
                <div class="ftco-section" style="background:#E8F1F3; margin: 5% ; width: 88% ;" >
                  <div class="container" >
                    <div class="block-2 d-md-flex" data-aos="fade-left">

                            <div class="text" >
                        <h4 class="subheading">Coortiendas</h4>
                        <h2 class="heading">Listo para un gran dia de trabajo!!</h2>
                        <p>Comienza tu dia con toda la actitud</p>
                      </div><div class="col-12 col-md-4">

                    <img class="Inemple" src="../Imagenes/F.png" alt="Ver info" title="User" style="  width: 170px; ">
                </div>
                    </div>
                  </div>

                 
              </div>
            </div>
        </div>
    </div>
  </div>
</div></div></div></div>

<div class="ftco-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-5">
        <div class="col-md-7 text-center">
          <h2>Los Clientes Dicen....</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4 ">
          <div class="flip-container">
            <div class="flipper">
              <div class="front" style="background-image: url(images/image_4.jpg);">
                <div class="box">
                  <h2>Dudas</h2>
                  <p>Usuario</p>
                </div>
              </div>
              <div class="back">
                <!-- back content -->
                <blockquote>
                  <p>&ldquo;¿Que puedo hacer para conocer mas acerca de ustedes?.&rdquo;</p>
                </blockquote>
                <div class="author d-flex">
                  <div class="image mr-3 align-self-center">
                    <img src="images/person_1.jpg" alt="">
                  </div>
                  <div class="name align-self-center"> Laura Mendez <span class="position">Usuario</span></div>
                </div>
              </div>
            </div>
          </div> <!-- .flip-container -->
        </div>
        <div class="col-md-6 col-lg-4">
          
          <div class="flip-container hover">
            <div class="flipper">
              <div class="front" style="background-image: url(images/image_5.jpg);">
                <div class="box">
                  <h2>Acerca de nosotros</h2>
                  <p>DAMALÚ</p>
                </div>
              </div>
              <div class="back">
                <!-- back content -->
                <blockquote>
                  <p>&ldquo;Somos una agencia que te ayudara a conocer mas de tu pais.&rdquo;</p>
                </blockquote>
                <div class="author d-flex">
                  <div class="image mr-3 align-self-center">
                    <img src="images/person_2.jpg" alt="">
                  </div>
                  <div class="name align-self-center"> DAMALÚ <span class="position">Trabajador</span></div>
                </div>
              </div>
            </div>
          </div> <!-- .flip-container -->

        </div>
        <div class="col-md-6 col-lg-4">
          
          <div class="flip-container">
            <div class="flipper">
              <div class="front" style="background-image: url(images/GTPE.jpg);">
                <div class="box">
                  <h2>Comentarios</h2>
                  <p>Usuario</p>
                </div>
              </div>
             <div class="back">
                <!-- back content -->
                <blockquote>
                  <p>&ldquo;¿Que puedo hacer para conocer mas acerca de ustedes?.&rdquo;</p>
                </blockquote>
                <div class="author d-flex">
                  <div class="image mr-3 align-self-center">
                    <img src="images/person_1.jpg" alt="">
                  </div>
                  <div class="name align-self-center"> Laura Mendez <span class="position">Usuario</span></div>
                </div>
              </div>
            </div>
          </div> <!-- .flip-container -->

        </div>
      </div>
    </div>
  </div>

 <footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-8">
          <div class="row">
            <div class="col-md">
              <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">Acerca de Coortiendas</h2>
                <ul class="list-unstyled">
                  <li><a href="Sobre.php" class="py-2 d-block">¿Quiénes somos?</a></li>
                  <li><a href="contactodgsgs.php" class="py-2 d-block">Contactenos</a></li>
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