<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Promociones</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="../Imagenes/F.png">
    
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <link rel="stylesheet" href="../css/aos.css">
    <link href="../css/responsive-color.css" rel="stylesheet">

    <link rel="stylesheet" href="../css/ionicons.min.css">
    
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/stylo.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/animateda.css">


  </head>
  <body>
    
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" data-aos="fade-down" data-aos-delay="500">
      <div class="container" style=" margin-left: 7%">
        <a class="navbar-brand" href="index.php"><img style="width: 50%;" src="../Imagenes/Logo.png"></a>
      </div>
      <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menú
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="contacto.php" class="nav-link">Contáctenos</a></li>
            <li class="nav-item"><a href="index.php" class="nav-link"><strong style="color: green;"> Productos </strong></a></li>
            <li class="nav-item"><a href="Promociones.php" class="nav-link">Promociones</a></li>
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
                  } echo'
                  </ul>
                </li>
                                     </div>';}
                  ?>
      </div>
    </nav>
    
    <!-- END nav -->


    <section class="contenido wrapper">
   <div class="slider">
      <ul>
        <li><a href="#"><img src="../Imagenes/slider.jpg" alt=""></a></li>
        <li><a href="#"><img src="../Imagenes/slider1.jpg" alt=""></a></li>
        <li><a href="#"><img src="../Imagenes/slider2.jpg" alt=""></a></li>
        <li><a href="#"><img src="../Imagenes/slider3.jpg" alt=""></a></li><li>
        <li><a href="#"><img src="../Imagenes/slider.jpg" alt=""></a></li>
      </ul>
    </div>
  </section>

  <div class="ftco-section" style="background:#E8F1F3; margin: 5% ; width: 88% ;" >
    <div class="container" >
      <div class="block-2 d-md-flex" data-aos="fade-left">
              <div class="text" >
          <h4 class="subheading">Coortiendas</h4>
          <h2 class="heading">Sorprendete con nuestros productos!!</h2>
          <p>Somos una tienda especificada para los productos de canasta familiar con lo mejores precios y trabjando con las mejores marcas para tu hogar, donde encuentras la mejor calidad de productos y una gran variedad que se acomodaran segun tus gustos</p>
        </div>
      </div>
    </div>
</div>  
    
  <div class="ftco-section bg-light">
    <div class="container">
      <div class="row justify-content-center mb-5 pb-5">
        <div class="col-md-7 text-center"  data-aos="fade-up">
          <h2>Promociones</h2>
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
        <div class="col-md-6 col-lg-4" data-aos="fade-up">
          <a href="Producto.php" class="block-5" style="background-image: url('../Imagenes/Pan_Bimbo.jpg');">
            <div class="text">
              <div class="subheading"></div>
              <h3 class="heading">Pan Bimbo blanco 600g $2.100</h3>
              <div class="post-meta">
                <span>Buscamos darte lo mejor</span>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <a href="PaProducto.php" class="block-5" style="background-image: url('../Imagenes/MegalitroA.jpg');">
            <div class="text">
              <div class="subheading"></div>
              <h3 class="heading">Leche alqueria Entera (Megalitro) $2.500</h3>
              <div class="post-meta">
                <span>La mejor calidad al mejor precio</span>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <a hrefProducto.php" class="block-5" style="background-image: url('../Imagenes/Pan_BimboIntegral.jpg');">
            <div class="text">
              <div class="subheading"></div>
              <h3 class="heading">Pan bimbo integral 650g $3.100</h3>
              <div class="post-meta">
                <span>Todo lo que buscas en un solo lugar</span>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up">
          <a href="Producto.php" class="block-5" style="background-image: url('../Imagenes/Aseo.jpg');">
            <div class="text">
              <div class="subheading"></div>
              <h3 class="heading">Salvo Limon triple poder 1,2 Litros</h3>
              <div class="post-meta">
                <span>Super barato</span>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up">
          <a href="Producto.php" class="block-5" style="background-image: url('../Imagenes/aguar.PNG');">
            <div class="text">
              <div class="subheading"></div>
              <h3 class="heading">Aguardiente Amarillo de Manzana :D</h3>
              <div class="post-meta">
                <span>Compra ya!!!</span>
              </div>
            </div>
          </a>
        </div>
        <div class="col-md-6 col-lg-4" data-aos="fade-up">
          <a href="Producto.php" class="block-5" style="background-image: url('../Imagenes/papass.jpg');">
            <div class="text">
              <div class="subheading"></div>
              <h3 class="heading">Papas Super ricas Pollo(Snakcs)</h3>
              <div class="post-meta">
                <span>Todo lo que buscas aqui</span>
              </div>
            </div>
          </a>
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
                <h2 class="ftco-heading-2">Acerca de DAMALÚ</h2>
                <ul class="list-unstyled">
                  <li><a href="Sobre.php" class="py-2 d-block">¿Quiénes somos?</a></li>
                  <li><a href="contacto.php" class="py-2 d-block">Contactenos</a></li>
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
      <div class="row">
        <div class="col-md-12 text-center">

          <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="icon-heart" aria-hidden="true"></i> 
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
    <!-- Active js -->
  

</body>
</html>