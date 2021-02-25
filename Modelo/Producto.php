<?php
class Producto{
  /* Atributos */
 Public $Id_prod ; 
 Public $EstadoProd_Id_est_prod ; 
Public $TipProd_Id_tip_prod ; 

 public $Proveedor_Id_prov ;
 public $Name_prod ;
 public $Img_prod;
 public $Carac_prod ;
 public $Puntua_prod ;
 public $Val_prod ;
 public $Iva_prod ;
 public $Presen_prod ;
 public $Tam_prod ; 

/* ------------------Metodos Set-------------------*/
public function Producto(){

}

Public Function Set_EstadoProd_Id_est_prod($EstadoProd_Id_est_prod){
  $this->EstadoProd_Id_est_prod=$EstadoProd_Id_est_prod;
}
Public Function Set_TipProd_Id_tip_prod($TipProd_Id_tip_prod){
  $this->TipProd_Id_tip_prod=$TipProd_Id_tip_prod;
}

Public Function Set_Proveedor_Id_prov($Proveedor_Id_prov){
  $this->Proveedor_Id_prov=$Proveedor_Id_prov;
}
Public Function Set_Name_prod($Name_prod){
  $this->Name_prod=$Name_prod;
}
Public Function Set_Img_prod($Img_prod){
  $this->Img_prod=$Img_prod;
}
Public Function Set_Carac_prod($Carac_prod){
  $this->Carac_prod=$Carac_prod;
}
Public Function Set_Puntua_prod($Puntua_prod){
  $this->Puntua_prod=$Puntua_prod;
}
Public Function Set_Val_prod($Val_prod){
  $this->Val_prod=$Val_prod;
}
Public Function Set_Iva_prod($Iva_prod){
  $this->Iva_prod=$Iva_prod;
}
Public Function Set_Presen_prod($Presen_prod){
  $this->Presen_prod=$Presen_prod;
}
Public Function Set_Tam_prod($Tam_prod){
  $this->Tam_prod=$Tam_prod;
}
/* Metodos Get */
 Public function Get_Id_prod(){
   return $this->Id_prod;
 }
 Public function Get_EstadoProd_Id_est_prod(){
   return $this->EstadoProd_Id_est_prod;
 }
 Public function Get_TipProd_Id_tip_prod(){
   return $this->TipProd_Id_tip_prod;
 }

