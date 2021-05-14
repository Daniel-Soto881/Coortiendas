<?php

use PHPUnit\Framework\TestCase;

Class ClaseLimiteInvalidaTest Extends TestCase{

private $op;
  

  Public function setUp(): void{ 
    $this->op=new ClaseLimiteInvalida();//se instancia la clase ue se desea revisar.
    
  
} 
public function testCLI_1_ContrasenaMenor(){
  $this->expectException(InvalidArgumentException::class);
  $this->op->TestLimiteInvalida('Jesteban787@gmail.com',"1234",'1000148158','Almacenista');
}
public function testCLI_2_ContrasenaMayor(){
  $this->expectException(InvalidArgumentException::class);
  $this->op->TestLimiteInvalida('Luis_975@hotmail.com',"123456789009876543211234567890ABC",'528567345','Cajero');
}
public function testCLI_1_CCMenor(){
  $this->expectException(InvalidArgumentException::class);
  $this->op->TestLimiteInvalida('Jesteban787@gmail.com',"52864467",'99999','Cajero');
}
public function testCLI_2_CCMayor(){
  $this->expectException(InvalidArgumentException::class);
  $this->op->TestLimiteInvalida('Luis_975@hotmail.com',"80127387",'4000000001','Supervisor');
}

}/* phpunit --bootstrap ./ClaseLimiteInvalida.php ./ClaseLimiteInvalidaTest.php */

?>  
