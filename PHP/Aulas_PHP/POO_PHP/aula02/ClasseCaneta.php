<?php
class Caneta{
  var $modelo;
  var $cor;
  var $carga;
  var $tampada;

  function rabiscar (){
    if ($this->tampada == true) {
      print "<p>ERRO! Não posso rabiscar</p>";
    }else
    print "<p>estou rabiscando!</p>";
  }
  function tampar(){
    $this->tampada = true;
  }
  function destampar(){
    $this->tampada = false;
  }
}
 ?>
