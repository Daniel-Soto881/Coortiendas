<?php
class TipoPago{

  //Atributos
  public $Id_tip_pag;
  public $Nam_tip_pag;

  //Metodos

  public function TipoPago(){
   
   
  }
  public function Set_Nam_tip_pag($Nam_tip_pag){
    $this->Nam_tip_pag=$Nam_tip_pag;
  }
  public function Get_Id_tip_pag(){
    return $this->Id_tip_pag;
  }
  public function Get_Nam_tip_pag(){
    return $this->Nam_tip_pag;
  }

/*------------------- Metodos de consulta-------------------- */
  public function Consultar_tip_pag(){
    $this->Conexion=Conectarse();   
    $sql="SELECT * from tip_pag
     order by `tip_pag`.`Id_tip_pag` ASC;";
    $resultado=$this->Conexion->query($sql);
   
    $this->Conexion->close();
    return $resultado;
  }
  public function Agregar_Empre_Prov(){
   $this->Conexion=Conectarse();  
  $sql="select * from tip_prod  where Id_tip_prod='' ";
  $resultado=$this->Conexion->query($sql);
  $this->Conexion->close();
  return $resultado;
  }
  Public function Actualizar_Empre_Prov(){
   $this->Conexion=Conectarse();  
  $sql="select * from tip_prod;";
  $resultado=$this->Conexion->query($sql);
  $this->Conexion->close();
  return $resultado;
  } 

  Public function Consultar_Empre_Prov(){
  $this->Conexion=Conectarse();   
  $sql="select * from producto,estad_prod,tip_prod where ((producto.Est_prod=estad_prod.Id_estad_prod) and (producto.Tip_prod=tip_prod.Id_tip_prod)) and (Est_prod='1' or Est_prod='4') GROUP BY Tip_prod;";
  $resultado=$this->Conexion->query($sql);
 
  $this->Conexion->close();
  return $resultado;
  }
}
?>