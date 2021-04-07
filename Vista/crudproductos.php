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
    <title>Productos Existentes</title>
    <meta charset="utf-8">
    <link rel="icon" href="../Imagenes\F.png">    
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500" rel="stylesheet">
    <link rel="stylesheet" href="../css/stil.css">
    <link rel="stylesheet" href="../css/styleeee.css">
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
 */
          if (isset($_SESSION['Cliente']) || isset($_SESSION['Empleado'])) {
            
            echo '
          <li class="dropdown">
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
                <a href="Perfil.php"><i class="icon_profile">
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
          
            </ul>
        </div><br><br><br><br><br><br><br><br><br><br><br>
 <!-- Lista productos -->
 <div class="ftco-section contact-section" style="background: #E1EAEA;">
    <div class="container"><!--style.css:8330,460,453,10266,34-->
      <div class="tabla">
        <div class="">
          <!--formulario-->
                <div class="col-md-7 text-center"  data-aos="fade-up">
                  <h2>Productos</h2>
                </div><br>

                    <div class="search-form-area animated dataTables_filter ">
                        <form action="buscarproducto.php" method="get">
                            <input type="search" name="search" id="search" placeholder="¿Que Buscas?">
                            <button type="submit" class="d-none"><img src="img/core-img/search-icon.png" alt="Buscar"></button>
                        </form>
                    </div><br>
                <!-- Search btn -->
              
              <div class="tabla">
                <table>
                    <thead >
                        <tr >
                            <th >Id prod  </th> 
                            <th >Estado prod  </th> 
                            <th >Tipo prod  </th> 
                            <th >Proveedor  </th> 
                            <th >Nombre prod  </th> 
                            <th >Caracteristicas prod  </th> 
                            <th >Puntuacion prod  </th> 
                            <th >Valor prod  </th>
                            <th >Iva prod  </th> 
                            <th >Presentacion prod  <br></th>
                            <th >Tamaño prod  </th>  
                        </tr>
                    </thead><br>
                    <tbody >

                    <?php
                      $obj_solic= new Producto();
                      $res=$obj_solic->Consultar_Producto();
                      while ($solic =$res->fetch_object()) {
                        /*echo ' <tr align="center" bgcolor="#FFFF99">
                     
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

                    </tr> ';

                    while ($row = mysqli_fetch_array($sql)) {*/
                      ?>                       
                  <tr >


                      <td ><?php echo $solic->Id_prod; ?></td>
                      <td ><?php echo $solic->Est_prod; ?></td>  
                      <td><?php echo $solic->Tip_prod; ?></td>  
                      <td><?php echo $solic->Prov; ?></td>
                      <td><?php echo $solic->Nam_prod; ?></td>  
                      <td><?php echo $solic->Carac_prod; ?></td>
                      <td><?php echo $solic->Puntua_prod; ?></td>   
                      <td><?php echo $solic->Val_prod; ?></td> 
                      <td><?php echo $solic->Iva_prod; ?></td>
                      <td><?php echo $solic->Presen_prod; ?></td> 
                      <td><?php echo $solic->Tam_prod; ?></td>  
                      <td><?php /* echo $row["catLibNombre"]; */ ?></td>  
                      <td><a href="frmActualizarProducto.php?id=<?php echo $row["Id_prod"]; ?>">Actualizar</a></td>  
                      <td><a href=".php?id=<?php echo $row["Id_prod"]; ?>" onclick="return confirm('EstÃ¡ seguro de eliminar el registro?')">Eliminar</a></td>  
                  </tr> 
           
                <?php }

                  ?>

                    </tbody>
                </table>
            </div>
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