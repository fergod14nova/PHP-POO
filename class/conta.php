<?php
/**
 * INSTRUÇÕES PARA REALIZAR O EXERCÍCIO
 * Os tipos de conta são: CC e CP
 * CC começa com R$ 50,00 de saldo, e CP começa com R$ 150,00 de Saldo
 * Mensalidades: CC = R$ 12,00 CP = R$ 20,00
 * A conta NÃO pode ser fechada caso haja saldo, ou débito
 * Não posso Sacar um valor se a conta estive fechada
 * Também não posso sacar um valor mais alto do que o Saldo que está na conta
 * Por padrão a conta começa FECHADA
 * 
 */

class Conta{
  public $num;
  protected $tipo;
  private $nome;
  private $saldo;
  private $status;

  public function __construct($num, $tipo, $nome, $saldo){
    
    if($tipo == "CC" || $tipo == "CP"){
      $mensalidade = 0;
      switch($tipo == ""){
        case "CC":
          $mensalidade = 12;
          break;
          case "CP":
            $mensalidade = 20;
            break;
          } return $mensalidade;
          
          $this->tipo = $tipo;
          if($saldo > 0){
            $saldoAtual = $saldo - $mensalidade;
            // $this->num = $num;
            $this->num = setNum($num);
            $this->nome = $nome;
            $this->status = false;
            $this->saldo = $saldoAtual;
            abrirConta();

            echo "<p>Parabéns Sr(a). ".getNome()." a sua conta foi aberta com sucesso! </br></p>";
            echo "<p>O saldo da sua conta é: R$".getSaldo()." </p>";
      }else{
        echo "<p>SALDO INSUFICIENTE PARA ABRIR A CONTA.</p>";
      }
    } else{
      echo "<p>Por favor, escolha entre os 2 tipos de contas existentes
      <strong>CC</strong> ou <strong>CP</strong></p>";
    }

  }

  // métodos
  public function abrirConta(){
    $this->status = true;
  }
  // fecharConta
  // depositar
  // sacar
  // pagarMensalidade


  /**
   * Get the value of num
   */ 
  public function getNum()
  {
    return $this->num;
  }

  /**
   * Set the value of num
   *
   * @return  self
   */ 
  public function setNum($num)
  {
    $this->num = $num;

    return $this;
  }

  /**
   * Get the value of tipo
   */ 
  public function getTipo()
  {
    return $this->tipo;
  }

  /**
   * Set the value of tipo
   *
   * @return  self
   */ 
  public function setTipo($tipo)
  {
    $this->tipo = $tipo;

    return $this;
  }

  /**
   * Get the value of nome
   */ 
  public function getNome()
  {
    return $this->nome;
  }

  /**
   * Set the value of nome
   *
   * @return  self
   */ 
  public function setNome($nome)
  {
    $this->nome = $nome;

    return $this;
  }

  /**
   * Get the value of saldo
   */ 
  public function getSaldo()
  {
    return $this->saldo;
  }

  /**
   * Set the value of saldo
   *
   * @return  self
   */ 
  public function setSaldo($saldo)
  {
    $this->saldo = $saldo;

    return $this;
  }

  /**
   * Get the value of status
   */ 
  public function getStatus()
  {
    return $this->status;
  }

  /**
   * Set the value of status
   *
   * @return  self
   */ 
  public function setStatus($status)
  {
    $this->status = $status;

    return $this;
  }
}