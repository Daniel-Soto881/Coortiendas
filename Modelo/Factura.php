<?php
class Factura{

  //Atributos
  public $NumFactura;
  public $EstadoFac_Id_est_fac;
  public $TipoPago_Id_tip_pag;
  public $Cliente_Id_Clie;
  public $Empleados_id_emp;
  public $Fecha_Fac;
  public $Caja_fac;
  public $Neto_val;
  public $Total_val;
  public $IVA;

  //Metodos

  public function Factura($NumFactura){
    $this->NumFactura=$NumFactura; 
  }
  public function Set_EstadoFac_Id_est_fac($EstadoFac_Id_est_fac){
    $this->EstadoFac_Id_est_fac=$EstadoFac_Id_est_fac;
  }
  public function Set_TipoPago_Id_tip_pag($TipoPago_Id_tip_pag){
    $this->TipoPago_Id_tip_pag=$TipoPago_Id_tip_pag;
  }
  public function Set_Cliente_Id_Clie($Cliente_Id_Clie){
    $this->Cliente_Id_Clie=$Cliente_Id_Clie;
  }
  public function Set_Empleados_id_emp($Empleados_id_emp){
    $this->Empleados_id_emp=$Empleados_id_emp;
  }
  public function Set_Fecha_Fac($Fecha_Fac){
    $this->Fecha_Fac=$Fecha_Fac;
  }
  public function Set_Caja_fac($Caja_fac){
    $this->Caja_fac=$Caja_fac;
  }
  public function Set_Neto_val($Neto_val){
    $this->Neto_val=$Neto_val;
  }
  public function Set_Total_val($Total_val){
    $this->Total_val=$Total_val;
  }
  public function Set_IVA($IVA){
    $this->IVA=$IVA;
  }


  public function Get_NumFactura(){
    return $this->NumFactura;
  }
  public function Get_EstadoFac_Id_est_fac(){
    return $this->EstadoFac_Id_est_fac;
  }
  public function Get_TipoPago_Id_tip_pag(){
    return $this->TipoPago_Id_tip_pag;
  }
  public function Get_Cliente_Id_Clie(){
    return $this->Cliente_Id_Clie;
  }
  public function Get_Empleados_id_emp(){
    return $this->Empleados_id_emp;
  }
  public function Get_Fecha_Fac(){
    return $this->Fecha_Fac;
  }
  public function Get_Neto_val(){
    return $this->Neto_val;
  }
  public function Get_Total_val(){
    return $this->Total_val;
  }
  public function Get_IVA(){
    return $this->IVA;
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