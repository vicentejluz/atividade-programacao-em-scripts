<?php
  function calcularIPVA($ano, $valor){
    if ($ano > 1999){
      $ipva = $valor * 0.04;
      return $ipva;
    }
    return 0;
  }
?>
