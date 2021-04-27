<?php
require "../Modelo/ConexionDataBase.php";
require "../Modelo/Cliente.php";
require "../Modelo/DetalleFactura.php";
require "../Modelo/Empleados.php";
require "../Modelo/Empre_Prov.php";
require "../Modelo/EstadoFac.php";
require "../Modelo/EstadoMovimiento.php";
require "../Modelo/EstadoProd.php";
require "../Modelo/EstadoProv.php";
require "../Modelo/EstadoUsu.php";
require "../Modelo/Factura.php";
require "../Modelo/Inventario_has_DetalleFactura.php";
require "../Modelo/Inventario.php";
require "../Modelo/Movimiento_Inventario.php";
require "../Modelo/Producto.php";
require "../Modelo/Promociones.php";
require "../Modelo/TipoPago.php";
require "../Modelo/TipUsu.php";
require "../Modelo/TipProd.php";
$objCliente= new Cliente(); 
$Clientes=$objCliente->ConsultarClientes();


$objProd= new Producto(); 
$ret_Tot=$objProd->Consultar_Producto();
$res_Prod=$objProd->Consultar_Productos();

/* $sql_t="select * from tip_prod"; */
$objTipProd= new TipProd();
$Tip_prod_res=$objTipProd->Consultar_Prod_TipProd(); 

 $objFactura= new Factura;
 
 $obj_tip_pag=new TipoPago;
