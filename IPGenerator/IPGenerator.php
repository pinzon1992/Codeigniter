<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IPGenerator {
  /*
  * @param  string  $inicio Una direccion IPv4 valida para iniciar el rango
  * @param  string  $fin Una direccion IPv4 valida para finalizar el rango
  * @return array  Un arreglo que contiene las direcciones ip del rango dado
  */
  public function ipRange($inicio, $fin){
    $inicio = ip2long($inicio);
    $fin = ip2long($fin);
    return array_map('long2ip', range($inicio, $fin) );
  }
}
?>
