<?php
 class Proveedor {

  /* ----------------Atributos -----------------*/
  Public $Id_prov ;   
  Public $Empre_Prov_ID_emp_prov ;   
  Public $EstadoProv_Id_est_prov ; 
  Public $Name_Prov ;   
  Public $Cel_Prov ; 
Public $Email_prov ;  
  Public $Tel_Prov ; 
  Public $Cedu_prov ; 
  Public $Dir_prov ; 
  Public $Notas_prov ; 

/* -----------------Metodos set -----------------*/
 Public function Proveedor(){
   
 }
 Public function Set_Empre_Prov_ID_emp_prov($Empre_Prov_ID_emp_prov){
   $this->Empre_Prov_ID_emp_prov=$Empre_Prov_ID_emp_prov;
 }
 Public function Set_EstadoProv_Id_est_prov($EstadoProv_Id_est_prov){
   $this->EstadoProv_Id_est_prov=$EstadoProv_Id_est_prov;
 }
 Public function Set_Name_Prov($Name_Prov){
   $this->Name_Prov=$Name_Prov;
 }
 Public function Set_Cel_Prov($Cel_Prov){
   $this->Cel_Prov=$Cel_Prov;
 }
 Public function Set_Email_prov($Email_prov){
   $this->Email_prov=$Email_prov;
 }
 Public function Set_Tel_Prov($Tel_Prov){
   $this->Tel_Prov=$Tel_Prov;
 }
 Public function Set_Cedu_prov($Cedu_prov){
   $this->Cedu_prov=$Cedu_prov;
 }
 Public function Set_Dir_prov($Dir_prov){
   $this->Dir_prov=$Dir_prov;
 }
 Public function Set_Notas_prov($Notas_prov){
   $this->Notas_prov=$Notas_prov;
 }
/*  ----------------Metodos Get ------------------*/
 Public Function Get_Id_prov(){
   return $this->Id_prov;
 } 
 Public Function Get_Empre_Prov_ID_emp_prov(){
   return $this->Empre_Prov_ID_emp_prov;
 } 
 Public Function Get_EstadoProv_Id_est_prov(){
   return $this->EstadoProv_Id_est_prov;
 } 
 Public Function Get_Name_Prov(){
   return $this->Name_Prov;
 } 
 Public Function Get_Cel_Prov(){
   return $this->Cel_Prov;
 } 
 Public Function Get_Email_prov(){
   return $this->Email_prov;
 } 
 Public Function Get_Tel_Prov(){
   return $this->Tel_Prov;
 } 
 Public Function Get_Cedu_prov(){
   return $this->Cedu_prov;
 } 
 Public Function Get_Dir_prov(){
   return $this->Dir_prov;
 } 
 Public Function Get_Notas_prov(){
   return $this->Notas_prov;
 }
/*------------------- Metodos de consulta-------------------- */
public function Crear_Proveedor($Empre_Prov_ID_emp_prov  ,$EstadoProv_Id_est_prov  ,$Name_Prov  ,$Cel_Prov  ,$Email_prov  ,$Tel_Prov  ,$Cedu_prov  ,$Dir_prov  ,$Notas_prov  ){
  
$this->Empre_Prov_ID_emp_prov=$Empre_Prov_ID_emp_prov;
$this->EstadoProv_Id_est_prov=$EstadoProv_Id_est_prov;
$this->Name_Prov=$Name_Prov;
$this->Cel_Prov=$Cel_Prov;
$this->Tel_Prov=$Tel_Prov;
$this->Cedu_prov=$Cedu_prov;
$this->Dir_prov=$Dir_prov;
$this->Notas_prov=$Notas_prov;
}
public function Agregar_Proveedor(){
  $this->Conexion=Conectarse();  
  $sql="insert into proveedor (Empre_prov,Est_prov,Nam_prov,Cel_prov,Tel_prov,Cedu_prov,Dir_prov,Notas_prov) 
  values ('$this->Empre_Prov_ID_emp_prov','$this->EstadoProv_Id_est_prov','$this->Name_Prov','$this->Cel_Prov','$this->Tel_Prov','$this->Cedu_prov','$this->Dir_prov','$this->Notas_prov');";
    $resultado=$this->Conexion->query($sql);
    $this->Conexion->close();
    return $resultado;
}
Public function Actualizar_Proveedor($Id_prov){
 $this->Conexion=Conectarse();  
  $sql="update proveedor set Empre_prov='$this->Empre_Prov_ID_emp_prov',Est_prov='$this->EstadoProv_Id_est_prov',Nam_prov='$this->Name_Prov',Cel_prov='$this->Cel_Prov',Tel_prov='$this->Tel_Prov',Cedu_prov='$this->Cedu_prov',Dir_prov='$this->Dir_prov',Notas_prov='$this->Notas_prov'  where (Id_prov='$Id_prov')";
  $resultado=$this->Conexion->query($sql);
  $this->Conexion->close();
  return $resultado;
} 
Public function Consultar_Proveedor(){
$this->Conexion=Conectarse();  
  $sql="select Id_prov,Empre_prov,Est_prov,Nam_prov,Cel_prov,Tel_prov,Cedu_prov,Dir_prov,Notas_prov from proveedor where Est_prov='1';";
  $resultado=$this->Conexion->query($sql);
  $this->Conexion->close();
  return $resultado;
}




 }

?>