 Public function Get_Proveedor_Id_prov(){
   return $this->Proveedor_Id_prov;
 }
 Public function Get_Name_prod(){
   return $this->Name_prod;
 }
 Public function Get_Img_prod(){
   return $this->Img_prod;
 }
 Public function Get_Carac_prod(){
   return $this->Carac_prod;
 }
 Public function Get_Puntua_prod(){
   return $this->Puntua_prod;
 }
 Public function Get_Val_prod(){
   return $this->Val_prod;
 }
 Public function Get_Iva_prod(){
   return $this->Iva_prod;
 }
 Public function Get_Presen_prod(){
   return $this->Presen_prod;
 }
 Public function Get_Tam_prod(){
   return $this->Tam_prod;
 }
/*------------------- Metodos de consulta-------------------- */

public function Crear_Producto($Id_prod,$EstadoProd_Id_est_prod,$TipProd_Id_tip_prod,$Proveedor_Id_prov,$Name_prod,$Carac_prod,$Puntua_prod,$Val_prod,$Iva_prod,$Presen_prod,$Tam_prod,$Img_prod){
$this->Id_prod=$Id_prod;
$this->EstadoProd_Id_est_prod=$EstadoProd_Id_est_prod;
$this->TipProd_Id_tip_prod=$TipProd_Id_tip_prod;
$this->Proveedor_Id_prov=$Proveedor_Id_prov;
$this->Name_prod=$Name_prod;
$this->Img_prod=$Img_prod;
$this->Carac_prod=$Carac_prod;
$this->Puntua_prod=$Puntua_prod;
$this->Val_prod=$Val_prod;
$this->Iva_prod=$Iva_prod;
$this->Presen_prod=$Presen_prod;
$this->Tam_prod=$Tam_prod;
}

public function Agregar_Producto(){
  $this->Conexion=Conectarse();  
  $sql="insert into producto (Id_prod,Est_prod,Tip_prod,Prov,Nam_prod,Carac_prod,Puntua_prod,Val_prod,Iva_prod,Presen_prod,Tam_prod,img_prod) values ('$this->Id_prod','$this->EstadoProd_Id_est_prod','$this->TipProd_Id_tip_prod','$this->Proveedor_Id_prov','$this->Name_prod','$this->Carac_prod','$this->Puntua_prod','$this->Val_prod','$this->Iva_prod','$this->Presen_prod','$this->Tam_prod','$this->Img_prod');";
    $resultado=$this->Conexion->query($sql);
    $this->Conexion->close();
    return $resultado; 
}
Public function Actualizar_Producto($Id_prod){
  $this->Conexion=Conectarse();  
  /* $sql="update producto set Est_prod = '$this->EstadoProd_Id_est_prod',Tip_prod = '$this->TipProd_Id_tip_prod' , Prov = '$this->Proveedor_Id_prov' , Nam_prod = '$this->Name_prod' , Img_prod = '$this->Img_prod' , Carac_prod = '$this->Carac_prod' , Puntua_prod = '$this->Puntua_prod' , Val_prod = '$this->Val_prod' , Iva_prod = '$this->Iva_prod',Presen_prod = '$this->Presen_prod',Tam_prod = '$this->Tam_prod',  WHERE `producto`.`Id_prod` =  '$Id_prod';"; */
  $sql="UPDATE `producto` SET `Prov` = '$this->Proveedor_Id_prov', `Nam_prod` = '$this->Name_prod', `Carac_prod` = '$this->Carac_prod', `Puntua_prod` = '$this->Puntua_prod', `Val_prod` = '$this->Val_prod', `Iva_prod` = '$this->Iva_prod', `Presen_prod` = '$this->Presen_prod',`Tam_prod` = '$this->Tam_prod', `img_prod` = '$this->Img_prod' WHERE `producto`.`Id_prod` =  '$Id_prod';";
  $resultado=$this->Conexion->query($sql);
  $this->Conexion->close();
  return $resultado;
} 
Public function Consultar_Producto_undi($Id_prod){
  $this->Conexion=Conectarse();  
  $sql="select * from producto,estad_prod,tip_prod,proveedor where  (producto.Est_prod=estad_prod.Id_estad_prod) and (producto.Tip_prod=tip_prod.Id_tip_prod) and (producto.Prov=proveedor.Id_prov) and Id_prod='$Id_prod';"; 
  
  $resultado=$this->Conexion->query($sql);
 
  $this->Conexion->close();
  return $resultado;	
}
Public function Consultar_Producto_tipo($TipProd_Id_tip_prod,$EstadoProd_Id_est_prod){
  $this->Conexion=Conectarse();   
  $sql="select * from producto,estad_prod,tip_prod,proveedor where Tip_prod='$TipProd_Id_tip_prod' and Est_prod='$EstadoProd_Id_est_prod' and (producto.Est_prod=estad_prod.Id_estad_prod) and (producto.Tip_prod=tip_prod.Id_tip_prod) and (producto.Prov=proveedor.Id_prov);";
  $resultado=$this->Conexion->query($sql);
 
  $this->Conexion->close();
  return $resultado;	
}
Public function Consultar_Producto(){
  $this->Conexion=Conectarse();   
  $sql="select * from producto,estad_prod,tip_prod,proveedor where (producto.Est_prod=estad_prod.Id_estad_prod) and (producto.Tip_prod=tip_prod.Id_tip_prod) and (producto.Prov=proveedor.Id_prov);";
  $resultado=$this->Conexion->query($sql);
 
  $this->Conexion->close();
  return $resultado;	
}
Public function Consultar_Productos(){
  $this->Conexion=Conectarse();   
  $sql="select * from producto,estad_prod,tip_prod where ((producto.Est_prod=estad_prod.Id_estad_prod) and (producto.Tip_prod=tip_prod.Id_tip_prod)) and (Est_prod='1' or Est_prod='4') ORDER BY Tip_prod,Nam_prod;";
  $resultado=$this->Conexion->query($sql);
 
  $this->Conexion->close();
  return $resultado;	
}

}/* INSERT INTO `producto` (`Id_prod`, `Est_prod`, `Tip_prod`, `Prov`, `Nam_prod`, `Carac_prod`, `Puntua_prod`, `Val_prod`, `Iva_prod`, `Presen_prod`, `Tam_prod`, `img_prod`) VALUES
(100, 1, 1, 1002, 'Leche alpina entera', 'Leche alpina entera de 1100ml por unidad', 5, '3000.00', 19, 'Bolsa de 1100ml', '1100ml', '') */
?>