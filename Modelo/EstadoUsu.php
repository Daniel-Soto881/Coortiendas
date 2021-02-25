<?php
class EstadoUsu{
  public $Id_est_usu;
  public $Name_est;

  public function EstadoUsu($Id_est_usu){

    $this->Id_est_usu=$Id_est_usu;

  }
  //Metodos Set
  Public Function Set_Name_est($Name_est){
    $this->Name_est=$Name_est;
  }
  //Metodo Get
  Public function Get_Id_est_usu(){
    return $this->Id_est_usu;
  }
  Public function Get_Name_est(){
    return $this->Name_est;
  }
  /*------------------- Metodos de consulta-------------------- */
  public function Crear_EstadoUsu($Name_est   ){
    $this->Name_est=$Name_est;
  
  }
  public function Agregar_EstadoUsu(){
    $this->Conexion=Conectarse();
    $sql="insert into est_usu(name_est_usu) values ('$this->Name_est') ";
    $resultado=$this->Conexion->query($sql);
      $this->Conexion->close();
      return $resultado;
  }
  Public function Actualizar_EstadoUsu($Id_est_usu){
    $this->Conexion=Conectarse();
    
    $sql="update est_usu set name_est_usu='$this->Name_est'  where (Id_est_usu='$Id_est_usu')";
    $resultado=$this->Conexion->query($sql);
      $this->Conexion->close();
      return $resultado;
  } 
  Public function Consultar_EstadoUsu(){
    $this->Conexion=Conectarse();   
    $sql="select * from est_usu ";
    $resultado=$this->Conexion->query($sql);
   
    $this->Conexion->close();
    return $resultado;	
  }
}
?>