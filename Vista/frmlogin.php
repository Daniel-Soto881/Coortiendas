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
  <title>COORTIENDAS</title>
  <link rel="stylesheet" href="../css/Estilo.css">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" >
  <script src="http://code.jquery.com/jquery-latest.js"></script>
  <script src="../js/Estilojs.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="Imagenes/icono.png" />
</head>

<body>
 <header class="header">
    <div class="wrapper">
      <div class="logo"><a href="principal.php"><img src="../Imagenes/LOGO_COORTIENDAS.png" width="200" height="100"></a></div>
      <nav>
        <a href="index.php">Inicio</a>
        <a href="#">Iniciar sesión</a>
        <a href="frmregistro.php">Registrarse</a>
      </nav>
    </div>
  </header>
  
    
<br>
<form id="Inicio_sesion" name="Inicio_sesion" action="../Modelo/validacion/inicio_sesion.php" method="POST" class="formulario">
		<h1>Iniciar sesión</h1>
		<div class="heead">
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
               if (document.Inicio_sesion.usu[1].checked==true) {
                  document.querySelector(".segundo").style.height= "100px";
                   document.getElementById("Empleado").innerHTML=`
                   <div class="input-contenedor">
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
        </div>
    
		
				<button type="submit" class="button" id="ini_sesion" name="ini_sesion">Iniciar sesión</button>	   
			</form>
			<br><br><br>
						 <p>¿No tienes cuenta?, <a class="link" href="frmregistro.php" id="registro" name="registro">Registrate</a></p>
		</div>

</body>
</html>

