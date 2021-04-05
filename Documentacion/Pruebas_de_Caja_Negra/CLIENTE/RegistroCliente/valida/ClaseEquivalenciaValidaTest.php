<?php

use PHPUnit\Framework\TestCase;

Class ClaseEquivalenciaValidaTest Extends TestCase{

private $op;
  

  Public function setUp(): void{ 
    $this->op=new ClaseEquivalenciaValida();//se instancia la clase ue se desea revisar.
    
  
} 
public function testCPV_1_CorreoContraseñaYNombre(){
  $this->assertTrue($this->op->TestEquivalenciaValida('alv@gmail.com','1234', 'Britttany Paula Andrea Gonzalez Gutierrez '));
}
public function testCPV_2_CorreoContraseñaYNombre(){
  $this->assertTrue($this->op->TestEquivalenciaValida('Lauris58@gmail.cpm','123456789009876543211234567890ABC', 'laura Paez '));
}

public function testCPV_3_CorreoContraseñaYNombre(){
  $this->assertTrue($this->op->TestEquivalenciaValida('Psalamanca34@outlook.es','52864467', 'Britttany Paula Andrea Gonzalez Gutierrez '));
}
public function testCPV_4_CorreoContraseñaYNombre(){
  $this->assertTrue($this->op->TestEquivalenciaValida('Car8654los@hotmail.com','81576354', 'Carlos'));
}



}/* phpunit --bootstrap ./ClaseEquivalenciaValida.php ./ClaseEquivalenciaValidaTest.php */

?>  