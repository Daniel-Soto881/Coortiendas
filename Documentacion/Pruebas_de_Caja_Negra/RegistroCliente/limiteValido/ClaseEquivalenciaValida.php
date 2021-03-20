<?php

class ClaseEquivalenciaValida{
public function __constructor(){

}

private $listaDeOrdenesPermitidas=array('cheque','depósito','pago factura','retirada de fondos');

public function TestEquivalenciaValida($cod,$oper,$orden){
   
  if (!is_numeric($cod) || $cod>999 || $cod==null || $cod<200  ) {
    throw new InvalidArgumentException("Código de área no válido.");
  }
  if (strlen($oper)!=6 || $oper== null) {
    throw new InvalidArgumentException("Operación no válida.");
  }
  if (!in_array ($orden,$this->listaDeOrdenesPermitidas) || $orden== null) {
    throw new InvalidArgumentException("Orden no encontrada.");
  }
  return true;
}


}


?>