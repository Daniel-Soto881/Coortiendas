<?php

use PHPUnit\Framework\TestCase;

Class ClaseLimiteValidaTest Extends TestCase{

private $op;
  

  Public function setUp(): void{ 
    $this->op=new ClaseLimiteValida();//se instancia la clase ue se desea revisar.
    
  
} 
public function testCPI_6_CorreoYContrasena(){
  $this->assertTrue($this->op->TestLimiteValida('Danielita93@gmail.com',"12345678"));
}
public function testCPI_7_CorreoYContrasena(){
  $this->assertTrue($this->op->TestLimiteValida('LuisAlf56@outlook.es',"123456789009876543211234567890"));
}  


}/* phpunit --bootstrap ./ClaseLimiteValida.php ./ClaseLimiteValidaTest.php */

?>  