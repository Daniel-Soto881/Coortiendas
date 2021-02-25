<?php
class EstadoMovimiento{
  public $Id_est_mov;
  public $Nam_est_mov;

  public function EstadoMovimiento($Id_est_mov){

    $this->Id_est_mov=$Id_est_mov;

  }
  //Metodos Set
  Public Function Set_Name_est_prod($Nam_est_mov){
    $this->Nam_est_mov=$Nam_est_mov;
  }
  //Metodo Get
  Public function Get_Id_est_mov(){
    return $this->Id_est_mov;
  }
  Public function Get_Nam_est_mov(){
    return $this->Nam_est_mov;
  }
  /*------------------- Metodos de consulta-------------------- */
  public function Crear_EstadoMovimiento($Id_est_mov  ,$Nam_est_mov){
    $this->Id_est_mov=$Id_est_mov;
    $this->Nam_est_mov=$Nam_est_mov;
  
  }
  public function Agregar_EstadoMovimiento(){
   $this->Conexion=Conectarse();  
  $sql="select * from tip_prod  where Id_tip_prod='$Id_tip_prod' ";
  $resultado=$this->Conexion->query($sql);
  $this->Conexion->close();
  return $resultado;
  }
  Public function Actualizar_EstadoMovimiento($Id_est_mov){
   $this->Conexion=Conectarse();  
  $sql="select * from tip_prod;";
  $resultado=$this->Conexion->query($sql);
  $this->Conexion->close();
  return $resultado;
  } 
  Public function Consultar_EstadoMovimiento(){
  $this->Conexion=Conectarse();   
  $sql="select * from producto,estad_prod,tip_prod where ((producto.Est_prod=estad_prod.Id_estad_prod) and (producto.Tip_prod=tip_prod.Id_tip_prod)) and (Est_prod='1' or Est_prod='4') GROUP BY Tip_prod;";
  $resultado=$this->Conexion->query($sql);
 
  $this->Conexion->close();
  return $resultado;
  }
}
?>