<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


  <title>PHP POO</title>

  <style>
    #ex2 {
      display: none;
    }
  </style>
</head>
<body>
  <div class="container">
  <h1>Treinando PHP POO</h1>
  <h3>Básico</h3>

  <?php
    require_once "class/caneta.php"; //chamando o arquivo que contém a classe
    $bic = new Caneta; //criando um OBJETO da classe CANETA com o nome 'bic'
    
    // Definindo caracteristicas para o objeto criado
    $bic->cor = "Azul";
    $bic->modelo = "Cristal";

    $bic->tampar();
    
    // echo "<script>prompt('Digite um número')</script>";

    // executando métodos do objeto criado
    $bic->rabiscar();
    
    //mostrando as características do objeto
    print_r($bic);
  ?>
  <br>
  <br>
  <hr>

  <div id='ex2'>
  <h3>Novo exemplo - Alterar cor do fundo</h3>
  <p>Chame dia() ou noite() para trocar a cor do fundo</p>
  <?php
    require_once "class/background.class.php";
    $index_fundo = new Background;

    // Ativando ou desativando o modo escuro
    $index_fundo->dia();

    // Definindo o valor do atributo mensagem do objeto Index_fundo
    if($index_fundo->ativar == true){
      $index_fundo->mensagem = "Modo Claro Ativo";
    } else{
      $index_fundo->mensagem = "Modo escuro Ativo";
    }

    $index_fundo->mudarCor(); //chamando o método mudarCor

  ?>
  </div>
  </div>
</body>
</html>