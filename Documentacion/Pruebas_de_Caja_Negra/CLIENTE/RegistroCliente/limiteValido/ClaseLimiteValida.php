<?php

class ClaseLimiteValida{
public function __constructor(){

}

private $listaDeCorreosRegistrados=array('Danielita93@gmail.com','Emilia89@gmail.com','LuisAlf56@outlook.es','Ana987@hotmail.com');


public function TestLimiteValida($email,$pass,$name){
   
  if (filter_var($email, FILTER_VALIDATE_EMAIL)== false ||$email== null  || in_array ($email,$this->listaDeCorreosRegistrados) )  {
    throw new InvalidArgumentException("Correo no válido.");
  }
  if (strlen($pass)<8 || strlen($pass)>30 || $pass == null) {
    throw new InvalidArgumentException("COntraseña no válida.");
  }
  if (is_numeric($name) || strlen($name)<10 || strlen($name)>35 || $name == null ) {
    throw new InvalidArgumentException("Orden no encontrada.");
  }
  /* return (boolean) filter_var($email, FILTER_VALIDATE_EMAIL); */

  return true;
}


}


?>