<?php

class ClaseEquivalenciaInvalida{
public function __constructor(){

}
private $cont_1=0;
private $listaDeCorreosRegistrados=array('laura@gmail.com','Andre_85@hotmail.com','Miguel58@hotmail.com','Sara75@gmail.com','Juano15@hotmail.es','Camila17pt@outlook.com','Jhojan43@gmail.es','LuisaGr8@outlook.es');
private $listaDeContraseñasRegistradas=array('LAURAinteligente','Andres3429AbC','MiguelAndEr5','SaR78239','J1527uano','Kami3300','Jhon 3727','Lyidoi878865kl'); 
private $equiv= "/^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+$/";
private $roles=array('Almacenista','Cajero','Supervisor','Administrador');
/* $listaDeCorreosRegistrados=array('laura@gmail.com','Emilia89@gmail.com','LuisAlf56@outlook.es','Ana987@hotmail.com'); */

/* $this->listaDeCorreosRegistrados[0]='laura@gmail.com';
$this->listaDeCorreosRegistrados[1]='Andre_85@hotmail.com';
$this->listaDeCorreosRegistrados[2]='Miguel58@hotmail.com';
$this->listaDeCorreosRegistrados[3]='Sara75@gmail.com';
$this->listaDeCorreosRegistrados[4]='Juano15@hotmail.es';
$this->listaDeCorreosRegistrados[5]='Camila17pt@outlook.com';
$this->listaDeCorreosRegistrados[6]='Jhojan43@gmail.es';
$this->listaDeCorreosRegistrados[7]='LuisaGr8@outlook.es'; */
//-----------Contraseñas---------
/* $this->listaDeContraseñasRegistradas[0]='LAURAinteligente';
$this->listaDeContraseñasRegistradas[1]='Andres3429AbC';
$this->listaDeContraseñasRegistradas[2]='MiguelAndEr5';
$this->listaDeContraseñasRegistradas[3]='SaR78239';
$this->listaDeContraseñasRegistradas[4]='J1527uano';
$this->listaDeContraseñasRegistradas[5]='Kami3300';
$this->listaDeContraseñasRegistradas[6]='Jhon 3727';
$this->listaDeContraseñasRegistradas[7]='Lyidoi878865kl'; */
public function TestEquivalenciaInvalida($email,$pass,$cc,$rol){ 
   
  if (filter_var($email, FILTER_VALIDATE_EMAIL)== false ||$email== null || !in_array ($email,$this->listaDeCorreosRegistrados) )  {
    throw new InvalidArgumentException("Correo no válido.");
  } 
   if (strlen($pass)<8 || strlen($pass)>30 || $pass == null || !in_array ($pass,$this->listaDeContraseñasRegistradas)|| (!(preg_match($this->equiv,$pass)))) {
    throw new InvalidArgumentException("Contraseña no válida.");
  } 
   for ($i=0; $i < 8; $i++) { 
     if ($email==$this->listaDeCorreosRegistrados[$i] && $pass==$this->listaDeContraseñasRegistradas [$i]) {
      
        $this->x++;
       
     }
   }
   if ($this->x==0) {
    throw new InvalidArgumentException("Email no coincide con la contraseña.");
   }
   if (!(preg_match($this->equiv,$pass))) {
    throw new InvalidArgumentException("Contraseña invalida.");
   }
  
  if ((strlen($cc))<6 || (strlen($cc))>10 || $cc == null || !is_numeric($cc)) {
    throw new InvalidArgumentException("Número de identificación inválido.");
  }
   if (!in_array($rol)) {
    throw new InvalidArgumentException("Rol Invalido.");
   }  

  /* return (boolean) filter_var($email, FILTER_VALIDATE_EMAIL); */

  return true; 
} 


}


?>