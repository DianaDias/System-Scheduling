<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="{base_url}includes/css/estilo_teste.css">
  <script type="text/javascript" src="{base_url}includes/js/jquery/jquery.js"></script>
  <title>Welcome to CodeIgniter</title>
<script>
  //criei esta variavel pq o base_url é javascript e tinha que atricuir o valor base_url do php
 var base_url = {base_url};
  // função para salvar os dados do fomulario

  $(function(){
    //como é 'id' o btn_salvar usa # se fosse uma 'classe' seria ponto(.) ao inves de #
    //criei uma função tipo onclick para quando o botão for clicado, javascript criará a função
    //que enviará os dados para do form para um controller
    $('#btn_salvar').click(function(){
      //controlador a ser usado para salvar as informações e os parametros a ser salvos
      $.post(base_url + 'teste_jq_control/salvar',{
        //variaveis que recebo o conteudo do campo
        nome: $('#nome').val(),
        email: $('#email').val()
      }, function(data){ //funcao de callback que o controlador retorna
        if(data == 1){
          alert("Dados cadastrados!");
        }else{
          alert("Erro!");
        }
      });
    });
  });
  </script>
</head>
<body>
  <div id="container">
    <form onsubmit="return false;">
      <h1>Cadastro usuário novo controller</h1>
      <p>	Nome:
        <input type="text" name="nome" id="nome"/></p>
        Email:
        <input type="text" name="email" id="email"/>
        <p>	<button id="btn-salvar">Salvar</button></p>
      </form>
      <br>
      <a href="{base_url}"> << Voltar </a>
    </div>
  <!--  <script type="text/javascript"> salvar(); </script> -->
  </body>
  <!-- <script type="text/javascript" src="{base_url}includes/js/script_testando.js"></script> -->
  </html>
