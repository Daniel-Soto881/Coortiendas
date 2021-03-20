<?php

use PHPUnit\Framework\TestCase;

Class ClaseEquivalenciaInvalidaTest Extends TestCase{

private $op;
  

  Public function setUp(): void{ 
    $this->op=new ClaseEquivalenciaInvalida();//se instancia la clase ue se desea revisar.
    
  
} 
public function testCPI_1_CorreoYContrasena(){
  $this->expectException(InvalidArgumentException::class);
  $this->op->TestEquivalenciaInvalida('niña@NOSAJO.com',"hola777xd");
}
public function testCPI_2_CorreoYContrasena(){
  $this->expectException(InvalidArgumentException::class);
  $this->op->TestEquivalenciaInvalida('donpa.789@gmail.com',"BUENOSdiasporlamañana123456789,,");
}
public function testCPI_3_CorreoYContrasena(){
  $this->expectException(InvalidArgumentException::class);
  $this->op->TestEquivalenciaInvalida('',"donpa987");
}
public function testCPI_4_CorreoYContrasena(){
  $this->expectException(InvalidArgumentException::class);
  $this->op->TestEquivalenciaInvalida('gmail.com@L"][][]__.',"Buenas");
}
public function testCPI_5_CorreoYContrasena(){
  $this->expectException(InvalidArgumentException::class);
  $this->op->TestEquivalenciaInvalida('laura@gmail.com',"12345");
}
public function testCPI_6_CorreoYContrasena(){
  $this->expectException(InvalidArgumentException::class);
  $this->op->TestEquivalenciaInvalida('Jesteban787@gmail.com',"123456789987654321abcdefghijklmn");
}
public function testCPI_7_CorreoYContrasena(){
  $this->expectException(InvalidArgumentException::class);
  $this->op->TestEquivalenciaInvalida('Luis_975@hotmail.com',"Lauridperro");
}


}/* phpunit --bootstrap ./ClaseEquivalenciaInvalida.php ./ClaseEquivalenciaInvalidaTest.php */

?>  