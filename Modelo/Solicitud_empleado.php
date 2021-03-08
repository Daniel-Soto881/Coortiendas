<?php
class Solicitud_empleado{

  //Atributos
private $Id_sol_emp;
private $Est_sol_emp;
private $Tip_usu;
private $Tip_doc_usu ;
private $doc_usu ;
private $Sol_emp;
private $Email_sol;
private $Pass_sol;
private $Edad_ini;
private $Fecha_sol ;
private $Name_usu;
private $IMG;
/* ---------------Metodos set-------------------*/

public function Solicitud_empleado(){
  
}
public function Set_Id_sol_emp($Id_sol_emp){
  $this->Id_sol_emp=$Id_sol_emp;
}
public function Set_Est_sol_emp($Est_sol_emp){
  $this->EstadoSoli_Id_est_sol=$Est_sol_emp;
}

public function Set_Tip_usu($Tip_usu){
  $this->TipUsu_Id_tip_usu=$Tip_usu;
}

public function Set_Tip_doc_usu($Tip_doc_usu){
  $this->TipoDoc_Id_tip_doc=$Tip_doc_usu;
}

public function Set_doc_usu($doc_usu){
  $this->doc_usu=$doc_usu;
}
public function Set_Sol_emp($Sol_emp){
  $this->idSolicitud=$Sol_emp;
}

public function Set_Email_sol($Email_sol){
  $this->Email_sol=$Email_sol;
}

public function Set_Pass_sol($Pass_sol){
  $this->Pass_sol=$Pass_sol;
}

/* public function Set_Edad_ini($Edad_ini){
  $this->TipoDoc_Id_tip_doc=$TipoDoc_Id_tip_doc;
} */

public function Set_Fecha_sol($Fecha_sol){
  $this->Sol_emp=$Sol_emp;
}
public function Set_Img_ext($IMG){
  $this->IMG=$IMG;
}
/* -----------------Metodos Get -------------------- */

public function Get_idSolicitud(){
  return $this->Id_sol_emp;
}
public function Get_EstadoSoli_Id_est_sol(){
  return $this->EstadoSoli_Id_est_sol;
}
public function Get_TipUsu_Id_tip_usu(){
  return $this->TipUsu_Id_tip_usu;
}
public function Get_TipoDoc_Id_tip_doc(){
  return $this->TipoDoc_Id_tip_doc;
}
public function Get_Set_Sol_emp(){
  return $this->Set_Sol_emp;
}
public function Get_IMG(){
  return $this->IMG;
}
/*------------------- Metodos de consulta-------------------- */
public function Asignar_Fecha_Sol(){
  $this->Fecha_Sol= '<script type="text/javascript">$Fech_Sol=new date(); </script>';
}
public function Crear_Sol_eml($Est_sol_emp,$Tip_usu  ,$Tip_doc_usu  ,$doc_usu  ,$Sol_emp  ,$Email_sol  ,$Name_usu ,$Pass_sol  ,$Edad_ini,$Fecha_sol  ,$IMG  ){
$this->Est_sol_emp=$Est_sol_emp;
$this->Tip_usu=$Tip_usu;
$this->Tip_doc_usu=$Tip_doc_usu;
$this->doc_usu=$doc_usu;
$this->Sol_emp=$Sol_emp;
$this->Email_sol=$Email_sol;
$this->Pass_sol=$Pass_sol;
$this->Edad_ini=$Edad_ini;
$this->Name_usu=$Name_usu;
$this->Fecha_sol=$Fecha_sol;
$this->IMG=$IMG; 

}
public function Agregar_Sol_emp(){
  $this->Conexion=Conectarse();
  $sql="INSERT INTO `solic_emp` (`Est_sol_emp`, `Tip_usu`, `Tip_doc_usu`, `doc_usu`, `Sol_emp`, `Email_sol`, `Nombre`, `Pass_sol`, `Fecha_nac`, `Fecha_sol`, `IMG`) VALUES
  ('$this->Est_sol_emp','$this->Tip_usu','$this->Tip_doc_usu','$this->doc_usu','$this->Sol_emp','$this->Email_sol','$this->Name_usu','$this->Pass_sol','$this->Edad_ini','$this->Fecha_sol','$this->IMG ');";



  $resultado=$this->Conexion->query($sql);
    $this->Conexion->close();  
    return $resultado;
    /* return  $this->Est_sol_emp. "_______" .$this->Tip_usu. "_______" .$this->Tip_doc_usu. "_______" .$this->doc_usu . "_______" . $this->Sol_emp . "_______" . $this->Email_sol . "_______" . $this->Name_usu . "_______" . $this->Pass_sol . "_______" . $this->Edad_ini . "_______" . $this->Fecha_sol . "_______" . $this->IMG; */
}
Public function Actualizar_Sol_emp($Id_sol_emp){
  $this->Conexion=Conectarse();
  $sql="update solic_emp set Est_sol_emp='$this->Est_sol_emp',Tip_usu='$this->Tip_usu',Tip_doc_usu='$this->Tip_doc_usu',doc_usu='$this->doc_usu',Sol_emp='$this->Sol_emp',Email_sol='$this->Email_sol',Nombre='$this->Name_usu ',Pass_sol='$this->Pass_sol',Edad_ini='$this->Edad_ini',Fecha_sol='$this->Fecha_sol',
  IMG='$this->IMG',  where (Id_sol_emp='$Id_sol_emp')";
  $resultado=$this->Conexion->query($sql);
    $this->Conexion->close();
    return $resultado;
} 
Public function aceptar_o_negar_Sol_emp($Id_sol_emp,$Est_sol_emp){
  $this->Conexion=Conectarse();
  $sql="update solic_emp set Est_sol_emp='$Est_sol_emp' where (Id_sol_emp='$Id_sol_emp')";
  $resultado=$this->Conexion->query($sql);
    $this->Conexion->close();
    return $resultado;
} 
Public function Consultar_Soles_emp($Est_sol_emp){
  $this->Conexion=Conectarse();   
  $sql="select * from solic_emp,tip_doc,tip_usu,est_sol where Est_sol_emp='$Est_sol_emp' and (solic_emp.Est_sol_emp=est_sol.Id_est_sol) and (solic_emp.Tip_usu=tip_usu.Id_tip_usu) and (solic_emp.Tip_doc_usu=tip_doc.Id_tip_doc)";
 /*  SELECT *
FROM solic_emp AS SE INNER JOIN
tip_doc AS TD
ON SE.Tip_doc_usu = TD.Id_tip_doc INNER JOIN
tip_usu AS TU ON SE.Tip_usu =
TU.Id_tip_usu INNER JOIN
est_sol AS ES ON SE.Est_sol_emp =
ES.Id_est_sol INNER JOIN
est_usu AS EU ON SE.Tip_usu =
TU.Id_tip_usu */
  $resultado=$this->Conexion->query($sql);
 
  $this->Conexion->close();
  return $resultado;	
}
Public function Consultar_Sol_emp($Id_sol_emp){
  $this->Conexion=Conectarse();   
  $sql="select * from solic_emp  where Est_sol_emp='1' and Id_sol_emp='$Id_sol_emp' ;";
  $resultado=$this->Conexion->query($sql);
 
  $this->Conexion->close();
  return $resultado;	
}

}
?>