<?php
/* session_start(); */
  require "../Modelo/ConexionDataBase.php";
  require "../Modelo/EstadoProd.php";
  require "../Modelo/Proveedor.php";
  require "../Modelo/TipProd.php";
  require "../Modelo/Producto.php";
  session_start(); 
   if(!isset($_SESSION['Cliente']) && !isset($_SESSION['Empleado']) )
  { 
   
    header('location: index.php'); 
  }elseif (isset($_SESSION['Cliente'])) {
    header('location: index.php');

  }elseif ($_SESSION['Cargo']=='3') {//almacenista
    
    if (isset($_REQUEST['idProd'])) { 
      
       $_REQUEST['idProd']; 
      $Id_prod_2=$_REQUEST['idProd'];
      $objProd=new Producto();
      $res_prod=$objProd->Consultar_Producto_undi($Id_prod_2);
      
      $sql="select * from producto ;";
      $conexion=Conectarse();
      $res_sol=$conexion->query($sql);

    }else {
      header('location: index.php');
    }
    
    
  }else {
    header('location: index.php');
  } 

  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>COORTIENDAS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <link rel="icon" href="../Imagenes/F.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">


    <link rel="stylesheet" href="../css/stylee.css">
    
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <link rel="stylesheet" href="../css/aos.css">
    <link href="../css/responsive-color.css" rel="stylesheet">

    <link rel="stylesheet" href="../css/ionicons.min.css">
    <link rel="stylesheet" href="../css/sstyle.css">
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/animateda.css">
    <link rel="stylesheet" href="../css/stil.css">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark  bg-dark ftco-navbar-light" id="ftco-navbar"  data-aos-delay="500">
      <div class="container" >
        <a class="navbar-brand" href="index.php"><img class="log" src="../Imagenes/Logo.png"></a>
      </div>                                           
        </div>
      </div>
    </nav>
    
    </label>

        <input type="checkbox" id="abrir-cerrar" name="abrir-cerrar" value="">
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
 */if (isset($_SESSION['Cliente']) || isset($_SESSION['Empleado'])) {
            
            echo '
          <li class="dropdown">
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="#"><i class="icon_profile">
                  <img class="user" src="../Imagenes/user.png" alt="Ver info" title="User" style="width: 20%; margin-top: 1%; margin-right: 1% "> Mi Perfil
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
          
        </div>
    
     
    <section  class="mosh-call-to-action-area bg-img  section_padding_100" style="background-image: url(../Imagenes/Foto.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                        <div class="section-heading">
                            <h1 class="ftco-heading mb-3" data-aos="fade-up" data-aos-delay="500" style="color: white;">Actualizar Producto</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><br><br><br><br><br><br><br><br><br><br>

    
    
 <div class="ftco-section contact-section" style="background: #E1EAEA;;">
    <div class="container"><!--style.css:8330,460,453,10266,34-->
      <div class="">
        <div class="">
          <!--formulario-->
          <div class="col-md-9 col-md-9" >
                    <div class="contact-form">
                        <h5 style="text-align: center;">Actualizar Producto</h5>
        <form action="../Modelo/validacion/ActualizarProducto.php ?Id_prod_2=<?php echo $Id_prod_2; ?> " method="post" enctype="multipart/form-data"> 
        <div class="" style="text-align: center;">
      
        <?php
        while ($Prod =$res_prod->fetch_object()) {
          echo '<div class="col-12 col-md-6">
          <div class="group">
          <select name="tipo_prod" id="tipo_prod" required>
          <option value="' . $Prod->Id_tip_prod . '">' . $Prod->Nam_tip_prod . '</option>';
          
          
            $objTipo= new TipProd();
            $res=$objTipo->Consultar_TipProds();
                while ($TipProd =$res->fetch_object()) {
                  echo '<option value="' . $TipProd->Id_tip_prod . '">' . $TipProd->Nam_tip_prod .  '</option>';
                }
           echo '
          </select>

              <span class="highlight"></span>
              <span class="bar"></span>
              
          </div>
      </div>
      <div class="col-12 col-md-6">
          <div class="group">
          <select name="Provee" id="Provee" required>
          <option value="' . $Prod->Prov . '">' . $Prod->Nam_prov . '</option>';
          
          /* $Conexion=Conectarse();  
          $sql_b="select Id_prov,Empre_prov,Est_prov,Nam_prov,Cel_prov,Tel_prov,Cedu_prov,Dir_prov,Notas_prov from proveedor where Est_prov='1';";
          $res_a=$Conexion->query($sql_b); */
          
            $objprov= new Proveedor();
            $res_a=$objprov->Consultar_Proveedor();
                while ($prov=$res_a->fetch_object()) {
                  echo '<option value="' . $prov->Id_prov . '">' . $prov->Nam_prov .  '</option>';
                } 
            echo '
          </select>

              <span class="highlight"></span>
              <span class="bar"></span>
              
          </div>
      </div> 
      <div class="col-12 col-md-6">
          <div class="group">
              <input type="text" name="name" id="name" value="' . $Prod->Nam_prod . '" required>
              <span class="highlight"></span>
              <span class="bar"></span>
              <label>Nombre de producto</label>
          </div>
      </div>
      <div class="col-12">
            <div class="group">
                <textarea name="caracter" id="caracter" value="' . $Prod->Carac_prod . '" size="120" required></textarea>
                <span class="highlight"></span>
                <span class="bar"></span>
                <label>Caracteriticas</label>
            </div>
        </div>
        <div class="col-12 col-md-6">
          <div class="group">
              <input type="number" name="valor" id="valor" value="' . $Prod->Val_prod . '" required>
              <span class="highlight"></span>
              <span class="bar"></span>
              <label>Valor Unitario $</label>
          </div>
      </div>
      <div class="col-12 col-md-6">
          <div class="group">
              <input type="number" name="iva" id="iva" value="' . $Prod->Iva_prod . '" required>
              <span class="highlight"></span>
              <span class="bar"></span>
              <label>IVA %</label>
          </div>
      </div>
      <div class="col-12 col-md-6">
          <div class="group">
              <input type="number" name="presen" id="presen" value="' . $Prod->Presen_prod . '"required>
              <span class="highlight"></span>
              <span class="bar"></span>
              <label>Presentación en unidades</label>
          </div>
      </div>
      <div class="col-12 col-md-6">
          <div class="group">
              <input type="TEXT" name="tam" id="tam" value="' . $Prod->Tam_prod . '"required>
              <span class="highlight"></span>
              <span class="bar"></span>
              <label>Tamaño </label>
          </div>
      </div>
      <div class="col-12 col-md-6">
          <div class="group">
              <input type="file" name="img" id="img"  multiple>
              <span class="highlight"></span>
              <span class="bar"></span>
              <label></label>
          </div>
      </div>';
        }
        ?>

        
        
            <div class="col-12">
                                    <input  type="submit" id="Enviar"class="mosh-btn original-btn" value="Enviar" name="Enviar">
                                </div>
                                
                        </form></div></div>
        </div>
        </div>
    </div>
  </div></form></div></div>
            
  <footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-8">
          <div class="row">
            <div class="col-md">
              <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">Acerca de Coortiendas</h2>
                <ul class="list-unstyled">
                  <li><a href="Sobre.html" class="py-2 d-block">¿Quiénes somos?</a></li>
                  <li><a href="#" class="py-2 d-block">Contactenos</a></li>
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
  <script src="../js/jquery.waypoints.min.js"></script>
  <script src="../js/jquery.stellar.min.js"></script>
  <script src="../js/owl.carousel.min.js"></script>
  <script src="../js/jquery.magnific-popup.min.js"></script>
  <script src="../js/aos.js"></script>
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
  </body>
</html>