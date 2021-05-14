  <?php
require "../Modelo/ConexionDataBase.php";
require "../Modelo/TipUsu.php";
$objTipUsu= new TipUsu();
$resultado=$objTipUsu->Consultar_TipUsu();
?>
  
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
 
  <link rel="stylesheet" href="../css/Estilo.css">
  <title>Iniciar Sesion</title>
  <link rel="stylesheet" href="../css/stil.css">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="../js/Estilojs.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="Imagenes/icono.png" />

   <meta charset="utf-8">
    <link rel="icon" href="../Imagenes/Faviconn.png">
    
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/ionicons.min">
    <link rel="stylesheet" href="../css/styleeee.css">
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
            <li class="nav-item"><a href="index.php" class="nav-link"> Productos </a></li>
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
                  }
                  echo'
            </ul>
          </li>
                               </div>';}else if (!isset($_SESSION['Cliente'])|| !isset($_SESSION['Empleado'])) {
                                echo '
                                <div class="login-register-btn" >
                                   <a href="frmlogin.php"><font style="vertical-align: inherit; font-size: 15px;"><font style="vertical-align: inherit;"><strong style="color: green;">Iniciar Sesion</font></strong></font></a><br>
                                   <a href="frmregistro.php"><font style="vertical-align: inherit; font-size: 12px;"><font style="vertical-align: inherit;">Registrarse</font></font></a>
                               </div>
                                ';
                              }
                      ?>                                             
        </div>
      </div>
    </nav>
    
    <section class="mosh-call-to-action-area bg-img  section_padding_100" style="background-image: url(../Imagenes/Foto.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-12">
                        <div class="section-heading">
                            <h1 class="ftco-heading mb-3" data-aos="fade-up" data-aos-delay="500" style="color: white;">Iniciar Sesion</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

     <br><br><br><br><br><br><br><br><br>
    
<br>
<section>
    <div class="ftco-section contact-section" style="background: #E1EAEA;">
    <div class="container"><!--style.css:8330,460,453,10266,34-->
      <div class="">
        <div class="">
          <!--formulario-->
          <div class="col-12 col-md-10 col-lg-9" >
                    <div class="contact-form">
                      <form id="Inicio_sesion" name="Inicio_sesion" action="../Modelo/validacion/inicio_sesion.php" method="POST" class="formulario">
                      		<h2>Iniciar sesión</h2>
                      		<div class="heead">
                      			  <section class="segundo">
                              <div id="opcioon">
                                <ul class="op">
                                      <li>Tipo de usuario</li>
                                      <li>
                                      
                                      <input type="radio" required name="usu" value="Cliente"id="usu"onclick="Datos();" > Cliente
                                      
                                      <input type="radio" required name="usu" value="Empleado"id="usu"onclick="Datos();" > Empleado de la empresa


                                        
                                      </select> <br><br>
                                      <script type="text/javascript">
                                      
                                      function Datos(){ 
                                     if (document.Inicio_sesion.usu[1].checked==true) {
                                        document.querySelector(".segundo").style.height= "100px";
                                         document.getElementById("Empleado").innerHTML=`
                                         <div class="input-contenedor"><br>
                                            <td><i class="fa fa-user" aria-hidden="true icon"></i></td>
                                            <td><input type="number" name="cc_empl" id="cc_empl" placeholder="Número de identificación" required></td> 
                                         </div>
                                         <div class="input-contenedor">
                                            <td><i class="fa fa-user" aria-hidden="true icon"></i></td>
                                            <td><select name="Cargo" id="Cargo" >
                                              <option value="">Cargo</option>
                                                <?php
                                                  while ($cargo =$resultado->fetch_object()) {
                                                    echo '<option value="' . $cargo->Id_tip_usu . '">' . $cargo->nam_tip_usu .  '</option>';
                                                  }
                                                  ?>
                                            </select></td>
                                         </div>
                                         `;
                                       }else{
                                        document.getElementById("Empleado").innerHTML=``;
                                       } 
                                        }
                                        </script>
                                    </li>
                                </ul>
                            </section>
                            <div ID ="Empleado">
                                <!-- form empleado -->
                              </div>
                      				<div ID ="Cliene">
                                  <div class="input-contenedor">
                                  <td><i class="fa fa-envelope" aria-hidden="true icon"></i></td>
                                  <td><input type="email" name="correo" id="correo" placeholder="Correo electronico" required></td>
                                  </div>
                                  <div class="input-contenedor">
                      			    	<td><i class="fa fa-key" aria-hidden="true icon"></i></td>
                      				    <input type="password" name="pass" id="pass" placeholder="Contraseña" size="30"required>
                      				    </div>
                              </div><br>
                      				<button type="submit" class="button" id="ini_sesion" name="ini_sesion">Iniciar sesión</button>	   
                      			</form>
			                       <br><br><br>
						                <p>¿No tienes cuenta?, <a class="link" href="frmregistro.php" id="registro" name="registro">Registrate</a></p>
		                    </div></section></div></div>

<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container">
      <div class="row mb-5">
        <div class="col-md-8">
          <div class="row">
            <div class="col-md">
              <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">Acerca de Coortiendas</h2>
                <ul class="list-unstyled">
                  <li><a href="Sobre.php" class="py-2 d-block"> ¿Quiénes somos? </a></li>
                  <li><a href="contacto.php" class="py-2 d-block"> Contactenos </a></li>
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

