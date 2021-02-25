<?php
class TipUsu{

  //Atributos
  public $Id_tip_usu;
  public $Nam_tip_usu;

  //Metodos
  public function TipUsu(){
    
   
  }
  public function Set_Id_tip_usu($Id_tip_usu){
    $this->Id_tip_usu=$Id_tip_usu;
   
  }
  public function Set_Nam_tip_usu($Nam_tip_usu){
    $this->Nam_tip_usu=$Nam_tip_usu;
  }
  public function Get_Id_tip_usu(){
    return $this->Id_tip_usu;
  }
  public function Get_Nam_tip_usu(){
    return $this->Nam_tip_usu;
  }
/*------------------- Metodos de consulta-------------------- */
public function Crear_TipUsu($Nam_tip_usu ){
  
  $this->Nam_tip_usu=$Nam_tip_usu;

}
public function Agregar_TipUsu(){
   $this->Conexion=Conectarse();  
  $sql="insert into tip_usu(nam_tip_usu)=?
  values ('$this->Nam_tip_usu')";
    $resultado=$this->Conexion->query($sql);
    $this->Conexion->close();
    return $resultado;
}
Public function Actualizar_TipUsu($Id_tip_usu){
 
  $this->Conexion=Conectarse();  
   $sql="update tip_usu set nam_tip_usu='$this->Nam_tip_usu'  where (Id_tip_usu='$Id_tip_usu')";
  $resultado=$this->Conexion->query($sql);
  $this->Conexion->close();
  return $resultado;
} 
Public function Consultar_TipUsu(){
  $this->Conexion=Conectarse();  
$sql="select * from tip_usu";
$resultado=$this->Conexion->query($sql);
  $this->Conexion->close();
  return $resultado;
}

}
?>