<?php
class EstadoFac{

  //Atributos
  public $Id_est_fac;
  public $Nam_est_fac;

  //Metodos

  public function EstadoFac($Id_est_fac){
    $this->Id_est_fac=$Id_est_fac;
   
  }
  public function Set_Nam_est_fac($Nam_est_fac){
    $this->Nam_est_fac=$Nam_est_fac;
  }
  public function Get_Id_est_fac(){
    return $this->Id_est_fac;
  }
  public function Get_Nam_est_fac(){
    return $this->Nam_est_fac;
  }
/*------------------- Metodos de consulta-------------------- */
public function Crear_EstadoFac($Id_est_fac  ,$Nam_est_fac){
  $this->Id_est_fac=$Id_est_fac;
$this->Nam_est_fac=$Nam_est_fac;

}
public function Agregar_EstadoFac(){

}
Public function Actualizar_EstadoFac($Id_est_fac){

} 
Public function Consultar_EstadosFac(){

}

}
?>