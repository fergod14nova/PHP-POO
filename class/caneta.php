<?php
// CURSO DE PHP ORIENTADO A OBJETOS - CEV

// Aula 2b - criando classe chamada CANETA
class Caneta {
  // CRIANDO OS ATRIBUTOS DESSE OBJETO
  public $modelo;
  public $cor;
  private $ponta;
  protected $carga;
  private $tampada;

  // CRIANDO OS MÉTODOS
  public function rabiscar(){
    // $this serve para verificar atributo que está dentro da própria classe
    if($this->tampada == true){
      echo "<p>Caneta está tampada, NÃO é possível rabiscar</p>";
    } else{
      echo "<p>A caneta está pronta para escrever!</p>";
    }
  }

  /**
   * Nesse caso, o método $this serve para usar o OBJETO que está chamando o método
   * ou seja, ao invés de escrever $bic->tampada = false
   * usamos $this, assim poderemos reaproveitar o trecho do código usando outros objetos
   * 
   */
  public function tampar(){
    $this->tampada = true;
  }

  public function destampar(){
    $this->tampada = false;
  }
}

