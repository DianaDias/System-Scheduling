<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
*
*/
class Teste_jq_control extends CI_Controller {

  public function teste(){
    //esse parse é para podermos usar o base_url ele pode trabalhar com varios parametros
    $this->parser->parse('testando_jq', array( 'base_url' => base_url()));
    // echo base_url();
  }

  public function salvar(){
    //pego oque esta vindo na função
    $nome = $this->input->post("nome");
    $email = $this->input->post("email");
    $dados = array('nome' => $nome,
                   'email'=> $email);
    //inseri no banco
    $resultado = $this->db->insert("clientes", $dados);
    if($resultado){
      echo 1;
    }else{
      echo 0;
    }
  }
}
