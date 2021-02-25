<?php
class TipMov{
  public $Id_tip_mov;
  public $Name_tip_mov;

  public function TipMov($Id_est_mov){

    $this->Id_tip_mov=$Id_tip_mov;

  }
  //Metodos Set
  Public Function Set_Name_est_prod($Name_tip_mov){
    $this->Name_tip_mov=$Name_tip_mov;
  }
  //Metodo Get
  Public function Get_Id_tip_mov(){
    return $this->Id_tip_mov;
  }
  Public function Get_Name_tip_mov(){
    return $this->Name_tip_mov;
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