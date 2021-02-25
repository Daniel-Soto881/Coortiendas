<?php
require "../ConexionDataBase.php";
require "../EstadoProd.php";
  require "../Proveedor.php";
  require "../TipProd.php";
  require "../Producto.php";
  
  

if (isset($_REQUEST["Continuar"])) {
   session_start();
   extract ($_REQUEST);
$objProd= new Producto();
$res_prod=$objProd->Consultar_Producto_undi($_REQUEST['ID']);
$si_o_no= $res_prod->num_rows;

$Conexion=Conectarse();  
 if ($si_o_no==1) {
  echo "<script type='text/javascript'>alert('El ID del producto ya se encuentra registrado, intente nuevamente.');
              window.location='../../Vista/frmNewProducto.php'; 
              </script>";
 }else {
   $check =getimagesize($_FILES["img"]["tmp_name"]);
   /* getimagesize($temp); */
   if($check !== false){
    
    
       $tipo = $_FILES['img']['type'];
       $tamano = $_FILES['img']['size'];
       
      
      if (!((strpos($tipo, "gif") || strpos($tipo, "jpeg") || strpos($tipo, "jpg") || strpos($tipo, "png"))) && ($tamano > 2000000)) {
         echo "<script type='text/javascript'>alert('Error. La extensión o el tamaño de los archivos no es correcta, se permiten archivos .gif, .jpg, .png. y de 200 kb como máximo.Intente nuevamente, gracias.');
               window.location='../../Vista/frmNewProducto. php';  
              </script>";
      
      }else {
         $archivo = $_FILES['img']['name'];
         $temp = $_FILES['img']['tmp_name'];
         $imgSub=fopen($temp,'r');
         $imgBin=fread($imgSub, $tamano );
         
         $imgBin= mysqli_escape_string($Conexion,$imgBin);
         
         /* $destino= 'C:/xampp/htdocs/Proyecto_COORTIENDAS/cha_0.1/Pro_1/ChangingWorld/Coortiendas_a1/images';
        
         move_uploaded_file($temp,$destino.$archivo);
        
        /* $img = addslashes(file_get_contents($temp)); */
       /*  $arc_object=fopen($destino . $archivo,"r");
         $bits=fread($arc_object,$tamano);
         fclose($arc_object);  */
        $objProd->Crear_Producto($_REQUEST['ID'],1,$_REQUEST['tipo_prod'],$_REQUEST['Provee'],$_REQUEST['name'],$_REQUEST['caracter'],0,$_REQUEST['valor'],$_REQUEST['iva'],$_REQUEST['presen'],$_REQUEST['tam'],$imgBin);
         
           
          /* echo $imgBin; */
 /*  $sql="insert into producto (Id_prod,Est_prod,Tip_prod,Prov,Nam_prod,Carac_prod,Puntua_prod,Val_prod,Iva_prod,Presen_prod,Tam_prod,img_prod) values ($_REQUEST[ID],'1',$_REQUEST[tipo_prod],$_REQUEST[Provee],$_REQUEST[name],$_REQUEST[caracter],'0',$_REQUEST[valor],$_REQUEST[iva],$_REQUEST[presen],$_REQUEST[tam], $bits);";
    $resultado=$Conexion->query($sql);
          /*  */ 
         $objProd->Agregar_Producto();
         echo "<script type='text/javascript'>alert('Se ha ingresado el dato correctamente, buen día.');
               window.location='../../Vista/frmNewProducto.php';  
              </script>";
             /* chmod('images/'.$archivo, 0777);
             echo '<div><b>Se ha subido correctamente la imagen.</b></div>';
             echo '<p><img src="images/'.$archivo.'"></p>'; */
         }
      }else {
            
            echo "<script type='text/javascript'>alert('Ocurrió algún error al subir el archivo. No pudo guardarse.');
          window.location='../../Vista/frmNewProducto.php';  
            </script>";
         }
      }
       }
  
 
  
 

?>