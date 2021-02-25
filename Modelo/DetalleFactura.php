<?php
class DetalleFactura{

  //Atributos
  public $Id_Comp;
  public $Factura_NumFactura;
  public $Cant_prod;
  
  public $id_prod;

  //Metodos

  public function DetalleFactura($Id_Comp){
    $this->Id_Comp=$Id_Comp; 
  }
  public function Set_Factura_NumFactura($Factura_NumFactura){
    $this->Factura_NumFactura=$Factura_NumFactura;
  }
  public function Set_Cant_prod($Cant_prod){
    $this->Cant_prod=$Cant_prod;
  }
  


  public function Get_Id_Comp(){
    return $this->Id_Comp;
  }
  public function Get_Factura_NumFactura(){
    return $this->Factura_NumFactura;
  }
  public function Get_Cant_prod(){
    return $this->Cant_prod;
  }
  public function Get_id_prod(){
    return $this->id_prod;
  }
  
  /*------------------- Metodos de consulta-------------------- */
  public function Crear_DetalleFactura($Factura_NumFactura,$Cant_prod,$id_prod){
  /* $this->Id_Comp=$Id_Comp; */
  $this->Factura_NumFactura=$Factura_NumFactura;
  $this->Cant_prod=$Cant_prod ;
  
  $this->id_prod=$id_prod;
  
  }
  public function Agregar_DetalleFactura(){
    $this->Conexion=Conectarse();
  $sql="insert into detal_fact(Num_fact,id_prod,Cant_prod)?=
values ('$this->Factura_NumFactura','$this->id_prod','$this->Cant_prod')";
  $resultado=$this->Conexion->query($sql);
  $this->Conexion->close();
  return $resultado;
  }
  Public function Actualizar_DetalleFactura($Id_Comp){
    $this->Conexion=Conectarse();
  $sql="update detal_fact set Num_fact='$this->Factura_NumFactura', id_prod='$this->id_prod'  where (Id_comp='$Id_Comp')";
  $resultado=$this->Conexion->query($sql);
  $this->Conexion->close();
  return $resultado;
  } 
  Public function Consultar_DetalleFactura($Factura_NumFactura){
    $this->Conexion=Conectarse();
   $sql="select Id_comp,Num_fact, id_prod, Cant_prod, Val_prod, Iva_prod from detal_fact,producto where Num_fact='$Factura_NumFactura' and (detal_fact.id_prod=producto.Id_prod) and ";
   $resultado=$this->Conexion->query($sql);
   $this->Conexion->close();
   return $resultado;	
  }
  
}
?>