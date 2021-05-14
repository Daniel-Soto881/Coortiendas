<?php

use PHPUnit\Framework\TestCase;

Class ClaseEquivalenciaInvalidaTest Extends TestCase{

private $op;
  

  Public function setUp(): void{ 
    $this->op=new ClaseEquivalenciaInvalida();//se instancia la clase ue se desea revisar.
    
  
} 
public function testCPI_1_CorreoYContrasena(){
  $this->expectException(InvalidArgumentException::class);
  $this->op->TestEquivalenciaInvalida('Doña@gmail.com',"Doña12", 'Martina Ramirez Gonzales ');
}
public function testCPI_2_CorreoYContrasena(){
  $this->expectException(InvalidArgumentException::class);
  $this->op->TestEquivalenciaInvalida('Emilia89@gmail.com',"Alv129172,", 'Alvaro Antonio Gomes');
}
public function testCPI_3_CorreoYContrasena(){
  $this->expectException(InvalidArgumentException::class);
  $this->op->TestEquivalenciaInvalida('',"Sd-12987653", 'Julio Hernandez');
}
public function testCPI_4_CorreoYContrasena(){
  $this->expectException(InvalidArgumentException::class);
  $this->op->TestEquivalenciaInvalida('gmailcom@',"Ejemplo41", 'Laura nuñez jimenez');
}
public function testCPI_5_CorreoYContrasena(){
  $this->expectException(InvalidArgumentException::class);
  $this->op->TestEquivalenciaInvalida('Fernandita3@gmail.com',"123af", 'Fernanda Soto ');
}
public function testCPI_6_CorreoYContrasena(){
  $this->expectException(InvalidArgumentException::class);
  $this->op->TestEquivalenciaInvalida('GermanH456@hotmail.com',"12345678900987654321abcdefghijklmnñopq", 'German Herrera');
}
public function testCPI_7_CorreoYContrasena(){
  $this->expectException(InvalidArgumentException::class);
  $this->op->TestEquivalenciaInvalida('Estefa886s@hotmail.com',"@()Vargass....", 'Estefania Vargas');
}
public function testCPI_8_CorreoYContrasena(){
  $this->expectException(InvalidArgumentException::class);
  $this->op->TestEquivalenciaInvalida('Luisitapt@gmail.com',"Luisa9864221", '12345678');
}
public function testCPI_9_CorreoYContrasena(){
  $this->expectException(InvalidArgumentException::class);
  $this->op->TestEquivalenciaInvalida('Julio886231@yahoo.es',"Julio87654321", 'AOIUSIOSNASODKSNLAKJSOKKDOAKSDIQJNSDKAMSDBIQJSDBQIJSBDQIJS');
}
public function testCPI_10_CorreoYContrasena(){
  $this->expectException(InvalidArgumentException::class);
  $this->op->TestEquivalenciaInvalida('Mary7854@outlook.es',"Almuerzo123", 'Maria');
}
public function testCPI_11_CorreoYContrasena(){
  $this->expectException(InvalidArgumentException::class);
  $this->op->TestEquivalenciaInvalida('Alvago008@hotmail.com',"Dias9876", '@lva G()M3_');
}


}/* phpunit --bootstrap ./ClaseEquivalenciaInvalida.php ./ClaseEquivalenciaInvalidaTest.php */

?>  