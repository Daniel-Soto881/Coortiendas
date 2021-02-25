<?php
class EstadoSolici{

  //Atributos
  public $Id_est_sol;
  public $Nam_est_sol;

  //Metodos

  public function EstadoSolici($Id_est_sol){
    $this->Id_est_sol=$Id_est_sol;
   
  }
  public function Set_Nam_est_sol($Nam_est_sol){
    $this->Nam_est_sol=$Nam_est_sol;
  }
  public function Get_Id_est_sol(){
    return $this->Id_est_sol;
  }
  public function Get_Nam_est_sol(){
    return $this->Nam_est_sol;
  }
/*------------------- Metodos de consulta-------------------- */
public function Crear_EstadoSolici($Nam_est_sol   ){
  $this->Nam_est_sol=$Nam_est_sol;

}
public function Agregar_EstadoSolici(){
  $this->Conexion=Conectarse();
  $sql="insert into est_sol(nam_est_sol) values ('$this->Nam_est_sol') ";
  $resultado=$this->Conexion->query($sql);
    $this->Conexion->close();
    return $resultado;
}
Public function Actualizar_EstadoSolici($Id_est_sol){
  $this->Conexion=Conectarse();
  
  $sql="update est_sol set nam_est_sol='$this->Nam_est_sol'  where (Id_est_sol='$Id_est_sol')";
  $resultado=$this->Conexion->query($sql);
    $this->Conexion->close();
    return $resultado;
} 
Public function Consultar_EstadoSolici($Est_sol_emp,$Tip_usu){
  $this->Conexion=Conectarse();   
  $sql="select * from est_sol ";
  $resultado=$this->Conexion->query($sql);
 
  $this->Conexion->close();
  return $resultado;	
}

}
?>