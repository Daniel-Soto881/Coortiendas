<?php
class Factura{

  //Atributos
  public $NumFactura;
  public $EstadoFac_Id_est_fac;
  public $TipoPago_Id_tip_pag;
  public $Cliente_Id_Clie;
  public $Empleados_id_emp;
  public $Fecha_Fac;
  public $Fecha_Entrega;
  public $Caja_fac;
  public $Total_val;
  public $Retenido_Fac;
  

  //Metodos

  public function Set_NumFactura($NumFactura){
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
  public function Set_Fecha_Entrega($Fecha_Entrega){
    $this->Fecha_Entrega=$Fecha_Entrega;
  }
  public function Set_Caja_fac($Caja_fac){
    $this->Caja_fac=$Caja_fac;
  }
  public function Set_Retenido_Fac($Retenido_Fac){
    $this->Retenido_Fac=$Retenido_Fac;
  }
  public function Set_Total_val($Total_val){
    $this->Total_val=$Total_val;
  }


  public function Set_Factura(){
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
  public function Get_Fecha_Entrega(){
    return $this->Fecha_Entrega; 
  }
  public function Get_Caja_fac(){
    return $this->Caja_fac; 
  }
  public function Get_Retenido_Fac(){
    return $this->Retenido_Fac; 
  }
  public function Get_Total_val(){
    return $this->Total_val; 
  }
  /*------------------- Metodos de consulta-------------------- */
  public function Crear_Factura_base($EstadoFac_Id_est_fac,$TipoPago_Id_tip_pag,$Cliente_Id_Clie,$Empleados_id_emp,$Fecha_Entrega,$Caja_fac){
    
  $this->EstadoFac_Id_est_fac=$EstadoFac_Id_est_fac;
  $this->TipoPago_Id_tip_pag= $TipoPago_Id_tip_pag;
  $this->Cliente_Id_Clie=     $Cliente_Id_Clie;
  $this->Empleados_id_emp=    $Empleados_id_emp;
  $this->Fecha_Entrega=       $Fecha_Entrega;
  $this->Caja_fac=            $Caja_fac;
  }
  public function Agregar_Factura_base(){
    $this->Conexion=Conectarse();  
    $sql="INSERT into factura (Est_fact,Tip_pag,Id_cliente,eple_fact,Fech_entrega,Caja_fact) 
  values ('$this->EstadoFac_Id_est_fac','$this->TipoPago_Id_tip_pag','$this->Cliente_Id_Clie','$this->Empleados_id_emp','$this->Fecha_Entrega','$this->Caja_fac');";
    $resultado=$this->Conexion->query($sql);
    $this->Conexion->close();
    return $resultado; 
  }
  public function Consultar_Factura_base(){
    $this->Conexion=Conectarse();  
    $sql="SELECT top 1 Num_fact from  factura  
  where Est_fact='$this->EstadoFac_Id_est_fac' and eple_fact='$this->Empleados_id_emp' and Caja_fact=' $this->Caja_fac' order by Num_fact desc;";/* elegir la ultima facturarealizada  */
    $resultado=$this->Conexion->query($sql);
    $this->Conexion->close();
    return $resultado;
  }
  public function Agregar_Empre_Prov(){
   $this->Conexion=Conectarse();  
  $sql="SELECT * from tip_prod  where Id_tip_prod='$Id_tip_prod' ";
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