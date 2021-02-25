<?php
class Inventario{

  //Atributos
  public $Entradas_2;
  public $Producto_Id_prod;
  public $Producto_TipProd_Id_tip_prod;
  public $Producto_EstadoProd_Id_est_prod;
  public $Entr_inv;
  public $Sal_inv;
  public $Saldo_inv;
  public $Neto_val;
  public $Total_val;
  public $IVA;

  //Metodos

  public function Inventario($Entradas_2){
    $this->Entradas_2=$Entradas_2; 
  }
  public function Set_Producto_Id_prod($Producto_Id_prod){
    $this->Producto_Id_prod=$Producto_Id_prod;
  }
  public function Set_Producto_TipProd_Id_tip_prod($Producto_TipProd_Id_tip_prod){
    $this->Producto_TipProd_Id_tip_prod=$Producto_TipProd_Id_tip_prod;
  }
  public function Set_Producto_EstadoProd_Id_est_prod($Producto_EstadoProd_Id_est_prod){
    $this->Producto_EstadoProd_Id_est_prod=$Producto_EstadoProd_Id_est_prod;
  }
  public function Set_Entr_inv($Entr_inv){
    $this->Entr_inv=$Entr_inv;
  }
  public function Set_Sal_inv($Sal_inv){
    $this->Sal_inv=$Sal_inv;
  }
  public function Set_Saldo_inv($Saldo_inv){
    $this->Saldo_inv=$Saldo_inv;
  }


  public function Get_Entradas_2(){
    return $this->Entradas_2;
  }
  public function Get_Producto_Id_prod(){
    return $this->Producto_Id_prod;
  }
  public function Get_Producto_TipProd_Id_tip_prod(){
    return $this->Producto_TipProd_Id_tip_prod;
  }
  public function Get_Producto_EstadoProd_Id_est_prod(){
    return $this->Producto_EstadoProd_Id_est_prod;
  }
  public function Get_Entr_inv(){
    return $this->Entr_inv;
  }
  public function Get_Saldo_inv(){
    return $this->Saldo_inv;
  }
  public function Get_Neto_val(){
    return $this->Neto_val;
  }
  /*------------------- Metodos de consulta-------------------- */
  public function Crear_Empre_Prov(,$Id_emp  ,$EstadoUsu_Id_est_usu  ,$Solicitud_empleado_idSolicitud  ,$Name_emp  ,$Email_emp  ,$Pass_emp  ,$Img_emp  ,$Id_supvisor  ,$Obser_emp  ,$Edad_emp  ){
    $this->Id_emp=$Id_emp;
  $this->EstadoUsu_Id_est_usu=$EstadoUsu_Id_est_usu;
  $this->Solicitud_empleado_idSolicitud=$Solicitud_empleado_idSolicitud;
  $this->Name_emp=$Name_emp;
  $this->Email_emp=$Email_emp;
  $this->Pass_emp=$Pass_emp;
  $this->Img_emp=$Img_emp;
  $this->Id_supvisor=$Id_supvisor;
  $this->Obser_emp=$Obser_emp;
  $this->Edad_emp=$Edad_emp;
  }
  public function Agregar_Empre_Prov(){
   $this->Conexion=Conectarse();  
  $sql="select * from tip_prod  where Id_tip_prod='$Id_tip_prod' ";
  $resultado=$this->Conexion->query($sql);
  $this->Conexion->close();
  return $resultado;
  }
  Public function Actualizar_Empre_Prov($Id_emp){
   $this->Conexion=Conectarse();  
  $sql="select * from tip_prod;";
  $resultado=$this->Conexion->query($sql);
  $this->Conexion->close();
  return $resultado;
  } 
  Public function Consultar_Empre_Prov($Id_emp){
  $this->Conexion=Conectarse();   
  $sql="select * from producto,estad_prod,tip_prod where ((producto.Est_prod=estad_prod.Id_estad_prod) and (producto.Tip_prod=tip_prod.Id_tip_prod)) and (Est_prod='1' or Est_prod='4') GROUP BY Tip_prod;";
  $resultado=$this->Conexion->query($sql);
 
  $this->Conexion->close();
  return $resultado;
  }
}
?>