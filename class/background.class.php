<?php

// CRIANDO CLASSE PARA EXIBIR MENSAGENS

class Background{
  // definindo atributos
  var $mensagem;
  var $ativar;
  
  // definindo métodos
  function noite(){
    $this->ativar = false;
    
  }

  function dia(){
    $this->ativar = true;
  }

  function mudarCor(){
    if($this->ativar == true){
      $men = $this->mensagem;
      echo "<h4>A mensagem é: $men</h4>";
      echo "<script>
        $('body').css('color','black')
      </script>";
    } else{
      $men = $this->mensagem;
      echo "<h4>A mensagem é: $men</h4>";
      echo "<script>
        $('body').css('background','black')
        $('body').css('color','yellow')
      </script>";
    }
  }
  
}