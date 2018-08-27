<?php
  class Caneta{
    private $modelo;
    private $ponta;
    private $tampada;
    private $cor;

    public function Caneta($n, $c, $p){ //método construtor
      $this->modelo = $n;
      $this->cor = $c;
      $this->ponta = $p;
      $this->setTampada(true);
    }

    public function getTampada(){
      return $this->tampada;
    }
    public function setTampada($p){
      return $this->tampada = $p;
    }
    public function getModelo(){
      return $this->modelo;
    }
    public function setModelo($m){
        $this->modelo = $m;
    }
    public function getPonta(){
      return $this->ponta;
    }
    public function setPonta($p){
      $this->ponta = $p;
    }
  }
  ?>
