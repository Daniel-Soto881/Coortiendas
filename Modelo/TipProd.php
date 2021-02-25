<?php
class TipProd{

  //Atributos
  public $Id_tip_prod;
  public $Name_tip_prod;

  //Metodos

  public function TipProd(){//sinonimo de la clave principal
   
   
  }
  public function Set_Id_tip_prod($Id_tip_prod){//sinonimo de la clave principal
    $this->Id_tip_prod=$Id_tip_prod;
   
  }
  public function Set_Name_tip_prod($Name_tip_prod){
    $this->Name_tip_prod=$Name_tip_prod;
  }
  public function Get_Id_tip_prod(){
    return $this->Id_tip_prod;
  }
  public function Get_Name_tip_prod(){
    return $this->Name_tip_prod;
  }

/*------------------- Metodos de consulta-------------------- */
public function Crear_TipProd($Name_tip_prod  ){
  $this->Name_tip_prod=$Name_tip_prod;

}
public function Agregar_TipProd(){
  $this->Conexion=Conectarse();  
  $sql="insert into tip_prod (Nam_tip_prod) 
  values ('$this->Nam_tip_prod');";
    $resultado=$this->Conexion->query($sql);
    $this->Conexion->close();
    return $resultado;
}
Public function Actualizar_TipProd($Id_tip_prod){
  $this->Conexion=Conectarse();  
  $sql="update tip_prod set Nam_tip_prod='$this->Nam_tip_prod'  where (Id_tip_prod='$Id_tip_prod')";
  $resultado=$this->Conexion->query($sql);
  $this->Conexion->close();
  return $resultado;
} 
Public function Consultar_TipProd($Id_tip_prod){
  $this->Conexion=Conectarse();  
  $sql="select * from tip_prod  where Id_tip_prod='$Id_tip_prod' ";
  $resultado=$this->Conexion->query($sql);
  $this->Conexion->close();
  return $resultado;
}
Public function Consultar_TipProds(){
  $this->Conexion=Conectarse();  
  $sql="select * from tip_prod;";
  $resultado=$this->Conexion->query($sql);
  $this->Conexion->close();
  return $resultado;
}
Public function Consultar_Prod_TipProd(){
  $this->Conexion=Conectarse();   
  $sql="select * from producto,estad_prod,tip_prod where ((producto.Est_prod=estad_prod.Id_estad_prod) and (producto.Tip_prod=tip_prod.Id_tip_prod)) and (Est_prod='1' or Est_prod='4') GROUP BY Tip_prod;";
  $resultado=$this->Conexion->query($sql);
 
  $this->Conexion->close();
  return $resultado;

}
}
?>