<?php
class TipoDoc{

  //Atributos
  public $Id_tip_doc;
  public $Nam_tip_doc;

  //Metodos

  public function TipoDoc(){
    
   
  }
  public function Set_Nam_tip_doc($Nam_tip_doc){
    $this->Nam_tip_doc=$Nam_tip_doc;
  }
  public function Get_Id_tip_doc(){
    return $this->Id_tip_doc;
  }
  public function Get_Nam_tip_doc(){
    return $this->Nam_tip_doc;
  }
/*------------------- Metodos de consulta-------------------- */
public function Crear_TipoDoc($Nam_tip_doc   ){
  $this->Nam_tip_doc=$Nam_tip_doc;

}
public function Agregar_TipoDoc(){
  $this->Conexion=Conectarse();
  $sql="insert into tip_doc(Nam_tip_doc) values ('$this->Nam_tip_doc') ";
  $resultado=$this->Conexion->query($sql);
    $this->Conexion->close();
    return $resultado;
}
Public function Actualizar_TipoDoc($Id_tip_doc){
  $this->Conexion=Conectarse();
  
  $sql="update tip_doc set Nam_tip_doc='$this->Nam_tip_doc'  where (Id_tip_doc='$Id_tip_doc')";
  $resultado=$this->Conexion->query($sql);
    $this->Conexion->close();
    return $resultado;
} 
Public function Consultar_TipoDoc(){
  $this->Conexion=Conectarse();   
  $sql="select * from tip_doc ";
  $resultado=$this->Conexion->query($sql);
 
  $this->Conexion->close();
  return $resultado;	
}

}
?>