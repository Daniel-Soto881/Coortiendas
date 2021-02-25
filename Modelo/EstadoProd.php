<?php
class EstadoProd{
  public $Id_est_prod;
  public $Name_est_prod;

  public function EstadoProd($Id_est_prod){

    $this->Id_est_prod=$Id_est_prod;

  }
  //Metodos Set
  Public Function Set_Name_est_prod($Name_est_prod){
    $this->Name_est_prod=$Name_est_prod;
  }
  //Metodo Get
  Public function Get_Id_est_prod(){
    return $this->Id_est_prod;
  }
  Public function Get_Name_est_prod(){
    return $this->Name_est_prod;
  }
  /*------------------- Metodos de consulta-------------------- */
  public function Crear_EstadoProd($Id_est_prod  ,$Name_est_prod ){
    $this->Id_est_prod=$Id_est_prod;
  $this->Name_est_prod=$Name_est_prod;
  
  }
  public function Agregar_EstadoProd(){
   $this->Conexion=Conectarse();  
  $sql="select * from tip_prod  where Id_tip_prod='$Id_tip_prod' ";
  $resultado=$this->Conexion->query($sql);
  $this->Conexion->close();
  return $resultado;
  }
  Public function Actualizar_EstadoProd($Id_est_prod){
   $this->Conexion=Conectarse();  
  $sql="select * from tip_prod;";
  $resultado=$this->Conexion->query($sql);
  $this->Conexion->close();
  return $resultado;
  } 
  Public function Consultar_EstadoProd(){
  $this->Conexion=Conectarse();   
  $sql="select * from producto,estad_prod,tip_prod where ((producto.Est_prod=estad_prod.Id_estad_prod) and (producto.Tip_prod=tip_prod.Id_tip_prod)) and (Est_prod='1' or Est_prod='4') GROUP BY Tip_prod;";
  $resultado=$this->Conexion->query($sql);
 
  $this->Conexion->close();
  return $resultado;
  }
}
?>