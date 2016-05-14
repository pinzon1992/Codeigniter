<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IPGenerator {
  public function ipRange($inicio, $fin){
    $inicio = ip2long($inicio);
    $fin = ip2long($fin);
    return array_map('long2ip', range($inicio, $fin) );
  }
}
?>
