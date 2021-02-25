<?php
require "../Modelo/ConexionDataBase.php";
require "../Modelo/Cliente.php";
require "../Modelo/Empleados.php";
require "../Modelo/EstadoUsu.php";
require "../Modelo/Solicitud_empleado.php";
require "../Modelo/TipUsu.php";
require "../Modelo/TipoDoc.php";
$objTipUsu= new TipUsu();
$res_TipUsu=$objTipUsu->Consultar_TipUsu();
$objTipoDoc= new TipoDoc();
$res_TipoDoc=$objTipoDoc->Consultar_TipoDoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>COORTIENDAS</title>
  <link rel="stylesheet" href="../css/Estilo.css">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="../js/Estilojs.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="../Imagenes/icono.png" />
</head>

<body>
 <header class="header">
    <div class="wrapper">
      <div class="logo"><a href="principal.php"><img src="../Imagenes/LOGO_COORTIENDAS.png" width="200" height="100"></a></div>
      <nav>
        <a href="index.php">Inicio</a>
        <a href="frmlogin.php">Iniciar sesión</a>
        <a href="#">Registrarse</a>
      </nav>
    </div>
  </header>
  <?php
 


  ?>

  <form method="POST" name="FrmRegistro"action="../Modelo/validacion/Registro.php" class="formulario">
    <h1>Registro</h1>
    <div class="contenedoorr">
       <section class="segundo">
        <div id="opcioon">
          <ul class="op">
          <li>Tipo de usuario</li>
                <li>
                
                <input type="radio" required name="usu" value="Cliente"id="usu"onclick="Datos();" > Cliente<br>
                
                <input type="radio" required name="usu" value="Empleado"id="usu"onclick="Datos();" > Empleado de la empresa<br>
 

                  
                </select> 
                <script type="text/javascript">
                
                function Datos(){ 
               if (document.FrmRegistro.usu[1].checked==true) {
                 /*  document.querySelector(".segundo").style.height= "200px"; */
                   document.getElementById("Empledo").innerHTML=`
                   <div class="input-contenedor">
                  <td><i class="fa fa-user" aria-hidden="true icon"></i></td>
                  <td><select name="Cargo" id="Cargo" required>
                <option value="">Cargo</option>
                <?php
                  while ($cargo =$res_TipUsu->fetch_object()) {
                    echo '<option value="' . $cargo->Id_tip_usu . '">' . $cargo->nam_tip_usu .  '</option>';
                  }
                  ?>
               </select></td></div>
            <div class="input-contenedor">
               <td><i class="fa fa-user" aria-hidden="true icon"></i></td>
                  <td><select name="Tip_doc" id="Tip_doc" required>
                <option value="">Tipo de documento de ID</option>
                <?php
                  while ($Tip_doc =$res_TipoDoc->fetch_object()) {
                    echo '<option value="' . $Tip_doc->Id_tip_doc . '">' . $Tip_doc->Nam_tip_doc .  '</option>';
                  }
                  ?>
               </select></td></div>
               <div class="input-contenedor">
                  <td><i class="fa fa-user" aria-hidden="true icon"></i></td>
                  <td><input type="number" name="cc" id="cc" required placeholder="Número de identificación"></td>
              </div> 
              <div class="input-contenedor">
                  <td><i class="fa fa-user" aria-hidden="true icon"></i></td>
                  <td><input type="text" name="Solic" id="Solic" required size="60" placeholder="Descripción de empleo"></td>
              </div>
              <div class="input-contenedor">
                  <td><i class="fa fa-user" aria-hidden="true icon"></i></td>
                  <td><input type="date" name="FechNac" id="FechNac" required size="60" placeholder="Fecha de nacimiento"></td>
                 
              </div> 
                      
                   `;
                 }else{
                  document.getElementById("Empledo").innerHTML=``;
                 } 
                  }
                  </script>
              </li>
          </ul>
      </section> 
<br>
      <div id="Client">
        
      <div class="input-contenedor">
        <td><i class="fa fa-user" aria-hidden="true icon"></i></td>
        <td><input type="text" name="Name" id="Name" required placeholder="Nombre Completo"></td>
      </div>  
      <div class="input-contenedor">
        <td><i class="fa fa-envelope" aria-hidden="true icon"></i></td>
        <td><input type="email" name="email" id="email" required placeholder="Correo Electronico"></td>
      </div>
      <div class="input-contenedor">
        <td><i class="fa fa-key" aria-hidden="true icon"></i></td>
        <td><input type="password" name="Pass" id="Pass" required size="30" placeholder="Contraseña"></td>
      </div>


      </div>
     <div id="Empledo">

      </div>
      <input type="submit" name="Registrarse" id="Registrarse"value="Registrarse" class="button">

    </div>
  </form>

    <?php
    /* if (isset($_POST['submit'])) {
      require ("indexe.php");
    } */
    ?>
<br>

    <p>¿Ya tienes cuenta? <a class="link" href="frmlogin.php">Inicia sesion</a></p>
  </div>

  <!-- <form action="index.php" method="POST" enctype="multipart/form-data"/>

</form> -->

<?php
/* if (isset($_POST['subir'])) {
   $archivo = $_FILES['archivo']['name'];
   if (isset($archivo) && $archivo != "") {
      $tipo = $_FILES['archivo']['type'];
      $tamano = $_FILES['archivo']['size'];
      $temp = $_FILES['archivo']['tmp_name'];
     if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 2000000))) {
        echo '<div><b>Error. La extensión o el tamaño de los archivos no es correcta.<br/>
        - Se permiten archivos .gif, .jpg, .png. y de 200 kb como máximo.</b></div>';
     }
     else {
        if (move_uploaded_file($temp, 'images/'.$archivo)) {
            chmod('images/'.$archivo, 0777);
            echo '<div><b>Se ha subido correctamente la imagen.</b></div>';
            echo '<p><img src="images/'.$archivo.'"></p>';
        }
        else {
           echo '<div><b>Ocurrió algún error al subir el archivo. No pudo guardarse.</b></div>';
        }
      }
   }
} */
?>

</body>
</html>