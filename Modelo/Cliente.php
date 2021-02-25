<?php
class Cliente{

  //Atributos
public $Id_Clie ;
public $Est_clie ;
public $Nam_clie ;
public $email_clie ;
private $Pass_clie ;


/* ---------------Metodos set-------------------*/
public function Cliente(){

}
public function Set_Id_Clie($Id_Clie){
  $this->Id_Clie=$Id_Clie;
}

public function Set_EstadoUsu_Id_est_usu($EstadoUsu_Id_est_usu){
  $this->Est_clie=$Est_clie;
}

public function Set_Name_usu($Name_usu){
  $this->Nam_clie=$Nam_clie;
}

public function Set_Email_usu($Email_usu){
  $this->email_clie=$email_clie;
}

public function Set_Pass_usu($Pass_usu){
  $this->Pass_clie=$Pass_clie;
}
/* -----------------Metodos Get -------------------- */

public function Get_Id_Clie(){
  return $this->Id_Clie;
}
public function Get_EstadoUsu_Id_est_usu(){
  return $this->EstadoUsu_Id_est_usu;
}
public function Get_Name_usu(){
  return $this->Nam_clie ;
}
public function Get_Email_usu(){
  return $this->Email_usu;
}
public function Get_Pass_usu(){
  return $this->Pass_usu;
}
/*------------------- Metodos de consulta-------------------- */
public function Crear_Cliente($Est_clie,$Nam_clie,$email_clie,$Pass_clie){

  $this->Est_clie=$Est_clie;
$this->Nam_clie=$Nam_clie;
$this->email_clie=$email_clie;
$this->Pass_clie=$Pass_clie;

}

public function Agregar_Cliente(){
  $this->Conexion=Conectarse();  
  $sql="insert into cliente (Est_clie,Nam_clie,email_clie,Pass_clie) 
  values ('$this->Est_clie','$this->Nam_clie','$this->email_clie','$this->Pass_clie');";
    $resultado=$this->Conexion->query($sql);
    $this->Conexion->close();
    return $resultado;
}
Public function Actualizar_Cliente($Id_Clie){
  $this->Conexion=Conectarse();  
  $sql="UPDATE cliente set Nam_clie='$this->Nam_clie', email_clie='$this->email_clie',Pass_clie='$this->Pass_clie'  where (Id_clie='$Id_Clie')";
  $resultado=$this->Conexion->query($sql);
  $this->Conexion->close();
  return $resultado;
} 
Public function ConsultarCliente($Id_Clie){
  $this->Conexion=Conectarse();   
  $sql="select Id_clie, Est_clie,name_est_usu, Nam_clie, email_clie, Pass_clie from est_usu,cliente where Id_clie='$Id_Clie' and Est_clie='1' and (cliente.Est_clie=est_usu.Id_est_usu);";
  $resultado=$this->Conexion->query($sql);
 
  $this->Conexion->close();
  return $resultado;	
}
Public function Consultar_el_Cliente($Id_Clie){
  $this->Conexion=Conectarse();   
  $sql="select * from cliente where Id_clie='$Id_Clie' and Est_clie='1' ;";
  $resultado=$this->Conexion->query($sql);
 
  $this->Conexion->close();
  return $resultado;	
}
Public function ConsultarClientes($Id_Clie){
  $this->Conexion=Conectarse();   
  $sql="select Id_clie, Est_clie,name_est_usu, Nam_clie, email_clie, Pass_clie, from est_usu,cliente where  (est_usu.Id_est_usu=cliente.Est_clie)  and Est_clie='1';";
  $resultado=$this->Conexion->query($sql);
 
  $this->Conexion->close();
  return $resultado;	
}



}
?>