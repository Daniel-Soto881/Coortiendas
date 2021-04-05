<?php

use PHPUnit\Framework\TestCase;

Class ClaseLimiteInvalidaTest Extends TestCase{

private $op;
  

  Public function setUp(): void{ 
    $this->op=new ClaseLimiteInvalida();//se instancia la clase ue se desea revisar.
    
  
} 
public function testCLI_1_ContrasenaMenor(){
  $this->expectException(InvalidArgumentException::class);
  $this->op->TestLimiteInvalida('Jesteban787@gmail.com',"1234");
}
public function testCLI_7_ContrasenaMayor(){
  $this->expectException(InvalidArgumentException::class);
  $this->op->TestLimiteInvalida('Luis_975@hotmail.com',"123456789009876543211234567890ABC");
}


}/* phpunit --bootstrap ./ClaseLimiteInvalida.php ./ClaseLimiteInvalidaTest.php */

?>   