/* $conectarse=Conectarse();
$Tip_prod_res=$conectarse->query($sql_t); */
session_start();
$_SESSION['Empleado']="369369";
$NIT="4158745847215";
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
    <link rel="stylesheet" href="../css/animate.css">
    
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <!--START  Librerias de SELECT2 para el buscador en el select -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet"/>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>



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
         if (isset($_SESSION['Empleado']) ) {
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
        
      
 /*  if (isset($_SESSION['Cliente']) || isset($_SESSION['Empleado'])) {
            
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
                              }  */
                      ?>
             
        </div>
          
            </ul>
        </div><br><br><br><br><br><br><br><br><br><br><br>
       
        <script>
        function luz() {
         
            document.getElementById("btn_New_factura").innerHTML=`
            
          
        
        <div class="block-2 d-md-flex" data-aos="fade-left">
                      
                      <div class="infoVenta" >
                      <div class="col-12 col-md-6">
            <div class="group">
            <select class='js-example-placeholder-single' name="Cliente" id="Cliente" required>
            <option value="">Cliente</option>
            <?php
           
            
              
                  while ($Clie=$Clientes->fetch_object()) {
                    echo '<option value="' . $Clie->Id_clie . '">' . $Clie->Nam_clie .  '</option>';
                  } 
              ?>
            </select>

                <span class="highlight"></span>
                <span class="bar"></span>
                
            </div> 
        </div> 
        <div class="block-2 d-md-flex" data-aos="fade-left">
                      
                      <div class="infoVenta" >
                      <div class="col-12 col-md-6">
            <div class="group"><!-- NO QUITE LAS CLASES 'js-example-placeholder-single' O 'factura'  -->
            <select class='js-example-placeholder-single' name="Tip_pag" id="Tip_pag" required>
            <option value="">Tipo Pago</option>
            <?php
                $TipoPago=$obj_tip_pag->Consultar_tip_pag();
                  while ($tip_pag=$TipoPago->fetch_object()) {
                    echo '<option value="' . $tip_pag->Id_tip_pag . '">' . $tip_pag->Nam_tip_pag .  '</option>';
                  } 
              ?>
            </select>

                <span class="highlight"></span>
                <span class="bar"></span>
                
            </div> 
        </div> 
        <div class="block-2 d-md-flex" data-aos="fade-left">
                      
                      <div class="infoVenta" >
                      <div class="col-12 col-md-6">
            <div class="group">
             <strong id="Caja_fact">Caja</strong>
            <input type="number" name="Caja_fact" id="Caja_fact" placeholder="" required>

                <span class="highlight"></span>
                <span class="bar"></span>
                
            </div> 
        </div> 
        <div class="block-2 d-md-flex" data-aos="fade-left">
                      
                      <div class="infoVenta" >
                      <div class="col-12 col-md-6">
            <div class="group">
             <strong id="Fech_entrega">Fecha de entrega</strong>
            <input type="date" name="Fech_entrega" id="Fech_entrega" placeholder="" required>

                <span class="highlight"></span>
                <span class="bar"></span>
                 <b></b>
            </div> 
        </div>  
          

        ` + `<div  id="btn_Continuar_1"> 
        
        <input type="submit" value="Continuar"onclick="event.preventDefault(); Continue_factura();">
        </div> 
        
        <div class="Cancelar" id="factura"> 
        
        <input type="submit" value="Cancelar"id="New_factura" onclick="event.preventDefault(); Continue_factura();"">
        </div> 
        `;

        document.getElementById("Continuaraa").innerHTML=``;

                
 
      };

      function Continue_factura() {
      
        document.form_fact.getElementById("btn_Continuar_1").innerHTML=`<div class="group">
          Factura Nº: <strong><?
        $objFactura->Crear_Factura_base("4",$_POST['Tip_pag'],$_POST['Cliente'],$_SESSION['Empleado'],$_POST['Fech_entrega'],$_POST['Caja_fact']);
        $objFactura->Agregar_Factura_base();
        $factura=$objFactura->Consultar_Factura_base();
          ?></strong>
                        </div>
          <strong>Tipo de pago<? 
                  while ($Fact=$factura->fetch_object()) {
                    echo '<option value="' . $Fact->Id_tip_pag . '">' . $Fact->Nam_tip_pag .  '</option>';
                  } ?></strong>
          </strong>Cliente<strong>
          </strong>Empleado<strong>
          </strong>Fecha de entrega de lo solicitado<strong>
          </strong>Caja<strong>`;
      }
      function Cancel_factura() {
        document.form_fact.getElementById("New_factura").innerHTML=`<input type="submit" value="Nueva Factura" onclick='factura_ini();'>`;

      }
      function Det_factura() {
        document.form_fact.getElementById("New_factura").innerHTML=`<div class="infoVenta" >
                          
                          <div class="group">
                            Compra Nº<input type="text" name="N_comp" id="N_comp"  value="1" required>
                          </div>
                        </div>
                    </div>
                    <div class="block-2 d-md-flex" data-aos="fade-left">
                      
                        <div class="infoVenta" >
                          
                          <div class="group">
                            Código Producto:<input type="text" name="Produc" id="Produc"  required>
                          </div>
                        </div>
                    </div>
                    <div class="block-2 d-md-flex" data-aos="fade-left">
                      
                        <div class="infoVenta" >
                          
                          <div class="group">
                            Nombre Producto:<input type="text" name="Produc" id="Produc"  required>
                          </div>
                        </div>
                    </div>
                    <div class="block-2 d-md-flex" data-aos="fade-left">
                      
                        <div class="infoVenta" >
                          
                          <div class="group">
                            Cantidad:<input type="number" name="Cant_Prod" id="Cant_Prod"  required>
                          </div>
                        </div>
                    </div>
                    <div class="block-2 d-md-flex" data-aos="fade-left">
                      
                        <div class="infoVenta" >
                          
                          <div class="group">
                            Descuento %:<input type="number" name="Desc_Prod" id="Desc_Prod"  required>
                          </div>
                        </div>
                    </div>
                    
                    </div>
                  </div>`;
      }
      function End_fact(params) {
       document.form_fact.getElementById("New_factura").innerHTML= `</strong>Total antes de impuestos<strong>
          </strong>Total retenido<strong>
          </strong>Total<strong>`;
      }

        </script>
        
 <!-- Lista productos -->
 <form action="../Modelo/validacion/ValidacionFactura.php" method="post" enctype="multipart/form-data" id="form_fact">
 <div class="ftco-section contact-section" style="background: #E1EAEA;">
    <div class="container"><!--style.css:8330,460,453,10266,34-->
      <div class="">
        <div class=" ">
          <div class="container" >
          aqui va una intro motivacional del mundo del amor hacia hacer facturas 
           <!-- Boton  que solo muestra el form de inicio de factura-->
          <div id="btn_New_factura">  <!-- Aqui se va a mostrar la funcion luz() -->
        
          <input type="submit" value="Nueva Factura" id="New_factura" onclick="event.preventDefault(); luz();">
          </div>
           
                               
           
        
<div class="Continuaraa" id="Continuaraa">
        
</div>
<section class="Cancelar">
        
</section>

        
        
        
          <!-- END Datos Iniciales de la factura -->      
                              
                          
                              
          <!-- START  -->
          
          <!-- END Factura_inicio -->
          <!-- START Detalle factura_ini -->
          
          <!-- END Detalle factura_ini -->        
          <!-- START Factura fin -->
          
           <!--END Factura fin -->
                      </div>

                  </div>
                        </div>



                  <div class="col-12">
                                    <input  type="submit" class="mosh-btn original-btn" value="Continuar" id="Continuar" name="Continuar">
                                </div>
                  </form>
          <!--formulario-->
                    <div class="row justify-content-center mb-5 pb-5">
        <div class="col-md-7 text-center"  data-aos="fade-up">
          <h2>Productos</h2>
        </div>
      </div>

                    
                <!-- Search btn -->
                  <br>

        </div>
    </div>
  </div></div></div></div></div>

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