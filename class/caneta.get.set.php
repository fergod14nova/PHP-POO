<!-- CRIAÇÃO DA CLASSE CANETA DE FORMA CORRETA, USANDO OS MÉTODOS GET E SET -->
<?php

class CanetaNova{
  // ATRIBUTOS
  public $modelo;
  private $ponta;
  private $tampada;
  private $cor;

  
  //Criando método construtor, existe duas formas: Usando CONSTRUCT, ou usando o mesmo nome da classe
  // public function CanetaNova(){ 
  // public function __construct(){ 

    
    public function tampar(){
      $this->tampada = true;
    }
    
    // SETANDO MODELO
    public function getModelo(){
      return $this->modelo;
    }
    public function setModelo($m){
      $this->modelo = $m;
    }
    
    // SETANDO PONTA
    public function getPonta(){
      return $this->ponta;
    }
    public function setPonta($p){
      $this->ponta = $p;
    }
    
    public function __construct($m, $c, $p){ 
      $this->modelo = $m;
      $this->cor = $c;
      $this->ponta = $p;
      $this->tampar();
    }

}