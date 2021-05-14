<?php

use PHPUnit\Framework\TestCase;

Class ClaseEquivalenciaInvalidaTest Extends TestCase{

private $op;
  

  Public function setUp(): void{ 
    $this->op=new ClaseEquivalenciaInvalida();//se instancia la clase ue se desea revisar.
    
  
} 
public function testCPI_1_Correo_Contrasena_CC_Cargo(){
  $this->expectException(InvalidArgumentException::class);
  $this->op->TestEquivalenciaInvalida('Juanit@hotmail.com','23aju567','9884578','Almacenista');
}
public function testCPI_2_Correo_Contrasena_CC_Cargo(){
  $this->expectException(InvalidArgumentException::class);
  $this->op->TestEquivalenciaInvalida('Sofia','323211f','55576867','Almacenista');
}
public function testCPI_3_Correo_Contrasena_CC_Cargo(){
  $this->expectException(InvalidArgumentException::class);
  $this->op->TestEquivalenciaInvalida('','Changos15','9876543456','Cajero');
}
public function testCPI_4_Correo_Contrasena_CC_Cargo(){
  $this->expectException(InvalidArgumentException::class);
  $this->op->TestEquivalenciaInvalida('@H0tma1l$#"!"#','Lauri89Zeus45','81975654','Cajero');
}
public function testCPI_5_Correo_Contrasena_CC_Cargo(){
  $this->expectException(InvalidArgumentException::class);
  $this->op->TestEquivalenciaInvalida('Andres571@gmail.com','123','52743298','Supervisor');
}
public function testCPI_6_Correo_Contrasena_CC_Cargo(){
  $this->expectException(InvalidArgumentException::class);
  $this->op->TestEquivalenciaInvalida('Laura8812@gmail.es','LauraperritoXd987654321271826|8262817627|61287|1777776363','81675438','Supervisor');
}
public function testCPI_7_Correo_Contrasena_CC_Cargo(){
  $this->expectException(InvalidArgumentException::class);
  $this->op->TestEquivalenciaInvalida('JuanA13@hotmail.com','Luke98987','1000876542','Administrador');
}
public function testCPI_8_Correo_Contrasena_CC_Cargo(){
  $this->expectException(InvalidArgumentException::class);
  $this->op->TestEquivalenciaInvalida('AndreG78@gmail.com','Andre@98;_?¡','1012987654','Administrador');
}
public function testCPI_9_Correo_Contrasena_CC_Cargo(){
  $this->expectException(InvalidArgumentException::class);
  $this->op->TestEquivalenciaInvalida('LucasX78@outlook.es','Luke782O18','81092098,.,,,','Almacenista');
}
public function testCPI_10_Correo_Contrasena_CC_Cargo(){
  $this->expectException(InvalidArgumentException::class);
  $this->op->TestEquivalenciaInvalida('Lau78_98per@hotmail.com','LaU12765882','53782','Almacenista');
}
public function testCPI_11_Correo_Contrasena_CC_Cargo(){
  $this->expectException(InvalidArgumentException::class);
  $this->op->TestEquivalenciaInvalida('IngeEdgar99@gmail.com','209738926138edgar','101289232482','Cajero');
}
public function testCPI_12_Correo_Contrasena_CC_Cargo(){
  $this->expectException(InvalidArgumentException::class);
  $this->op->TestEquivalenciaInvalida('Luisa47@outlook.com','28761527Luisita98','1000128ul','Cajero');
}
public function testCPI_13_Correo_Contrasena_CC_Cargo(){
  $this->expectException(InvalidArgumentException::class);
  $this->op->TestEquivalenciaInvalida('Maicol95@hotmail.com','987654','1233224560','Cargosss');
}
public function testCPI_14_Correo_Contrasena_CC_Cargo(){
  $this->expectException(InvalidArgumentException::class);
  $this->op->TestEquivalenciaInvalida('Angel4567@gmail.es','123456789','89373981','Administrador');
}
			
			
			
			
			
			
			
			
			
			
			
			


}/* phpunit --bootstrap ./ClaseEquivalenciaInvalida.php ./ClaseEquivalenciaInvalidaTest.php */

?>  			