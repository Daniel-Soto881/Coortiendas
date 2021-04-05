<?php

class ClaseEquivalenciaInvalida{
public function __constructor(){

}

/* private $listaDeCorreosRegistrados=array(' laura@gmail.com','loisaGimenez@gmail.com','leonidasGomez@hotmail.com','CatalinaGomez@hotmail.com','LOLA@hotmail.com','LGonzi98@hotmail.com','LEONEL@hotmail.com','Mary6895@gmail.com','Laura1654_9@hotmail.com','AngelaNu@outlook.es ','EstebanArme98@gmail.com'); */
private $listaDeCorreosRegistrados=array('Danielita 93@gmail.com','Emilia89@gmail.com','LuisAlf56@outlook.es','Ana987@hotmail.com','Estefa886s@hotmail.com','Alvago008@hotmail.com',);

public function TestEquivalenciaInvalida($email,$pass,$name){
   
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