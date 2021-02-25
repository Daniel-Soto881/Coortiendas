<?php
require "../ConexionDataBase.php";
require "../EstadoProd.php";
  require "../Proveedor.php";
  require "../TipProd.php";
  require "../Producto.php";
  
  

if (isset($_REQUEST['Enviar'])) {
   session_start() ;
   extract ($_REQUEST);
   if (!isset($_REQUEST['Id_prod_2'])) {
     
    echo "<script 
    window.location='../../Vista/frnActualizarProducto.php';
    </script>";
   }
   
$objProd= new Producto();

$Conexion=Conectarse();  

   $check =getimagesize($_FILES["img"]["tmp_name"]);
   /* getimagesize($temp); */
   if($check !== false){
    
    
       $tipo = $_FILES['img']['type'];
       $tamano = $_FILES['img']['size'];
       
      
      if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png"))) && ($tamano > 2000000)) {
         echo "<script type='text/javascript'>alert('Error. La extensión o el tamaño de los archivos no es correcta, se permiten archivos .gif, .jpg, .png. y de 200 kb como máximo.Intente nuevamente, gracias.');
              window.location='../../Vista/frmNewProducto.php?idProd=' . $_REQUEST[Id_prod_2] . ''; 
              </script>";
      
      }else {
         $archivo = $_FILES['img']['name'];
         $temp = $_FILES['img']['tmp_name'];
         $imgSub=fopen($temp,'r');
         $imgBin=fread($imgSub, $tamano );
         
         $imgBin= mysqli_escape_string($Conexion,$imgBin);
         
         /* $sql="UPDATE `producto` SET `Prov` = '$_REQUEST[Provee]', `Nam_prod` = '$_REQUEST[name]', `Carac_prod` = '$_REQUEST[caracter]', `Puntua_prod` = '0', `Val_prod` = '$_REQUEST[valor]', `Iva_prod` = '$_REQUEST[iva]', `Presen_prod` = '$_REQUEST[presen]',`Tam_prod` = '$_REQUEST[tam]', `img_prod` = '$imgBin' WHERE `producto`.`Id_prod` =  '$_REQUEST[Id_prod_2]';";
         
         $resultado=$Conexion->query($sql); */


        $objProd->Crear_Producto($_REQUEST['Id_prod_2'],1,$_REQUEST['tipo_prod'],$_REQUEST['Provee'],$_REQUEST['name'],$_REQUEST['caracter'],0,$_REQUEST['valor'],$_REQUEST['iva'],$_REQUEST['presen'],$_REQUEST['tam'],$imgBin);

        
          /*  echo $_REQUEST['Id_prod_2'] . " , " . 1 . " , " . $_REQUEST['tipo_prod'] . " , " . $_REQUEST['Provee'] . " , " . $_REQUEST['name'] . " , " . $_REQUEST['caracter'] . " , " . 0 . " , " . $_REQUEST['valor'] . " , " . $_REQUEST['iva'] . " , " . $_REQUEST['presen'] . " , " . $_REQUEST['tam'] . " , " . $imgBin; */
 /*  $sql="insert into producto (Id_prod,Est_prod,Tip_prod,Prov,Nam_prod,Carac_prod,Puntua_prod,Val_prod,Iva_prod,Presen_prod,Tam_prod,img_prod) values ($_REQUEST[ID],'1',$_REQUEST[tipo_prod],$_REQUEST[Provee],$_REQUEST[name],$_REQUEST[caracter],'0',$_REQUEST[valor],$_REQUEST[iva],$_REQUEST[presen],$_REQUEST[tam], $bits);";
    $resultado=$Conexion->query($sql);
          /*  */ 
         $objProd->Actualizar_Producto($_REQUEST['Id_prod_2']);

         echo "<script type='text/javascript'>alert('Se ha actualizado el dato correctamente, buen día.');
               window.location='../../Vista/index.php';  
              </script>";
             /* chmod('images/'.$archivo, 0777);
             echo '<div><b>Se ha subido correctamente la imagen.</b></div>';
             echo '<p><img src="images/'.$archivo.'"></p>'; */
         }
      }else {
            
            echo "<script type='text/javascript'>alert('Ocurrió algún error al subir el archivo. No pudo guardarse.');
             window.location='../../Vista/frmNewProducto.php?idProd=' . $_REQUEST[Id_prod_2] . ''; 
            </script>";
         }
      }
       
  
 
  
 

?>