<?php
class Empleados{

  //Atributos
public $Id_emp;
public $EstadoUsu_Id_est_usu;
public $Solicitud_empleado_idSolicitud;

public $Email_emp ;
private $Pass_emp ;
public $Img_emp;

public $Obser_emp;
public $Edad_emp;

/* ---------------Metodos set-------------------*/

public function Empleados(){
 
}

public function Set_EstadoUsu_Id_est_usu($EstadoUsu_Id_est_usu){
  $this->EstadoUsu_Id_est_usu=$EstadoUsu_Id_est_usu;
}

public function Set_Solicitud_empleado_idSolicitud($Solicitud_empleado_idSolicitud){
  $this->Solicitud_empleado_idSolicitud=$Solicitud_empleado_idSolicitud;
}



public function Set_Email_emp($Email_emp){
  $this->Email_emp=$Email_emp;
}

public function Set_Pass_emp($Pass_emp){
  $this->Pass_emp=$Pass_emp;
}

public function Set_Img_emp($Img_emp){
  $this->Img_emp=$Img_emp;
}



public function Set_Obser_emp($Obser_emp){
  $this->Obser_emp=$Obser_emp;
}

public function Set_Edad_emp($Edad_emp){
  $this->Edad_emp=$Edad_emp;
}
/* -----------------Metodos Get -------------------- */

public function Get_Id_Clie(){
  return $this->Id_emp;
}
public function Get_EstadoUsu_Id_est_usu(){
  return $this->EstadoUsu_Id_est_usu;
}
public function Get_Email_usu(){
  return $this->Email_usu;
}
public function Get_Pass_usu(){
  return $this->Pass_usu;
}
public function Get_Img_emp(){
  return $this->Img_emp;
}

public function Get_Obser_emp(){
  return $this->Obser_emp;
}
public function Get_Edad_emp(){
  return $this->Edad_emp;
}
/*------------------- Metodos de consulta-------------------- */

  public function Crear_mismoEmpleado($Name_emp  ,$Email_emp  ,$Pass_emp  ,$Obser_emp  ,$Edad_emp  ){
  
    /* $this->EstadoUsu_Id_est_usu=$EstadoUsu_Id_est_usu; */
    /* $this->Solicitud_empleado_idSolicitud=$Solicitud_empleado_idSolicitud; */
    $this->Name_emp=$Name_emp;
    $this->Email_emp=$Email_emp;
    $this->Pass_emp=$Pass_emp;
    $this->Obser_emp=$Obser_emp;
    
    /* $this->Obser_emp=$Obser_emp;*/
    $this->Edad_emp=$Edad_emp; 
      }
      
/* Solicitud_empleado_idSolicitud

Pass_emp
Obser_emp
 */
public function Crear_Empleado($Id_emp,$EstadoUsu_Id_est_usu  ,$Email_emp  ,$Pass_emp  ,$Obser_emp , $Solicitud_empleado_idSolicitud  ){
  
  $this->EstadoUsu_Id_est_usu=$EstadoUsu_Id_est_usu;
  $this->Solicitud_empleado_idSolicitud=$Solicitud_empleado_idSolicitud;
  /* $this->Name_emp=$Name_emp; */
  $this->Email_emp=$Email_emp;
  $this->Pass_emp=$Pass_emp;
  /* $this->Img_emp=$Img_emp; */
  
  $this->Obser_emp=$Obser_emp;
  $this->Id_emp=$Id_emp;
  /* ID_empl
  Est_usu
  Sol_empl
  Email_empl
  Pass_emp
  Obser_empl */
    }
  public function Agregar_Empleado(){
    $this->Conexion=Conectarse();
    $sql="INSERT INTO `empleados` 
    (`ID_empl`, `Est_usu`, `Sol_empl`, `Email_empl`   , `Pass_emp`, `Obser_empl`) VALUES 
    ('$this->Id_emp','$this->EstadoUsu_Id_est_usu','$this->Solicitud_empleado_idSolicitud','$this->Email_emp','$this->Pass_emp', '$this->Obser_emp');";
    $resultado=$this->Conexion->query($sql);
    $this->Conexion->close();
    return $resultado;

    /* INSERT INTO `empleados` 
    (`ID_empl`, `Est_usu`, `Sol_empl`, `Email_empl`   , `Pass_emp`, `Obser_empl`) VALUES 
    ('$this->Id_emp','$this->EstadoUsu_Id_est_usu','$this->Solicitud_empleado_idSolicitud','$this->Email_emp','$this->Pass_emp', '$this->Obser_emp'); */

  }
  Public function Actualizar_MismoEmpleado($Id_emp){
    $this->Conexion=Conectarse();
    $sql="update empleados set Email_empl='$this->Email_emp', Pass_emp='$this->Pass_emp' where (ID_empl='$Id_emp')"; 
    $resultado=$this->Conexion->query($sql);
    $this->Conexion->close();
    return $resultado;
  } 
  Public function Actualizar_Empleados($Id_emp){
    $this->Conexion=Conectarse();
    $sql="update empleados set Est_usu='$this->EstadoUsu_Id_est_usu', Sol_empl='$this->Solicitud_empleado_idSolicitud',Nam_empl='$this->Name_emp',  Email_empl='$this->Email_emp',  Pass_emp='$this->Pass_emp',  Img_emp='$this->Img_emp',  Obser_empl='$this->Obser_emp',Edad_empl='$this->Edad_emp'  where (ID_empl='$Id_emp')"; 
    $resultado=$this->Conexion->query($sql);
    $this->Conexion->close();
    return $resultado;
  } 
  Public function Consultar_Empleado($Id_emp){
    $this->Conexion=Conectarse();   
    $sql="select ID_empl, Est_usu,name_est_usu, Sol_empl, Nam_empl, Email_empl, Pass_emp, Img_emp, Obser_empl, Edad_empl, pacNombres from empleados,est_usu,solic_emp where ID_empl='$Id_emp' and (empleados.Est_usu=est_usu.Id_est_usu) and (empleados.Sol_empl=solic_emp.Id_sol_emp) ";
    $resultado=$this->Conexion->query($sql);
   
    $this->Conexion->close();
    return $resultado;	
  }
  Public function Consultar_El_Empleado($Id_emp){
    $this->Conexion=Conectarse();   
    $sql="select * from solic_emp where doc_usu='$Id_emp' ;";
    $resultado=$this->Conexion->query($sql);
   
    $this->Conexion->close();
    return $resultado;	
  }
  Public function Consultar_Empleados(){
    $this->Conexion=Conectarse();
    $sql="select ID_empl, Est_usu,name_est_usu, Sol_empl, Nam_empl, Email_empl, Pass_emp, Img_emp, Obser_empl, Edad_empl, pacNombres from empleados,est_usu,solic_emp where  and (empleados.Est_usu=est_usu.Id_est_usu) and (empleados.Sol_empl=solic_emp.Id_sol_emp) ";
    $resultado=$this->Conexion->query($sql);
    $this->Conexion->close();
    return $resultado;	 
  }
}
?>