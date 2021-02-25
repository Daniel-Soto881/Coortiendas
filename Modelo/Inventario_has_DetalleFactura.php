<?php
class Inventario_has_DetalleFactura{
  Public $Inventario_Entradas_2;
  Public $DetalleFatura_Id_Comp;

/* -----------Metodos Set---------- */
Public function Inventario_has_DetalleFactura($Inventario_Entradas_2){
  $this->Inventario_Entradas_2=$Inventario_Entradas_2;
}
Public function Set_DetalleFatura_Id_Comp($DetalleFatura_Id_Comp){
  $this->DetalleFatura_Id_Comp=$DetalleFatura_Id_Comp;
}

/* Metodos Get */
Public function Get_Inventario_Entradas_2(){
  return $this->Inventario_Entradas_2;
}
Public function Get_DetalleFatura_Id_Comp(){
  return $this->DetalleFatura_Id_Comp;
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