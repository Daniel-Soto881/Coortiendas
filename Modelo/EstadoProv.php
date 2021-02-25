<?php
class EstadoProv{
  public $Id_est_prov;
  public $name_est_prov;

  public function EstadoProv($Id_est_prov){

    $this->Id_est_prov=$Id_est_prov;

  }
  //Metodos Set
  Public Function Set_Name_est_prod($name_est_prov){
    $this->name_est_prov=$name_est_prov;
  }
  //Metodo Get
  Public function Get_Id_est_prov(){
    return $this->Id_est_prov;
  }
  Public function Get_Name_est_prov(){
    return $this->name_est_prov;
  }
  /*------------------- Metodos de consulta-------------------- */
  public function Crear_EstadoProv($Id_est_prov  ,$name_est_prov){
    $this->Id_est_prov=$Id_est_prov;
  $this->name_est_prov=$name_est_prov;
 
  }
  public function Agregar_EstadoProv(){
   $this->Conexion=Conectarse();  
  $sql="select * from tip_prod  where Id_tip_prod='$Id_tip_prod' ";
  $resultado=$this->Conexion->query($sql);
  $this->Conexion->close();
  return $resultado;
  }
  Public function Actualizar_EstadoProv($Id_est_prov){
   $this->Conexion=Conectarse();  
  $sql="select * from tip_prod;";
  $resultado=$this->Conexion->query($sql);
  $this->Conexion->close();
  return $resultado;
  } 
  Public function Consultar_EstadoProv(){
  $this->Conexion=Conectarse();   
  $sql="select * from producto,estad_prod,tip_prod where ((producto.Est_prod=estad_prod.Id_estad_prod) and (producto.Tip_prod=tip_prod.Id_tip_prod)) and (Est_prod='1' or Est_prod='4') GROUP BY Tip_prod;";
  $resultado=$this->Conexion->query($sql);
 
  $this->Conexion->close();
  return $resultado;
  }
}
?>