<?php
class Inventario{

  //Atributos
  public $Entradas_2;
  public $Producto_Id_prod;
  public $Limite_max;
  public $Cost_ini;
  public $Saldo_inv;
  public $Limite_min;
 

  //Metodos

  public function Inventario(){
    
  }
  public function Set_Entradas_2($Entradas_2){
    $this->Entradas_2=$Entradas_2;
  }
  public function Set_Producto_Id_prod($Producto_Id_prod){
    $this->Producto_Id_prod=$Producto_Id_prod;
  }
  public function Set_Limite_max($Limite_max){
    $this->Limite_max=$Limite_max;
  }
  public function Set_Cost_ini($Cost_ini){
    $this->Cost_ini=$Cost_ini;
  }
  public function Set_Saldo_inv($Saldo_inv){
    $this->Saldo_inv=$Saldo_inv;
  }
  public function Set_Limite_min($Limite_min){
    $this->Limite_min=$Limite_min;
  }


  public function Get_Entradas_2(){
    return $this->Entradas_2;
  }
  public function Get_Producto_Id_prod(){
    return $this->Producto_Id_prod;
  }
  public function Get_Limite_max(){
    return $this->Limite_max;
  }
  public function Get_Cost_ini(){
    return $this->Cost_ini;
  }
  public function Get_Saldo_inv(){
    return $this->Saldo_inv;
  }
  public function Get_Limite_min(){
    return $this->Limite_min;
  }
 
  /*------------------- Metodos de consulta-------------------- */
  public function Crear_Prod_Inve($Entradas_2,$Producto_Id_prod,$Limite_max,$Cost_ini,$Saldo_inv,$Limite_min ){
    $this->Entradas_2=$Entradas_2;
  $this->Producto_Id_prod=$Producto_Id_prod;
  $this->Limite_max=$Limite_max;
  $this->Cost_ini=$Cost_ini;
  $this->Saldo_inv=$Saldo_inv;
  $this->Limite_min=$Limite_min;
  
  }

  public function Consultar_prod_habiles(){
   $this->Conexion=Conectarse();  
   $sql="SELECT Pro. `Id_prod`,`Nam_prod`,`Val_prod`,`Iva_prod`,`Dscuen_prod` , `Entra_2`,`Limite_max`,`Saldo_inv`,`Limite_min` from `producto` as Pro INNER JOIN `inventario` as Inv ON Pro. Id_prod=Inv. Id_prod and (Pro.Est_prod=1 or Pro.Est_prod=4) and Saldo_inv>0 order by Pro.Id_prod,Nam_prod;";
  
  $resultado=$this->Conexion->query($sql);
  $this->Conexion->close();
  return $resultado;
  }

  Public function Actualizar_Empre_Prov($Entradas_2){
   $this->Conexion=Conectarse();  
  $sql="SELECT * from inventario WHERE Saldo_inv > Limite_min and ;";
  $resultado=$this->Conexion->query($sql);
  $this->Conexion->close();
  return $resultado;
  } 
  Public function Consultar_Empre_Prov($Entradas_2){
  $this->Conexion=Conectarse();   
  $sql="select * from producto,estad_prod,tip_prod where ((producto.Est_prod=estad_prod.Id_estad_prod) and (producto.Tip_prod=tip_prod.Id_tip_prod)) and (Est_prod='1' or Est_prod='4') GROUP BY Tip_prod;";
  $resultado=$this->Conexion->query($sql);
 
  $this->Conexion->close();
  return $resultado;
  }
}
?>