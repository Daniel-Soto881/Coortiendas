<?php
class Movimiento_Inventario{
  //Atributos
  Public $Id_mov_inv ;
  Public $TipMov_Id_tip_mov ;
  Public $EstadoMovimiento_Id_est_mov;
  Public $Inventario_Entradas_2 ;
  Public $Fec_Mov_inv ;/* Fecha exacta que se hizo el movimiento */
  Public $Desc_mov_inv ;/* Descripcion de movimiento */
  Public $Cant_mov_inv ;
  public $init_horaria;

  public function Movimiento_Inventario($Id_mov_inv){
      $this->Id_mov_inv=$Id_mov_inv;
  }
  /* --------------Metodos Set ---------------*/
      Public function Set_TipMov_Id_tip_mov($TipMov_Id_tip_mov){
        $this->TipMov_Id_tip_mov=$TipMov_Id_tip_mov;
      }
      Public function Set_EstadoMovimiento_Id_est_mov($EstadoMovimiento_Id_est_mov){
        $this->EstadoMovimiento_Id_est_mov=$EstadoMovimiento_Id_est_mov;
      }
      Public function Set_Inventario_Entradas_2($Inventario_Entradas_2){
        $this->Inventario_Entradas_2=$Inventario_Entradas_2;
      }
      Public function Set_Fec_Mov_inv($Fec_Mov_inv){
        ini_set('date.timezone', 'America/Bogota');
        $Fec_Mov_inv= date('Y-m-d, H:i:s', time());
        $this->Fec_Mov_inv=$Fec_Mov_inv;

      }
      Public function Set_Desc_mov_inv($Desc_mov_inv){
        $this->Desc_mov_inv=$Desc_mov_inv;
      }
      Public function Set_Cant_mov_inv($Cant_mov_inv){
        $this->Cant_mov_inv=$Cant_mov_inv;
 }
/* -----------------Metodos Get----------------- */
        Public function Get_TipMov_Id_tip_mov(){
          return $this->TipMov_Id_tip_mov;
        }
        Public function Get_EstadoMovimiento_Id_est_mov(){
          return $this->EstadoMovimiento_Id_est_mov;
        }
        Public function Get_Inventario_Entradas_2(){
          return $this->Inventario_Entradas_2;
        }
        Public function Get_Fec_Mov_inv(){
          return $this->Fec_Mov_inv;
        }
        Public function Get_Desc_mov_inv(){
          return $this->Desc_mov_inv;
        }
        Public function Get_Cant_mov_inv(){
          return $this->Cant_mov_inv;
        }
  /*---------------- Metodos distintos-------------- */
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
  $sql="select * from tip_prod  where Id_tip_prod='$Id_tip_prod' ";
  $resultado=$this->Conexion->query($sql);
  $this->Conexion->close();
  return $resultado;
}
Public function Actualizar_Empre_Prov($Id_emp){
 $this->Conexion=Conectarse();  
  $sql="select * from tip_prod;";
  $resultado=$this->Conexion->query($sql);
  $this->Conexion->close();
  return $resultado;
} 
Public function Consultar_Empre_Prov($Id_emp){
$this->Conexion=Conectarse();   
  $sql="select * from producto,estad_prod,tip_prod where ((producto.Est_prod=estad_prod.Id_estad_prod) and (producto.Tip_prod=tip_prod.Id_tip_prod)) and (Est_prod='1' or Est_prod='4') GROUP BY Tip_prod;";
  $resultado=$this->Conexion->query($sql);
 
  $this->Conexion->close();
  return $resultado;
}


}
?>