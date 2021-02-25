<?php
class Empre_Prov{
  public $ID_emp_prov;
  public $Nam_emp_prov;

  public function Empre_Prov($ID_emp_prov){

    $this->ID_emp_prov=$ID_emp_prov;

  }
  //Metodos Set
  Public Function Set_Name_est_prod($Nam_emp_prov){
    $this->Nam_emp_prov=$Nam_emp_prov;
  }
  //Metodo Get
  Public function Get_ID_emp_prov(){
    return $this->ID_emp_prov;
  }
  Public function Get_Nam_emp_prov(){
    return $this->Nam_emp_prov;
  }
  /*------------------- Metodos de consulta-------------------- */
  public function Crear_Empre_Prov(,$Id_emp  ,$EstadoUsu_Id_est_usu  ,$Solicitud_empleado_idSolicitud  ,$Name_emp  ,$Email_emp  ,$Pass_emp  ,$Img_emp  ,$Id_supvisor  ,$Obser_emp  ,$Edad_emp  ){
    $this->Id_emp=$Id_emp;
  $this->EstadoUsu_Id_est_usu=$EstadoUsu_Id_est_usu;
  $this->Solicitud_empleado_idSolicitud=$Solicitud_empleado_idSolicitud;
  $this->Name_emp=$Name_emp;
  $this->Email_emp=$Email_emp;
  $this->Pass_emp=$Pass_emp;
  $this->Img_emp=$Img_emp;
  $this->Id_supvisor=$Id_supvisor;
  $this->Obser_emp=$Obser_emp;
  $this->Edad_emp=$Edad_emp;
  }
  public function Agregar_Empre_Prov(){
  $this->Conexion=Conectarse();
  $sql="insert into citas(citFecha,citHora,citPaciente,citMedico,citConsultorio, citEstado,citObservaciones )?=
values ('$this->citFecha','$this->citHora','$this->citPaciente','$this->citMedico','$this->citConsultorio','$this->citEstado', '$his->citObservaciones')";
  $resultado=$this->Conexion->query($sql);
  $this->Conexion->close();
  return $resultado;
  }
  Public function Actualizar_Empre_Prov($Id_emp){
  $this->Conexion=Conectarse();
  $sql="update citas set citFecha='$this->citFecha', citHora='$this->citHora',citPaciente='$this->citPaciente',  citMedico='$this->citMedico',  citConsultorio='$this->citConsultorio',  citEstado='$this->citEstado',  citObservaciones='$this->citObservaciones'  where (idCita='$idCita')";
  $resultado=$this->Conexion->query($sql);
  $this->Conexion->close();
  return $resultado;
  } 
  Public function Consultar_Empre_Prov($Id_emp){
  $this->Conexion=Conectarse();   
   $sql="select idCita, citFecha, citHora, citEstado, citObservaciones, conNombre, medIdentificacion, medNombres, pacIdentificacion, pacNombres from citas,consultorios,medicos,pacientes where citEstado='Asignado' and (citas.citPaciente=pacientes.idPaciente) and (citas.citMedico=medicos.idMedico) and (citas.citConsultorio=consultorios.idConsultorio)";
   $resultado=$this->Conexion->query($sql);
  
   $this->Conexion->close();
   return $resultado;	
  }
}
?>