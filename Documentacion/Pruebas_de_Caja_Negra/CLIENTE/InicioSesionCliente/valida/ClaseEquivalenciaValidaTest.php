<?php

use PHPUnit\Framework\TestCase;

Class ClaseEquivalenciaValidaTest Extends TestCase{

private $op;
  

  Public function setUp(): void{ 
    $this->op=new ClaseEquivalenciaValida();//se instancia la clase ue se desea revisar.
    
  
} 
public function testCPV_1_CorreoContraseñaYNombre(){
  $this->assertTrue($this->op->TestEquivalenciaValida('Danielita93@gmail.com','12345678'));
}
public function testCPV_2_CorreoContraseñaYNombre(){
  $this->assertTrue($this->op->TestEquivalenciaValida('Emilia89@gmail.com','Emily890'));
}

public function testCPV_3_CorreoContraseñaYNombre(){
  $this->assertTrue($this->op->TestEquivalenciaValida('LuisAlf56@outlook.es','4567LuisALF'));
}
public function testCPV_4_CorreoContraseñaYNombre(){
  $this->assertTrue($this->op->TestEquivalenciaValida('Ana987@hotmail.com','Analabanana98'));
}


}/* phpunit --bootstrap ./ClaseEquivalenciaValida.php ./ClaseEquivalenciaValidaTest.php */

?>  