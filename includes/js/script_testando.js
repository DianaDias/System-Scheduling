//resumindo: aqui tem 3 funções uma padrão outra para enviar os dados para o controller e outra que
//recebe o retorno para dizendo se foi salvo ou não

//criei esta variavel pq o base_url é javascript e tinha que atricuir o valor base_url do php
var base_url = '<? base_url() ?>';
// função para salvar os dados do fomulario
$(function salvar(){
  //como é 'id' o btn_salvar usa # se fosse uma 'classe' seria ponto(.) ao inves de #
  //criei uma função tipo onclick para quando o botão for clicado, javascript criará a função
  //que enviará os dados para do form para um controller
  $('#btn_salvar').click(function(){
    //controlador a ser usado para salvar as informações e os parametros a ser salvos
    $.post(base_url +'teste_jq_control/salvar',{
      //variaveis que recebo o conteudo do campo
      nome:$('#nome').val(),
      email:$('#email').val()
    }, function(data){ //funcao de callback que o controlador retorna
      if(data == 1){
        alert("Dados cadastrados!");
      }else{
        alert("Erro!");
      }
    });
  });
});
