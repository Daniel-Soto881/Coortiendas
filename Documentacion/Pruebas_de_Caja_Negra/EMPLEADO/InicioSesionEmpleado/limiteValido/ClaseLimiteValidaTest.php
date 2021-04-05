<?php

use PHPUnit\Framework\TestCase;

Class ClaseLimiteValidaTest Extends TestCase{

private $op;
  

  Public function setUp(): void{ 
    $this->op=new ClaseLimiteValida();//se instancia la clase ue se desea revisar.
    
  
} 

public function testCPI_1_Correo_Contrasena_CC_rol(){
  $this->assertTrue($this->op->TestLimiteValida('laura@gmail.com','123456','1000148158','Almacenista'));
}  
public function testCPI_2_Correo_Contrasena_CC_rol(){
  $this->assertTrue($this->op->TestLimiteValida('Andre_85@hotmail.com','123456789009876543211234567890','528567345','Cajero'));
}  
public function testCPI_3_Correo_Contrasena_CC_rol(){
  $this->assertTrue($this->op->TestLimiteValida('Miguel58@hotmail.com','52864467','100000','Supervisor'));
}  
public function testCPI_4_Correo_Contrasena_CC_rol(){
  $this->assertTrue($this->op->TestLimiteValida('Sara75@gmail.com','80127387','4000000000','Administrador'));
}  

}/* phpunit --bootstrap ./ClaseLimiteValida.php ./ClaseLimiteValidaTest.php */

?>   